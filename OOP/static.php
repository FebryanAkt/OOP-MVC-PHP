<?php
    class Staticc {
        // property
        public static $angka = 1;
        // method
        public static function halo (){
            return "Halo " . self::$angka++ . " kali";
        }
    }
    echo Staticc::$angka;
    echo "<br>";
    echo Staticc::halo();
    echo "<hr>";
    echo Staticc::halo();
?>