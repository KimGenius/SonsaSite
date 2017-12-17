<?php
/**
 * Created by PhpStorm.
 * User: geniusk
 * Date: 2017. 12. 18.
 * Time: AM 5:28
 */
session_start();
if (isset($_SESSION['id'])) {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=sonsa;charset=utf8', 'root', 'root');
    $sth = $connection->prepare("SELECT * FROM `board`");
    $sth->execute();
    $result = $sth->fetchAll();
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>청률손해사정 - 관리자</title>
    </head>
    <body>
    <?php
    foreach ($result as $item) {
        echo '<a href="/view/admin/content.php?idx='.$item['idx'].'">'.$item['name'].'님의 상담글</a>';
    }
    ?>
    </body>
    </html>
    <?php
} else {
    echo "<script>alert('관리자가 아닙니다'); location.href='/'</script>";
}
?>

