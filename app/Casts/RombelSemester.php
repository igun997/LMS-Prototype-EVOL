<?php

namespace App\Casts;


class RombelSemester
{
    const  GANJIL = 0;
    const  GENAP = 1;


    public static function lang($level)
    {
        if ($level == self::GANJIL){
            return "Ganjil";
        }elseif ($level == self::GENAP){
            return "Genap";
        }else{
            return  FALSE;
        }
    }

    public static function select($level)
    {
        $select = [];
        for ($i = 0; $i <= 1; $i++){
            $select[] = [
                "id"=>$i,
                "text"=>self::lang($i),
                "selected"=>($level == $i)
            ];
        }
        return $select;
    }

}
