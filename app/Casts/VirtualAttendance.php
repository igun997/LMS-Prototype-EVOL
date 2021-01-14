<?php

namespace App\Casts;


class VirtualAttendance
{
    const  HADIR = 1;
    const  ALFA = 0;
    const  IJIN = 2;
    const  SICK = 3;
    const  MASUK = 4;


    public static function lang($level)
    {
        if ($level == self::HADIR){
            return "Hadir";
        }elseif ($level == self::ALFA){
            return "Tidak Hadir";
        }elseif ($level == self::IJIN){
            return "Ijin";
        }elseif ($level == self::SICK){
            return "Sakit";
        }elseif ($level == self::MASUK){
            return "Masuk Kelas";
        }else{
            return  FALSE;
        }
    }

    public static function select($level)
    {
        $select = [];
        for ($i = 0; $i <= 4; $i++){
            $select[] = [
                "id"=>$i,
                "text"=>self::lang($i),
                "selected"=>($level == $i)
            ];
        }
        return $select;
    }

}
