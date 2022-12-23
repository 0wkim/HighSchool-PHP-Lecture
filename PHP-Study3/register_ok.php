<?php 
    // $id = $_POST['id'];
    // $name = $_POST['name'];
    // $password = $_POST['password'];

    $host = "localhost";
    $dbname = "myblog";
    $charset = "utf8mb4";
    $user = "root";
    $pass = "";
    $option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
    $db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass, $option);

// 데이터 삽입하기
    $sql = "INSERT INTO users VALUES(?, ?, ?, ?)";

    // $q = $db->prepare($sql);
    // $q->execute([$id, $name, $password, 1]);

// 데이터 삭제하기
    $del_sql = "DELETE FROM users WHERE id=?";
    $q = $db->exec($del_sql);
    $q->execute([$id]);

// 리스트로 데이터 삽입하기
    $dataList = [
        ["test01", "홍길동01", "1234", 1],
        ["test02", "홍길동02", "1234", 1],
        ["test03", "홍길동03", "1234", 1],
        ["test04", "홍길동04", "1234", 1],
        ["test05", "홍길동05", "1234", 1]
    ];

    // foreach($dataList as $data) {
    //     $q = $db->prepare($sql);
    //     $q->execute($data);
    // }

