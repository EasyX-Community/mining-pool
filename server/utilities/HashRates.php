<?php
namespace Utilities;

class HashRates {

    public static function Itoa($i)
    {
        $s = '';
        if($i >= 1024*1024*1024)
            $s = round(floatval($i)/1024/1024/1024, 1) ."G";
        else if($i >= 1024*1024)
            $s = round(floatval($i)/1024/1024, 1) ."M";
        else if($i >= 1024)
            $s = round(floatval($i)/1024, 1) ."K";
        else
            $s = round(floatval($i), 1);

        return $s;
    }

    public static function convertIntegerToString($i, $precision = 1)
    {
        $s = '';
        if($i >= 1000*1000*1000*1000*1000)
            $s = round(floatval($i)/1000/1000/1000/1000/1000, $precision) ." P";
        else if($i >= 1000*1000*1000*1000)
            $s = round(floatval($i)/1000/1000/1000/1000, $precision) ." T";
        else if($i >= 1000*1000*1000)
            $s = round(floatval($i)/1000/1000/1000, $precision) ." G";
        else if($i >= 1000*1000)
            $s = round(floatval($i)/1000/1000, $precision) ." M";
        else if($i >= 1000)
            $s = round(floatval($i)/1000, $precision) ." k";
        else
            $s = round(floatval($i), $precision);

        return $s;
    }


}


?>