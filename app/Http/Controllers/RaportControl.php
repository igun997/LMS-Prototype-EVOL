<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaportControl extends Controller
{
    public function __construct()
    {
        $this->base = "guru.raport";
    }

    public function index()
    {
        $title = "Permintaan Pengisian Nilai Raport";
        return $this->loadView("index",compact("title"));
    }
}
