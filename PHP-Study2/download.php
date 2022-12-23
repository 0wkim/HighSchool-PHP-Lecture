<?php
    $filename = $_GET['name'];
    $path = 'upload/' . $filename;

    if(!file_exists($path)) {
        echo "해당 파일은 존재하지 않습니다.";
        exit;
    }

    $filesize = filesize($path);

// 파일 다운로드가 정상적으로 진행되게 하는 부분 
    header("Pragma: public"); 
    header("Content-Type: application/octet-stream"); 
    header("Content-Disposition: attachment; filename=$filename"); 
    header("Content-Transfer-Encoding: binary"); 
    header("Content-Length: $filesize"); 

    ob_clean();
    flush();
    readfile($path);

    // http://localhost/download.php?name=놀라는 피카츄.jpg