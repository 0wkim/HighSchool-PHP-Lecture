<?php 
    function myLoader($name) 
    {
        // namespace를 위한 수정
        $prefix = "sungil\\";
        $base_dir = __DIR__ . "/src/";
        $prefixLen = strlen($prefix);

        if(strncmp($prefix, $name, $prefixLen) == 0) {
            $realName = substr($name, $prefixLen);
            $realName = str_replace("\\", "/", $realName);
            $file = "{$base_dir}{$realName}.php";

            if(file_exists($file)) {
                require_once($file);
            }
        }
    }

    spl_autoload_register("myLoader"); // PHP 엔진에 함수가 등록