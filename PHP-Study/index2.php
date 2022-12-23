<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 연습</title>
    <style>
        h2 {color: green;}
    </style>
</head>
<body>
<!-- 2022-08-09 -->
<h2>2022-08-09</h2>
<hr>
    <!-- 배열 추가, 자르기, 삭제 -->
    <?php
    // 배열 추가
        $department = ['소프트웨어', '전자제어', '정보통신', '바이오'];
        $department[] = "새로운 학과"; // 배열 추가
        echo "$department[4]" . "<br>";
        array_push($department, "새로운 학과2"); // 배열 추가
        echo "$department[5]" . "<br>";

    // 배열 자르기
        $newArr = array_splice($department, 1, 2); // (자를 변수, 자를 인덱스 값, 자를 개수)e\
        echo "<pre>";
        echo var_dump($department) . "<br>";
        echo var_dump($newArr);
        echo "</pre>";

        $human = ['name' => '홍길동', 'age' => 20, 'male' => true, 'job' => '도적'];
        echo "{$human['name']}" . "<br>";
    ?>

    <hr>

    <!-- for문 -->
    <?php
        $department = ['소프트웨어', '전자제어', '정보통신', '바이오'];

        for($i = 0; $i < count($department); $i++) {
            echo "{$i}번 원소 : {$department[$i]} <br>";
        }
    ?>

    <hr>

    <!-- while문 -->
    <?php
        $department = ['소프트웨어', '전자제어', '정보통신', '바이오'];

        $i = 0;

        while(count($department) > 0) {
            $item = array_pop($department); // $department의 값을 하나씩 꺼냄
            echo "'{$item}'을(를) 꺼냈습니다. <br>";
        }
    ?>

    <hr>

    <!-- foreach문 -->
    <?php 
        $human = [
            'name' => '홍길동', 
            'age' => 20, 
            'job' => '도적'
        ];

        foreach($human as $key => $info) { // $department의 값 하나하나를 $info라고 함
            echo "{$key} : {$info} <br>";
        }
    ?>

    <hr>

    <!-- break문 -->
    <?php 
        $data = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

        $sum = 0;

        for($i = 0; $i < count($data); $i++) {
            if($data[$i] % 2 == 0) { // 짝수일 경우
                $sum += $data[$i];
                // continue
            }
            if ($sum >= 20) {
                break;
            }
        }

        echo $sum;
    ?>

    <hr>

    <!-- 배열 -->
    <?php 
    // 배열인지 아닌지 확인 (is_array)
        $data = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
        echo is_array($data) . "<br>"; // (출력 : 1)
        
    // 배열안에 값이 있는지 확인 (in_array)
        $needle = 4;

        if(in_array($needle, $data)) {
            echo "4는 배열 안에 있습니다.";
        }

    // 배열 합치기 (array_combine)
        $keys = ['name', 'age', 'job'];
        $values = ['홍길동', 20, '도적'];

        $arr = array_combine($keys, $values); // (변수1, 변수2)
        echo "<pre>";
        echo var_dump($arr);
        echo "</pre>";

    // 배열 쪼개기 (array_chunk)
        function dump($value) {
            echo "<div class= 'dump' style='display:inline-block; width=50%;'>";
            echo "<pre>";
            var_dump($value);
            echo "</pre>";
            echo "</div>";
        }
        
        echo "<div style='width:400px;'>";
        $numArr = [1,2,3,4,5,6,7];
        $result = array_chunk($numArr, 3, true); // 3개씩 쪼개기, true 사용 시 인덱스 값이 원본의 인덱스 값과 동일

        dump($result);
        echo "</div>";
    ?>

    <hr>

    <!-- 날짜와 시간 -->
    <?php 
        echo date('Y-M-d') . "<br>"; // M, D 사용시 영어 출력 (출력 : 2022-08-09) 
        echo date('Y/m/d H:i:s') . "<br>"; // (출력 : 2022/08/09 04:28:26)
        echo date('Y/m/d H:i:s', mktime(2,30,15,5+1,1+15,2019)) . "<br>"; // (출력 : 2019/06/016 02:30:15) 

        echo "<hr>";

    // timzone으로 시간 기준 변경
        date_default_timezone_set("Asia/Seoul"); // 코드의 최상단에 미리 지정해둘 것
        echo date('Y/m/d H:i:s');
    ?>

    <!-- 과제 -->
    <!-- 
        [PHP] 자판기

        - A 페이지
        1. 음료수 리스트 보임
        2. 돈을 입력(input) 후 버튼 클릭

        - B 페이지
        1. 입력한 돈으로 살 수 있는 음료수 리스트(+금액) 보임
        2. 음료수 구매 버튼 클릭

        - C 페이지
        1. "OO 음료수 나왔습니다."
        2. "거스름돈은 OOO 입니다."
    -->
</body>
</html>
</html>