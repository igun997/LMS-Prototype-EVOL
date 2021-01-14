<?php

namespace App\Http\Controllers;

use App\Casts\VirtualAttendance;
use App\Casts\VirtualStatus;
use Illuminate\Http\Request;
use App\Models\{Admin,
    Banksoal,
    Guru,
    Jawaban,
    JawabanItem,
    Kela,
    Matpel,
    Revisi\VirtualClass,
    Revisi\VirtualClassAttendance,
    Rombel,
    Siswa,
    Ujian,
    UjianItem};
use App\Exports\{UnduhJawaban};
use Excel;

class SiswaControl extends Controller
{
    public function login(Request $req)
    {
        $s = Siswa::where($req->all());
        if ($s->count() > 0) {
            $nama = $s->first()->nama;
            $data = $req->all();
            $data["nama"] = $nama;
            return response()->json(["status" => 1, "data" => $data]);
        } else {
            return response()->json(["status" => 0]);
        }
    }
    public function unduh($nis,$id){

        return Excel::download(new UnduhJawaban($id,$nis), 'unduh_'.$nis.'.xlsx');
    }
    public function ujian($nis)
    {
        $data = [];
        $data["data"] = [];
        $c = Siswa::where(["nis" => $nis]);
        if ($c->count() > 0) {
            $d = $c->first();
            $jurusan = $d->kela;
            $kelas = $d->kela->kela;
            $matpel_jurusan = $jurusan->matpels;
            $matpel_kelas = $kelas->matpels;
            $getInMatpel = [];
            foreach ($matpel_jurusan as $key => $value) {
                $getInMatpel[] = $value->id;
            }
            foreach ($matpel_kelas as $key => $value) {
                $getInMatpel[] = $value->id;
            }
            $ujian = Ujian::whereIn("matpel_id", $getInMatpel)->get();
            foreach ($ujian as $key => $value) {
                $tutup = strtotime($value->tgl_ditutup);
                if($tutup < time()){
                    continue;
                }
                $sync = "Belum";
                $tutup = date("d-m-Y H:i:s", strtotime($value->tgl_ditutup));
                $isSync = Jawaban::where(["ujian_id" => $value->id, "nis" => $nis]);
                if ($isSync->count() > 0) {
                    $sync = "Sudah";
                }
                if ($value->tgl_ditutup == null) {
                    $tutup = "Tidak Ditentukan";
                }
                if ($isSync->count() > 0) {
                    $data["data"][] = [($key + 1), $value->matpel->nama."( ".$value->nama_ujian." )", "(" . date("d-m-Y H:i:s", strtotime($value->tgl_dibuka)) . ") -> (" . $tutup . ")", $value->waktu . " Menit", $sync, "<button class='button button_small selesai' data-id='$value->id' disabled>Dikerjakan</button>"];
                } else {

                     $data["data"][] = [($key + 1), $value->matpel->nama."( ".$value->nama_ujian." )", "(" . date("d-m-Y H:i:s", strtotime($value->tgl_dibuka)) . ") -> (" . $tutup . ")", $value->waktu . " Menit", $sync, "<button class='button button_small unduh' data-id='$value->id' disabled>Unduh</button>"];
                }
            }
        }
        return response()->json($data);
    }

    public function soal($ujian)
    {
        $soal = [];
        $ujian = ujian::where(["id" => $ujian]);
        if ($ujian->count() > 0) {
            $data = $ujian->first();
            $si = [];
            foreach ($data->ujian_items as $key => $value) {
                $soal_list = $value->banksoal->soal;

                if ($value->banksoal->jenis == "pg") {
                    $si[] = ["id" => $value->id, "tipe" => $value->banksoal->jenis, "soal" => $soal_list, "pg_a" => $value->banksoal->pg_a, "pg_b" => $value->banksoal->pg_b, "pg_c" => $value->banksoal->pg_c, "pg_d" => $value->banksoal->pg_d, "pg_e" => $value->banksoal->pg_e];
                } else {

                    $si[] = ["id" => $value->id, "tipe" => $value->banksoal->jenis, "soal" => $soal_list];
                }
            }
            shuffle($si);
            $soal[$data->id] = ["matpel" => $data->matpel->nama, "buka" => date("Y-m-d H:i:s", strtotime($data->tgl_dibuka)), "ditutup" => date("Y-m-d H:i:s", strtotime($data->tgl_ditutup)), "nama_ujian" => $data->nama_ujian, "waktu" => $data->waktu, "pin" => $data->pin, "soal" => $si];
            return response()->json(["status" => 1, "data" => $soal]);
        } else {
            return response()->json(["status" => 0]);
        }
    }

    public function jawaban(Request $req)
    {
        $data = $req->all();
        unset($data["nis_siswa"]);
        unset($data["password"]);
        $jawaban = [];
        $ins = Jawaban::create(["nis" => $data["nis"], "ujian_id" => $data["ujian_id"]]);
        if ($ins) {
            $lid = $ins->id;
            foreach ($data["jawaban"] as $key => $value) {
                $jawaban[] = ["ujian_item_id" => $key, "jawaban_id" => $lid, "jawaban" => $value];
            }
            $s = JawabanItem::insert($jawaban);
            if ($s) {
                return response()->json(["status" => 1]);
            } else {
                return response()->json(["status" => 0]);
            }
        } else {
            return response()->json(["status" => 0]);
        }
    }

    public function virtual_class_list(Request  $req,$nis)
    {
        $kelas_id = Siswa::where(["nis"=>$nis])->first()->kelas_id;
        $vclass = VirtualClass::where(["kelas_id"=>$kelas_id])->get();
        foreach ($vclass as $index => &$vclas) {
            $vclas->status_text = VirtualStatus::lang($vclas->status);
            $vclas->present_status_id = @$vclas->virtual_class_attendances()->where(["siswa_id"=>$nis])->first()->status;
            if ($vclas->present_status_id){
                $vclas->present_status_text = VirtualAttendance::lang($vclas->virtual_class_attendances()->where(["siswa_id"=>$nis])->first()->status);
            }else{
                $vclas->present_status_text = null;
            }
        }
        return response()->json(["status"=>1,"data"=>$vclass],200);
    }

    public function virtual_class(Request $req,$id)
    {
        $class = VirtualClass::findOrFail($id);
        $create = VirtualClassAttendance::create([
            "virtual_class_id"=>$id,
            "present_pin"=>rand(1000,9999),
            "sick_pin"=>rand(1000,9999),
            "permission_pin"=>rand(1000,9999),
            "status"=>VirtualAttendance::MASUK,
            "siswa_id"=>$req->nis_siswa,
        ]);
        if ($create){
            return response()->json(["status" => 1,"link"=>$class->link]);
        }
        return response()->json(["status" => 0]);
    }

    public function virtual_class_present(Request $req)
    {
        $pin = $req->pin;
        $id = $req->id;

        $assign = VirtualClassAttendance::where(["virtual_class_id"=>$id]);
        if ($req->status == 1){
            $assign = $assign->where(["present_pin"=>$pin]);
        }elseif($req->status == 2){
            $assign = $assign->where(["permission_pin"=>$pin]);
        }elseif($req->status == 3){
            $assign = $assign->where(["sick_pin"=>$pin]);
        }
        if ($assign->update(["status"=>$req->status])){
            return response()->json(["status"=>1,"data"=>$req->all()]);
        }
        return response()->json(["status"=>0,"data"=>$req->all()]);


    }

}
