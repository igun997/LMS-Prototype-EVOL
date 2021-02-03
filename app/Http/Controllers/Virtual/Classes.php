<?php

namespace App\Http\Controllers\Virtual;

use App\Casts\VirtualStatus;
use App\Models\Revisi\VirtualClass;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Classes extends Controller
{
    public function __construct()
    {
        $this->base = "guru.virtual";
        $this->middleware("guru");
    }

    public function index()
    {
        $title = "Kelas Virtual";
        $virtual = VirtualClass::where(["guru_id"=>session()->get("id")])->orderBy("created_at","DESC")->get();
        return $this->loadView("index",compact("title","virtual"));
    }

    public function add()
    {
        $title = "Tambah Kelas Virtual";
        return $this->loadView("form",compact("title"));
    }

    public function update($id)
    {
        $title = "Update Kelas Virtual";
        $data = VirtualClass::find($id);
        $route = route("virtual.class.update_action",$id);
        return $this->loadView("form",compact("title","data","route"));
    }
    public function detail($id)
    {
        $title = "Absensi Virtual Kelas";
        $data = VirtualClass::find($id);
        return $this->loadView("detail",compact("title","data"));
    }

    public function update_action(Request $req,$id)
    {
        $req->validate([
            "downloadable.*"=>"mimes:doc,docx,pdf,jpg,jpeg,gif"
        ]);

        $data = $req->all();

        $data["downloadable"] = (($req->has("downloadable")) ? $this->uploader($req,"downloadable"):null);
        if (is_array($data["downloadable"])){
            $data["downloadable"] = implode(",",$data["downloadable"]);
        }
        $data["guru_id"] = session()->get("id");
        $data["start_date"] = Carbon::createFromTimeString($req->start_date);
        $data["end_date"] = Carbon::createFromTimeString($req->end_date);
        $data["status"] = VirtualStatus::DIBUAT;
        $create = VirtualClass::where(["id"=>$id])->update($data);
        if ($create){
            return $this->successRedirect("virtual.class.list");
        }
        return $this->failBack();
    }

    public function add_action(Request $req)
    {
        $req->validate([
            "downloadable.*"=>"mimes:doc,docx,pdf,jpg,jpeg,gif"
        ]);

        $data = $req->all();

        $data["downloadable"] = (($req->has("downloadable")) ? $this->uploader($req,"downloadable"):null);
        if (is_array($data["downloadable"])){
            $data["downloadable"] = implode(",",$data["downloadable"]);
        }
        $data["guru_id"] = session()->get("id");
        $data["start_date"] = Carbon::createFromTimeString($req->start_date);
        $data["end_date"] = Carbon::createFromTimeString($req->end_date);
        $data["status"] = VirtualStatus::DIBUAT;
        $create = VirtualClass::create($data);
        if ($create){
            return $this->successRedirect("virtual.class.list");
        }
        return $this->failBack();
    }
}
