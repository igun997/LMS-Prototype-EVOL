<?php

namespace App\Casts;

use App\Models\Jawaban;
use App\Models\Revisi\Rombel;
use App\Models\Revisi\Ujian;
use Illuminate\Support\Str;

class ModuleHelper
{
    public static function jitsi_link()
    {
        return "https://meet.jit.si/".Str::random(10);
    }

    public static function activeStudy()
    {
        $rombel = Rombel::where(["status"=>1]);
        if ($rombel->count() > 0){
            return $rombel->first()->id;
        }
        return false;
    }

    public static function getNilai($id,$_nis)
    {
        $data = [];
        $data["data"] = [];
        $d = Jawaban::where(["ujian_id"=>$id]);
        $nis = [];
        $counter = [];
        foreach ($d->get() as $key => $value) {
            $nis[] = $value->nis;
            $counter[] = ["nis"=>$value->nis,"id"=>$value->id];
        }
        $nis = array_unique($nis);
        $compact = [];
        foreach ($nis as $key => $value) {
            $t = [];
            foreach ($counter as $k => $v) {
                if ($value == $v["nis"]) {
                    $t[] = $v["id"];
                }
            }
            $compact[$value] = $t;
        }
        $ids = [];
        foreach ($compact as $key => $value) {
            $ids[] = $value[(count($value)-1)];
        }
        $ned = Jawaban::whereIn("id",$ids);
        foreach ($ned->get() as $key => $value) {
            $ujianTotal = $value->ujian->ujian_items->count();
            $jawabanItem = $value->jawaban_items;
            $essay = [];
            foreach ($jawabanItem as $k => $v) {
                if ($v->ujian_item->banksoal->jenis == "es") {
                    $essay[] = $v->id;
                }
            }
            $btn = "<button class='btn btn-primary resetessay m-1' data-id='$value->id'>Reset Essay</button>";
            $btn = $btn."<button class='btn btn-primary resetjawaban m-1' data-id='$value->id'>Reset Jawaban</button>";
            $nilai = null;
            if (count($essay) == 0) {
                $btn = "<button class='btn btn-primary' disabled>Koreksi</button>";
                $tpg = 0;
                $totalPG = 0;
                foreach ($jawabanItem as $ke => $nilai_ex) {
                    if ($nilai_ex->ujian_item->banksoal->jenis == "pg") {
                        $totalPG++;
                        if (strtoupper($nilai_ex->jawaban) == strtoupper($nilai_ex->ujian_item->banksoal->jawaban_pg)) {
                            $tpg++;
                        }
                    }
                }
                if ($totalPG > 0 & $tpg > 0) {
                    $nilai = number_format(($tpg*10)/($totalPG/10));
                }else {
                    $nilai = number_format(($tpg*10)/($totalPG/10));
                }
            }else {
                if ($value->essay != null) {
                    $tpg = 0;
                    $totalPG = 0;
                    foreach ($jawabanItem as $ke => $nilai_ex) {
                        if ($nilai_ex->ujian_item->banksoal->jenis == "pg") {
                            $totalPG++;
                            if (strtoupper($nilai_ex->jawaban) == strtoupper($nilai_ex->ujian_item->banksoal->jawaban_pg)) {
                                $tpg++;
                            }
                        }
                    }
                    $nilai = number_format((((int)$value->essay) + (($tpg*10)/($totalPG/10)))/2);
                }else {
                    $tpg = 0;
                    $totalPG = 0;
                    foreach ($jawabanItem as $ke => $nilai_ex) {
                        if ($nilai_ex->ujian_item->banksoal->jenis == "pg") {
                            $totalPG++;
                            if (strtoupper($nilai_ex->jawaban) == strtoupper($nilai_ex->ujian_item->banksoal->jawaban_pg)) {
                                $tpg++;
                            }
                        }
                    }
                    $nilai = number_format(($tpg*10)/($totalPG/10));
                }
            }
            $ujian = Ujian::find($value->ujian->id);
            $data["data"][] = ["ujian"=>$ujian,"matpel"=>$value->ujian->matpel->nama,"nis"=>$value->nis,"nama"=>$value->siswa->nama,"kelas"=>$value->siswa->kela->kela->nama."-".$value->siswa->kela->nama,"nilai"=>$nilai,"tgl"=>date("d-m-Y",strtotime($value->dibuat))];
        }
        $myNilai = null;
        foreach ($data["data"] as $index => $datum) {
            if ($datum["nis"] == $_nis){
                $myNilai = $datum;
                break;
            }
        }
        return $myNilai;
    }
}
