<?php 
    function testFunction(&$param1, $param2) { // & : 변수의 값이 아닌, 주소를 받는 것
        // $sum = $param1 + $param2 + $param3; 
        // return $sum;

        $param1 = $param1 + 20;
        $param2 = $param2 + 10;
        return $param1 + $param2;
    }

    // $result = testFunction(10, 20, 40);
    // echo $result;

    $a = 20;
    $b = 30;

    $result = testFunction($a, $b);
    echo "result : ".$result." / a : ".$a." / b : ".$b;

    // http://localhost/test.php