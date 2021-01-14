<?php

namespace App\Casts;


class UjianType
{
    const  UAS = 0;
    const  UTS = 1;
    const  HARIAN = 2;


    public static function lang($level)
    {
        if ($level == self::UAS){
            return "UAS";
        }elseif ($level == self::UTS){
            return "UTS";
        }elseif ($level == self::HARIAN){
            return "Harian";
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
