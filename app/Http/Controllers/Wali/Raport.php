<?php

namespace App\Http\Controllers\Wali;

use App\Casts\RaportStatus;
use App\Http\Middleware\Siswa;
use App\Models\Revisi\Kela;
use App\Models\Revisi\Report;
use App\Models\Revisi\ReportLesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Raport extends Controller
{
    public function __construct()
    {
        $this->base = "guru.wali.raport";
    }

    public function index()
    {
        $title = "Data Raport Siswa";
        $ids = [];
        $kelas = Kela::where(["guru_id"=>session()->get("id")])->get();
        foreach ($kelas as $index => $kela) {
            $ids[] = $kela->id;
        }
        $report = Report::whereIn("kelas_id",$ids)->get();
        return $this->loadView("index",compact("title","report"));
    }

    public function add()
    {
        $title = "Tambah Raport";
        return $this->loadView("form",compact("title"));
    }


    public function add_action(Request $req)
    {
        $req->validate([
            "rombel_id"=>"required"
        ]);
        $kelas = Kela::where(["guru_id"=>session()->get("id")])->first();
        $payload = [
            "kelas_id"=>$kelas->id,
            "status"=>RaportStatus::DIBUAT,
            "guru_id"=>session()->get("id"),
            "rombel_id"=>$req->rombel_id,
        ];
        $create = Report::create($payload);
        if ($create){
            $lessons = [];
            foreach ($kelas->matpels as $index => $matpel) {
                $siswa = \App\Models\Revisi\Siswa::where(["kelas_id"=>$kelas->id])->get();
                foreach ($siswa as $s => $wa) {
                    $lessons[] = [
                        "matpel_id"=>$matpel->id,
                        "report_id"=>$create->id,
                        "siswa_id"=>$wa->nis
                    ];
                }
            }
            ReportLesson::insert($lessons);
            return $this->successRedirect("wali.raport.list",true);
        }
        return $this->failBack();
    }

    public function detail($id)
    {
        $report = Report::findOrFail($id);
        $title = "Detail Data Raport";
        return $this->loadView("detail",compact("title","report"));
    }

    public function update(Request $req,$id)
    {
        $req->validate([
            "status"=>"required"
        ]);
        $find = Report::find($id);
        $find->status = $req->status;
        $find->save();
        return $this->successBack(false);
    }
}
