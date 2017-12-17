<?php
/**
 * Created by PhpStorm.
 * User: geniusk
 * Date: 2017. 12. 18.
 * Time: AM 5:18
 */
$id = $_POST['id'];
$pw = $_POST['pw'];
$connection = new PDO('mysql:host=127.0.0.1;dbname=sonsa;charset=utf8', 'root', 'root');
$sth = $connection->prepare("SELECT * FROM `user` WHERE `id` = ? AND `pw` = ?");
$sth->execute(array($id, $pw));
$result = $sth->fetch();
if (is_array($result)) {
    session_start();
    $_SESSION['id'] = $result['id'];
    echo "<script>
            alert('환영합니다 관리자님');
            location.href='/view/admin.php'
        </script>";
} else {
    echo "<script>
            alert('아이디 또는 비밀번호를 확인해주세요');
            location.href='/view/login.php'
          </script>";
}