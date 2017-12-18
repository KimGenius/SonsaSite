<?php
/**
 * Created by PhpStorm.
 * User: geniusk
 * Date: 2017. 12. 18.
 * Time: AM 5:08
 */
session_start();
if (!isset($_SESSION['id'])) {

    ?>
    <!doctype html>
    <html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>청률손해사정 - 로그인</title>

        <!-- Bootstrap core CSS -->
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
              type="text/css">

        <!-- Plugin CSS -->
        <link href="/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="/stylesheets/freelancer.css" rel="stylesheet">
        <link href="/stylesheets/custom.css" rel="stylesheet">
        <link href="/stylesheets/login.css" rel="stylesheet">
        <link href="/stylesheets/placeholder-color.css" rel="stylesheet">
    </head>

    <body id="page-top">
    <!-- Header -->
    <header class="masthead text-white text-center">
        <img src="/images/header.png" alt="header.png" class="header-img">
        <div class="container">
            <img class="login-logo" src="/images/logo.png" class="navbar-brand js-scroll-trigger" href="#page-top"/>
            <div class="login-box">
                <h2>관리자 로그인</h2>
                <form action="/action/login.php" method="post">
                    <input type="text" name="id" placeholder="아이디">
                    <input type="password" name="pw" placeholder="비밀번호">
                    <input type="submit" value="관리자 로그인">
                </form>
            </div>
        </div>
    </header>


    </body>
    </html>
    <?php
} else {
  echo "<script>location.href = '/view/admin/list.php';</script>";
}
?>