<?php

namespace App\Casts;

use App\Models\Revisi\Rombel;
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
}
