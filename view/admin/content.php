<?php
/**
 * Created by PhpStorm.
 * User: geniusk
 * Date: 2017. 12. 18.
 * Time: AM 5:44
 */
session_start();
if (isset($_SESSION['id'])) {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=sonsa;charset=utf8', 'root', 'root');
    $sth = $connection->prepare("SELECT * FROM `board` WHERE `idx`=?");
    $sth->execute(array($_GET['idx']));
    $result = $sth->fetch();
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
    if(is_array($result)) {
        echo $result['name'].'님의 상담글입니다.<br/>';
        echo 'Email : '.$result['email'].'<br/>';
        echo 'Phone : '.$result['phone'].'<br/>';
        echo '내용 : '.$result['content'].'<br/>';
    }else {
        echo "잘못된 접근입니다.";
    }
    ?>
    </body>
    </html>
    <?php
} else {
    echo "<script>alert('관리자가 아닙니다'); location.href='/'</script>";
}
?>

