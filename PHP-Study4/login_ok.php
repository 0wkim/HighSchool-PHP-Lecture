<?php 
    session_start();

    $id = $_POST['id'];
    $password = $_POST['password'];

    if($id=='sungil' && $password=='1234') {
        echo "로그인 성공";
        echo "<a href='login.php'>메인페이지</a>";

        // session에 저장
        $_SESSION['user'] = ['id'=>$id, 'name'=>'홍길동'];
    } else {
        echo "로그인 실패";
    }