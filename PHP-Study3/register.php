<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 회원가입</title>
</head>
<body>
    <h2>회원가입</h2>
    <form action="register_ok.php" method="post">
        <label for="id">아이디</label>
        <input type="text" placeholder="아이디를 입력하세요" id="id" name="id"><br>
        <label for="password">비밀번호</label>
        <input type="password" placeholder="비밀번호를 입력하세요" id="password" name="password"><br>
        <label for="name">이름</label>
        <input type="name" placeholder="이름을 입력하세요" id="name" name="name"><br>
        <input type="submit" value="회원가입">
    </form>
</body>
</html>