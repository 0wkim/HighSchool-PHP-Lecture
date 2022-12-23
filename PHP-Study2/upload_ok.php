<?php 
    $tmpName = $_FILES["upload"]["tmp_name"];
    $realName = $_FILES["upload"]["name"];

    if(!file_exists("upload")) {
        mkdir("upload"); // mkdir: 폴더를 만드는 함수
    }

    move_uploaded_file($tmpName, "upload/" . $realName); 
    // move_uploaded_file(업로드된 파일명, 이동할 위치)