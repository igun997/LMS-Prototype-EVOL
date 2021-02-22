<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Guru;
use Illuminate\Http\Request;

class ProfileControl extends Controller
{
    public function __construct()
    {
        $this->base = "profile";
    }

    public function index()
    {
        $title = "Profile Saya";
        $id = session()->get("id");
        $data = Admin::find($id);
        if (session()->get("level") == "guru"){
            $data = Guru::find($id);
        }

        return $this->loadView("index",compact("title","data"));
    }
}
