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
        $data = Admin::where(["username"=>$id])->first();
        if (session()->get("level") == "guru"){
            $data = Guru::find($id);
        }

        return $this->loadView("index",compact("title","data"));
    }

    public function update(Request $req)
    {
        $id = session()->get("id");
        if (session()->get("level") == "guru"){
            $data = Guru::find($id);
            $update = [];
            if ($req->password != ""){
                $update["password"] = $req->password;
            }
            $update = array_merge($req->all(),$update);
            $data->update($update);
        }else{
            $data = Admin::where(["username"=>$id]);
            if ($req->password != ""){
                $data->update(["password"=>$req->password]);
            }
        }

        return $this->successBack(false);

    }
}
