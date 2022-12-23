<?php 
// autoload 불러오기
    require_once("autoload.php");

// namespace
    use sungil\Human;
    use sungil\Student;
    use sungil\Lib;

// new instance
    // $h1 = new Human("홍길동", ["프로그래밍", "게임"]);
    // $h2 = clone $h1; // clone : 값만 전달되는 깊은 복사
    // $h2->setName("새로운 이름");
    // dump($h1);
    // dump($h2);

// new instance
    // $h2 = new Human("이순신", ["롤", "운동"]);
    // dump($h2);

// new instance
    $s = new Student("홍길동", ["프로그래밍"], 20);
    Lib::dump($s);

    $h = new Human("사람", ["먹는거"]);
    Lib::dump($h);
