<?php 
    $host = "localhost";
    $dbname = "myblog";
    $charset = "utf8mb4";
    $user = "root";
    $pass = "";
    $option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];

// PDO(DB정보, 계정, 패스워드) 
    $db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass, $option);
    // var_dump($db);
    
// 데이터 삽입
    // $sql = "INSERT INTO users(`id`, `name`, `password`, `level`) 
    //         VALUES('sungil02', '이순신', PASSWORD('1234'), 1)";
    // $db->exec($sql);

// 데이터 가져오기
    $sql2 = "SELECT * FROM users";
    $result = $db->query($sql2);
    $list = $result->fetchAll();

    // echo "<pre>";
    // foreach($result as $row) {
    //     var_dump($row);
    // }
    // echo "</pre>";
?>

<table>
    <tr>
        <th>아이디</th>
        <th>이름</th>
        <th>레벨</th>
    </tr>

    <?php   
        foreach($list as $item) {
    ?>

    <tr>
        <th><?=$item->id ?></th>
        <th><?=$item->name ?></th>
        <th><?=$item->level ?></th>
    </tr>

    <?php   
        }
    ?>
</table>