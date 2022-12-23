<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 연습</title>

    <style>
        h2 {color: blue;}
    </style>
</head>
<body>
<!-- 2022-08-08 -->
<h2>2022-08-08</h2>
<hr>
    <?php
        echo "<h1> Hello World </h1>";

        $a = 20; // 숫자형 변수 선언
        $b = 20.324; // 실수형 변수 선언
        $c = "성일정보고등학교"; 
        $d = [1,'dd',3,4]; 

        // 변수명 작성 시 카멜 표기법 사용 ex) $appelMango
        // 언더바(_) 제외 특수문자 표기 불가
    ?>

    <hr>

    <!-- 특정 변수의 값 출력 -->
    <?="<h1> Hello World </h1>" ?>
    <?php var_dump($d) /* 배열 */ ?>

    <hr>

    <?php
    // 문자를 이어주기
        $a = 20;
        echo $a . "<br> Hello World!";
    ?>

    <hr>

    <!-- 변수의 유효 범위 -->
    <?php
        // $a = 20; => 전역변수가 아님 (전역변수 선언 X)
        $a = 20;

        function testFunction() { // PHP는 함수를 먼저 읽음 (함수우선주의)
            global $a; // 전역변수로 사용 가능

            $b = 30;
            echo $a + $b;
        }

        testFunction();
    ?>

    <hr>

<!-- 2022-08-09 -->
<h2>2022-08-09</h2>
<hr>
    <?php
        $a = 20;

        if ($a >= 20) {
            $b = 30;
        }

        echo $b;
    ?>

    <hr>

    <?php 
        $a = 20;

        echo isset($a); // 변수가 존재하는지 확인
    ?>

    <hr>

    <?php 
        $a = 100;
        $b = 200;

        echo $a . "<br>" . $b;

        unset($a); // 변수 선언 취소
        echo $a . "<br>" . $b;
    ?>

    <hr>

    <?php 
    // global 변수 지우기
        function destroy_foo() {
            global $foo;
            // unset($foo); => global 변수는 unset 불가
            unset($GLOBALS['foo']); // global 변수 삭제
        }
        $foo = 'bar';
        destroy_foo();

        echo $foo;
    ?>

    <hr>

    <!-- 상수 -->
    <?php 
    // 상수 선언
        define("HOME", "/src");

        echo HOME; // $를 사용하지 않음 (출력 : /src)
    ?>

    <hr>

    <?php 
    // 내장 상수
        echo __LINE__ . "<br>"; // 코드 상의 현재 라인 번호 (출력 : 124)
        echo __FILE__ . "<br>"; // 현재 파일의 경로 (출력 : C:\xampp\htdocs\index.php)
        echo __DIR__ . "<br>"; // 현재 폴더 (출력 : C:\xampp\htdocs)

        function test() {
            echo __FUNCTION__; // 함수의 이름 (출력 : test)
        }
        test();
    ?>

    <hr>

    <!-- 문자열 표현 -->
    <?php 
        $name = "홍길동";
        echo "안녕하세요. 제 이름은 {$name}입니다. <br>"; // 변수 사용 시 큰 따옴표
        echo '안녕하세요. 제 이름은 $name 입니다. <br>'; // 작은 따옴표는 변수의 내용 출력 불가
    ?>

    <hr>

    <!-- 글자의 길이를 반환하는 내장 함수 -->
    <?php 
        $str = ' abc def '; 
        // 공백 포함
        echo strlen($str) . "<br>"; // 문자열의 길이 반환 (출력 : 9)

        $str2 = '하이';
        echo strlen($str2) . "<br>"; // 한글은 글자당 3Byte (출력 : 6)
        echo mb_strlen($str2); // mb_를 붙일 경우 utf-8로 인식 (출력 : 2)
    ?>

    <hr>

    <?php 
    // 중복 된 문자에서 찾기
        $str = 'abcdefabcdef';
        // strpos() : 0부터 시작
        echo strpos($str, "e") . "<br>"; // (변수, 찾을 문자) (출력 : 4)
        echo strpos($str, "e", 5) . "<br>"; // 5번째부터 "e"를 찾아 출력 (출력 : 10)
        echo strpos($str, "ef") . "<br>"; // (출력 : 4)

        $str2 = '성일정보고';
        echo mb_strpos($str2, "정"); // 한글 사용 시 mb_를 붙여 utf-8로 변환
    ?>

    <hr>

    <!-- 문자열 배치 -->
    <?php 
        $str ="<a href='#'>네이버</a>";
        $replaced = str_replace("네이버", "구글", $str); // (변수에서 찾을 문자열, 바꿀 문자, 변수)

        echo $str . "<br>";
        echo $replaced;
    ?>

    <hr>

    <?php 
        $list = ["a", "e", "i", "o", "u"];
        $replaced = str_replace($list, "", "Hello World"); // 'Hello World'에 존재하는 $list에 담긴 글자를 없앰 (e,o)
        echo $replaced;
    ?>

    <hr>

    <?php 
        $str = "건강을 위해서라면 매일 야채와 과일, 물을 먹어야 한다.";
        $target = ["야채", "과일", "물"]; // 찾을 글자
        $list = ["과자", "초콜렛", "치킨"]; // 바꿀 글자
        $replaced = str_replace($target, $list, $str);
        echo $replaced; // (출력 : 건강을 위해서라면 매일 과자와 초콜렛, 치킨을 먹어야 한다.)
    ?>

    <hr>

    <!-- 문자열 편집 -->
    <?php 
        $str = "abcdefg";
        echo substr($str, 0, 3) . "<br>"; // (변수, 시작, 자를 문자의 개수) (출력 : abc)
        echo substr($str, 4, 2) . "<br>"; // (출력 : ef)
        echo substr($str, -1, 1) . "<br>"; // -1을 할 경우 문자의 뒤로 인식 (출력 : g)
        echo substr($str, -2, 2) . "<br>"; // (출력 : fg)
        echo substr($str, -3) . "<br>"; // (출력 : efg)
        echo substr($str, 3) . "<br>"; // (출력 : defg)
    ?>

    <hr>

    <!-- 문자열 자르기 -->
    <?php 
        $text = "\t\tThese are a foew words :) ...";
        echo var_dump(trim($text, "\t.")); // trim(변수, 자를 문자) (출력 : "These are a foew words :) ")
    ?>
</body>
</html>