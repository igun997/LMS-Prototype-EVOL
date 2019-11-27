<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Admin,Banksoal,Guru,Jawaban,JawabanItem,Kela,Matpel,Rombel,Siswa,Ujian,UjianItem};
class GuruControl extends Controller
{
    public function index()
    {
      return view("guru.home")->with(["title"=>"Beranda Guru"]);
    }
    public function upload(Request $request)
    {
        $request->validate([
          "upload"=>"mimes:jpg,png,gif,jpeg"
        ]);
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('upload'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = url('upload/'.$fileName);
            $msg = 'Gambar Berhasil di Upload';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }

    }
    public function banksoal()
    {
      $matpel = Matpel::where(["nip"=>session()->get("id")])->get();
      return view("guru.banksoal")->with(["title"=>"Bank Soal","matpel"=>$matpel]);
    }
    public function api_banksoalread()
    {
      $data = [];
      $data["data"] = [];
      $matpel = Matpel::where(["nip"=>session()->get("id")])->get();
      $m = [];
      foreach ($matpel as $key => $value) {
        $m[] = $value->id;
      }
      $d = Banksoal::whereIn("matpel_id",$m)->get();
      foreach ($d as $key => $value) {
        $jawaban = null;
        if ($value->jenis == "pg") {
          $jawaban = $value->jawaban_pg;
        }else {
          $jawaban = $value->jawaban_es;
        }
        $data["data"][] =[($key+1),$value->matpel->nama,$value->judul,$value->jenis,$jawaban,$value->poin,date("d-m-Y",strtotime($value->dibuat)),$value->id];
      }
      return response()->json($data);
    }
    public function api_banksoaladd(Request $req)
    {
      $req->validate([
        "matpel_id"=>"required",
        "judul"=>"required",
        "soal"=>"required",
        "jenis"=>"required",
      ]);
      $d = $req->all();

      if (((int)$d["poin"]) == 0) {
        $d["poin"] = null;
      }
      $ins = Banksoal::create($d);
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_banksoaledit(Request $req,$id)
    {
      $req->validate([
        "matpel_id"=>"required",
        "judul"=>"required",
        "soal"=>"required",
        "jenis"=>"required",
      ]);
      $d = $req->all();

      if (((int)$d["poin"]) == 0) {
        $d["poin"] = null;
      }
      $ins = Banksoal::where(["id"=>$id])->update($d);
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_banksoalview($id)
    {
      $cek = Banksoal::where(["id"=>$id]);
      if ($cek->count() > 0) {
        $d = $cek->first();
        return response()->json(["status"=>1,"data"=>$d]);
      }else {
        return response()->json(["status"=>0]);
      }
    }

    public function ujian()
    {
      $matpel = Matpel::where(["nip"=>session()->get("id")])->get();
      return view("guru.ujian")->with(["title"=>"Data Ujian","matpel"=>$matpel]);
    }
    public function api_ujianread()
    {
      $matpel = Matpel::where(["nip"=>session()->get("id")])->get();
      $d = [];
      foreach ($matpel as $key => $value) {
        $d[] = $value->id;
      }
      $getUjian = Ujian::whereIn("matpel_id",$d)->get();
      $data = [];
      $data["data"] = [];
      foreach ($getUjian as $key => $value) {
        $tutup = "-";
        if ($value->tgl_ditutup != null) {
          $tutup = date("d-m-Y H:i:m",strtotime($value->tgl_ditutup));
        }
        $data["data"][] = [($key+1),$value->nama_ujian,$value->matpel->nama,date("d-m-Y H:i:m",strtotime($value->tgl_dibuka)),$tutup,$value->waktu,$value->pin,$value->ujian_items->count(),date("d-m-Y",strtotime($value->dibuat)),$value->id];
      }
      return response()->json($data);
    }
    public function ujian_add()
    {
      $matpel = Matpel::where(["nip"=>session()->get("id")])->get();
      return view("guru.ujian_add")->with(["title"=>"Tambah Data Ujian","matpel"=>$matpel]);
    }

}
