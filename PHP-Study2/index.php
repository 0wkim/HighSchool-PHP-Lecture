<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 파일 다루기 -->
    <?php 
    // 파일 열기
        $filename = "sample.txt";

        if(file_exists($filename)) { // file_exists : 파일이 존재하는지 확인하는 함수
            $file = fopen($filename, "r"); // fopen(파일변수, 권한설정)

            if($file) {
                $size = filesize($filename); // filesize : 파일 사이즈를 알려주는 함수
                echo "파일 크기 : {$size} <br>"; 

                $text = fread($file, $size); // fread(대상커서 변수, 읽는범위)
                echo $text;
            } else {
                echo "파일 열기에 실패했습니다.";
            }
        } else {
        echo "해당 파일이 존재하지 않습니다.";
        }
    ?>

    <hr>

    <?php 
    // 파일 쓰기 (파일 새로 만들기)
        $filename = "hello_php.txt";

        $file = fopen($filename, "w");
        if ($file) {
            fwrite($file, "Hello World. \n My name is Sungil."); // fwrite(대상커서 변수, 들어갈 내용)
            
            fclose($file); // fclose(닫을변수)

            echo "파일 생성 및 작성에 성공했습니다.";
        } else {
            echo "파일 작성에 실패했습니다.";
        }
    ?>

    <hr>

    <?php 
    // 해당 사이트의 내용 가져오기
        $sample = file_get_contents("http://www.naver.com");

        $filename = "naver.txt";
        $file = fopen($filename, "w");
        if($file) {
            fwrite($file, $sample);
            fclose($file);

            echo "파일을 성공적으로 가져왔습니다.";
        }
    ?>

    <hr>

    <?php 
    // 다른 PHP 파일 불러오기
        // 1. require - 다른 PHP 문서 load, 오류 발생 시 오류 표현 후 코드 실행 X
        // 2. include - 다른 PHP 문서 load, 오류 발생 시 오류 표현 후 코드 실행 O 

        require_once("lib.php"); // require_once : 다른 PHP 파일을 중복으로 불러오지 않는 함수

        $arr = [1,2,3,4,5,6,7];
        dump($arr);
    ?>

    <hr>

    <?php 
    // 파일 업로드 및 다운로드
        // (1) 업로드
    ?>
</body>
</html>