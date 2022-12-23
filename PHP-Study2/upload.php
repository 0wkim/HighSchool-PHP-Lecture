<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_ok.php" method="post" enctype="multipart/form-data"> 
    <!-- enctype : 서버로 파일 제출 시 인코딩 되는 방법  -->
    
        <input type="file" name="upload">
        <input type="submit" value="전송">
    </form>
</body>
</html>