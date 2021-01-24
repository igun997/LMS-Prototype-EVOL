<?php

namespace App\Http\Controllers\Wali;

use App\Casts\ModuleHelper;
use App\Models\Revisi\Jawaban;
use App\Models\Revisi\Kela;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KenaikanKelas extends Controller
{
    public function __construct()
    {
        $this->base = "guru.wali.kenaikan";
        $this->middleware("guru");
    }

    public function index()
    {
        $data_siswa = Kela::where("guru_id",session()->get("id"))->first()->siswas;
        $nis = [];
        foreach ($data_siswa as $index => $item) {
            $nis[] = $item->nis;
        }
        $title = "Kenaikan Kelas";

        foreach ($data_siswa as $index_x => $item_x) {
            $list = [];
            $jawaban = Jawaban::where("nis",$item_x->nis);
            foreach ($jawaban->get() as $index => $item) {
                $list[] = ModuleHelper::getNilai($item->ujian_id,$item->nis);
            }
        }

        return $this->loadView("index",compact("title","data_siswa","jawaban","list"));
    }
}
