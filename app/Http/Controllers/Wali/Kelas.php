<?php

namespace App\Http\Controllers\Wali;

use App\Casts\ModuleHelper;
use App\Models\Revisi\Jawaban;
use App\Models\Revisi\Kela;
use App\Models\Revisi\Siswa;
use Illuminate\Http\Request;
use Excel;
use PDF;
use App\Http\Controllers\Controller;

class Kelas extends Controller
{
    public function __construct()
    {
        $this->base = "guru.wali.kelas";
    }

    public function index()
    {
        $title = "Data Siswa";
        $siswa = Kela::where(["guru_id"=>session()->get("id")])->get();
        return $this->loadView("index",compact("title","siswa"));
    }

    public function detail($id)
    {
        $title = "Detail Siswa";
        $siswa = Siswa::find($id);
        $jawaban = Jawaban::where(["nis"=>$id])->get();
        $list = [];
        foreach ($jawaban as $index => $item) {
            $list[] = ModuleHelper::getNilai($item->ujian_id,$id);
        }
        return $this->loadView("detail",compact("title","siswa","list"));
    }

    public function download($id)
    {
        $siswa = Siswa::find($id);
        $jawaban = Jawaban::where(["nis"=>$id])->get();
        $list = [];
        foreach ($jawaban as $index => $item) {
            $list[] = ModuleHelper::getNilai($item->ujian_id,$id);
        }
        $pdf = PDF::loadView('guru.wali.kelas.download', compact("siswa","jawaban","list"));
        return $pdf->stream('RAPORT_SISWA.pdf');

    }
}
