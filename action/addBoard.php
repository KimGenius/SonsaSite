<?php
/**
 * Created by PhpStorm.
 * User: geniusk
 * Date: 2017. 12. 18.
 * Time: AM 4:47
 */
$connection = new PDO('mysql:host=127.0.0.1;dbname=sonsa;charset=utf8', 'root', 'root');
$sth = $connection->prepare("INSERT INTO `board`(`name`,`email`,`phone`,`content`) VALUES(?,?,?,?)");
if ($sth->execute(array($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['content']))) {
    echo "<script>
            alert('상담이 등록되었습니다');
            location.href='/'
        </script>";
} else {
    echo "<script>
            alert('상담 등록에 실패하였습니다 관리자에게 문의해주세요');
            location.href='/'
          </script>";
}