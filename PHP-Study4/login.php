<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <?php
        if(isset($_SESSION['user'])) {
    ?>

    <h2><?=$_SESSION['user']['name'] ?>님 로그인 중</h2>

    <?php 
        }
    ?>

    <form action="login_ok.php" method="post">
        <label for="id">아이디</label>
        <input type="text" placeholder="아이디를 입력하세요" id="id" name="id"><br>
        <label for="password">비밀번호</label>
        <input type="password" placeholder="비밀번호를 입력하세요" id="password" name="password"><br>

        <input type="submit" value="로그인">
    </form>
</body>
</html>