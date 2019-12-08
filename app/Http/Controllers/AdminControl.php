<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Admin,Banksoal,Guru,Jawaban,JawabanItem,Kela,Matpel,Rombel,Siswa,Ujian,UjianItem};
class AdminControl extends Controller
{
    public function index()
    {
      return view("admin.home")->with(["title"=>"Administrator"]);
    }

    public function api_homeread()
    {
      $data = [];
      $data["data"] = [];
      $all = Ujian::orderBy("dibuat","desc")->get();
      foreach ($all as $key => $value) {
        $nama = $value->matpel->nama;
        if (isset($value->matpel->kela->kela->id)) {
          $nama = $nama." (".$value->matpel->kela->kela->nama."_".$value->matpel->kela->nama.")";
        }else {
          $nama = $nama." (".$value->matpel->kela->nama.")";
        }
        $data["data"][] = [($key+1),$nama ,$value->matpel->guru->nama,date("d-m-Y H:i:s",strtotime($value->dibuat))];
      }
      return response()->json($data);
    }
    public function nilai()
    {
      return view("admin.nilai")->with(["title"=>"Data Nilai"]);
    }
    public function api_nilairead($id = null)
    {

    }
    public function rombel()
    {
      return view("admin.rombel")->with(["title"=>"Data Rombongan Belajar"]);
    }
    public function api_rombelread()
    {
      $data = [];
      $data["data"] = [];
      $d = Rombel::get();
      foreach ($d as $key => $value) {
        $data["data"][] =[($key+1),$value->nama,$value->kelas->count(),$value->id];
      }
      return response()->json($data);
    }
    public function api_rombeledit(Request $req,$id)
    {
      $req->validate([
        "nama"=>"required"
      ]);
      $ins = Rombel::where(["id"=>$id])->update($req->all());
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_rombeladd(Request $req)
    {
      $req->validate([
        "nama"=>"required|unique:rombel,nama"
      ]);
      $ins = Rombel::create($req->all());
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }

    public function kelas()
    {
      $kelas = Kela::where("kelas_id","=",null)->get();
      $rombel = Rombel::get();
      return view("admin.kelas")->with(["title"=>"Data Kelas","kelas"=>$kelas,"rombel"=>$rombel]);
    }
    public function api_kelasread()
    {
      $data = [];
      $data["data"] = [];
      $d = Kela::get();
      foreach ($d as $key => $value) {
        $data["data"][] =[($key+1),((isset($value->kela->nama))?$value->kela->nama." - ":"").$value->nama,$value->rombel->nama,$value->siswas->count(),$value->id];
      }
      return response()->json($data);
    }
    public function api_kelashow($id)
    {
      $d = Kela::where(["id"=>$id]);
      if ($d->count() > 0) {
        $ds = $d->first();
        return response()->json(["status"=>1,"data"=>$ds]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_kelasedit(Request $req,$id)
    {
      $req->validate([
        "nama"=>"required",
        "rombel_id"=>"required",
      ]);
      $ins = Kela::where(["id"=>$id])->update($req->all());
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_kelasadd(Request $req)
    {
      $req->validate([
        "nama"=>"required",
        "rombel_id"=>"required",
      ]);
      $ins = Kela::create($req->all());
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }

    public function siswa()
    {
      $kelas = Kela::where("kelas_id","!=",null)->get();
      $rombel = Rombel::get();
      return view("admin.siswa")->with(["title"=>"Data Kelas","kelas"=>$kelas]);
    }
    public function api_siswaread()
    {
      $data = [];
      $data["data"] = [];
      $d = Siswa::get();
      foreach ($d as $key => $value) {
        $data["data"][] =[($key+1),$value->nis,$value->nama,$value->alamat,$value->no_hp,(($value->jk == 0)?"Laki-Laki":"Perempuan"),(($value->foto != null)?url("upload/".$value->foto):null),$value->email,$value->kela->kela->nama." - ".$value->kela->nama,date("d-m-Y",strtotime($value->dibuat)),$value->nis];
      }
      return response()->json($data);
    }
    public function api_siswahow($id)
    {
      $d = Siswa::where(["nis"=>$id]);
      if ($d->count() > 0) {
        $ds = $d->first();
        return response()->json(["status"=>1,"data"=>$ds]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_siswaedit(Request $req,$id)
    {
      $req->validate([
        "nama"=>"required",
        "kelas_id"=>"required",
        "jk"=>"required",
        "foto"=>"mimes:jpeg,png,jpg,gif,svg|max:2048"
      ]);
      $d = $req->all();
      if ($req->has("foto")) {
        $imageName = time().'.'.$req->foto->getClientOriginalExtension();
        $sa = $req->foto->move(public_path('upload'), $imageName);
        $old = Siswa::where(["nis"=>$id])->first();
        @unlink(public_path('upload')."/".$old->foto);
        $d["foto"] = $imageName;
      }else {
        unset($d["foto"]);
      }
      if ($req->has("password")) {
        if ($d["password"] == "") {
          unset($d["password"]);
        }
      }
      $ins = Siswa::where(["nis"=>$id])->update($d);
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_siswaadd(Request $req)
    {
      $req->validate([
        "nis"=>"required",
        "nama"=>"required",
        "password"=>"required",
        "kelas_id"=>"required",
        "jk"=>"required",
        "foto"=>"mimes:jpeg,png,jpg,gif,svg|max:2048"
      ]);
      $d = $req->all();
      if ($req->has("foto")) {
        $imageName = time().'.'.$req->foto->getClientOriginalExtension();
        $sa = $req->foto->move(public_path('upload'), $imageName);
        if ($sa) {
          $d["foto"] = $imageName;
          $ins = Siswa::create($d);
          if ($ins) {
            return response()->json(["status"=>1]);
          }else {
            return response()->json(["status"=>0]);
          }
        }else {
          return response()->json(["status"=>0]);
        }
      }else {
        $d["foto"] = null;
        $ins = Siswa::create($d);
        if ($ins) {
          return response()->json(["status"=>1]);
        }else {
          return response()->json(["status"=>0]);
        }
      }
    }

    public function guru()
    {
      return view("admin.guru")->with(["title"=>"Data Guru"]);
    }
    public function api_gururead()
    {
      $data = [];
      $data["data"] = [];
      $d = Guru::get();
      foreach ($d as $key => $value) {
        $data["data"][] =[($key+1),$value->nip,$value->nama,$value->alamat,$value->no_hp,$value->email,$value->matpels->count() ." Matpel",$value->nip];
      }
      return response()->json($data);
    }
    public function api_gurushow($id)
    {
      $d = Guru::where(["nip"=>$id]);
      if ($d->count() > 0) {
        $ds = $d->first();
        return response()->json(["status"=>1,"data"=>$ds]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_guruedit(Request $req,$id)
    {
      $req->validate([
        "nama"=>"required",
        "no_hp"=>"required",
      ]);
      $d = $req->all();
      if ($d["password"] == "") {
        unset($d["password"]);
      }
      $ins = Guru::where(["nip"=>$id])->update($d);
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_guruadd(Request $req)
    {
      $req->validate([
        "nama"=>"required",
        "no_hp"=>"required",
        "password"=>"required",
        "nip"=>"required|unique:guru,nip",
      ]);
      $ins = Guru::create($req->all());
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }

    public function matpel()
    {
      $kelas = Kela::get();
      $guru = Guru::get();
      return view("admin.matpel")->with(["title"=>"Data Mata Pelajaran","kelas"=>$kelas,"guru"=>$guru]);
    }
    public function api_matpelread()
    {
      $data = [];
      $data["data"] = [];
      $d = Matpel::get();
      foreach ($d as $key => $value) {
        $nkelas = null;
        if (isset($value->kela->kela->nama)) {
          $nkelas = $value->kela->kela->nama."_".$value->kela->nama;
        }else {
          $nkelas = $value->kela->nama;
        }
        $data["data"][] =[($key+1),$value->nama,$nkelas,((isset($value->guru->nama))?$value->guru->nama:null),$value->id];
      }
      return response()->json($data);
    }
    public function api_matpelshow($id)
    {
      $d = Matpel::where(["id"=>$id]);
      if ($d->count() > 0) {
        $ds = $d->first();
        return response()->json(["status"=>1,"data"=>$ds]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_matpeledit(Request $req,$id)
    {
      $req->validate([
        "nama"=>"required",
        "kelas_id"=>"required",
      ]);
      $d = $req->all();
      $ins = Matpel::where(["id"=>$id])->update($d);
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
    public function api_matpeladd(Request $req)
    {
      $req->validate([
        "nama"=>"required",
        "kelas_id"=>"required",
      ]);
      $ins = Matpel::create($req->all());
      if ($ins) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0]);
      }
    }
}
