<?php 
// namespace 불러오기
    namespace sungil;

    class Lib 
    {
        public static function dump($value) { // dump 함수에 들어온 값에 대한 함수
            echo "<div class='dump' style='display:inline-block; width:50%;'>";
            echo "<pre>";
            var_dump($value);
            echo "</pre>";
            echo "</div>";
        }
    }