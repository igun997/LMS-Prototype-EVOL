<?php

namespace App\Casts;


class RaportStatus
{
    const  DIBUAT = 0;
    const  DIPROSES = 1;
    const  SELESAI = 2;


    public static function lang($level)
    {
        if ($level == self::DIBUAT){
            return "Dibuat";
        }elseif ($level == self::DIPROSES){
            return "Di Proses";
        }elseif ($level == self::SELESAI){
            return "Selesai";
        }else{
            return  FALSE;
        }
    }

    public static function select($level)
    {
        $select = [];
        for ($i = 0; $i <= 3; $i++){
            $select[] = [
                "id"=>$i,
                "text"=>self::lang($i),
                "selected"=>($level == $i)
            ];
        }
        return $select;
    }

}
