<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 연습</title>
</head>
<body>
    <?php 
        date_default_timezone_set("Asia/Seoul"); // 한국시간으로 설정
        
    // cookie (사용자에게 저장)
        // setcookie(쿠키이름, 담을데이터, 유지시간, 방문하는 경로)
        setcookie("myCookie", "홍길동", time() + 300, '/');
        echo "쿠키 설정 완료";

    // session (서버에 저장)
        
    ?>
</body>
</html>