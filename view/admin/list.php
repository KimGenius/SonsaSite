<?php
/**
 * Created by PhpStorm.
 * User: geniusk
 * Date: 2017. 12. 18.
 * Time: PM 11:12
 */
session_start();
if (isset($_SESSION['id'])) {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=sonsa;charset=utf8', 'root', 'root');
    $sth = $connection->prepare("SELECT * FROM `board` ORDER BY `idx` DESC");
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
        <title>청률손해사정 - 관리자 리스트</title>

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
        <link href="/stylesheets/placeholder-color.css" rel="stylesheet">
        <link href="/stylesheets/list.css" rel="stylesheet">
    </head>
    <body>

    <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg text-uppercase" id="mainNav">
        <div class="container">
            <a href="/">
                <img src="/images/list/logo.png" class="navbar-brand js-scroll-trigger" href="#page-top"/>
            </a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded collapsed"
                    type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/#page-top">회사소개</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/#about-us">사업 영역</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/#contact">상담 예약</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                           href="/action/logout.php">로그아웃</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="text-white">
        <img src="/images/about.png" alt="about.png" class="header-img">
        <div class="container">
            <p>관리자 페이지</p>
            <p>관리자를 위한 전용 기능을 제공합니다.</p>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="left">
                <div class="left-top">
                    <p>관리자 페이지</p>
                    <p>Admin Page</p>
                </div>
                <div class="left-list1">
                    <p>상담신청 내역</p>
                </div>
            </div>
            <div class="right">
                <h4>상담신청 내역</h4>
                <p>고객들의 상담신청 내역을 열람하실 수 있습니다.</p>
                <hr>
                <table>
                    <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>작성일</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($result as $item) {
                        ?>
                        <tr>
                            <td><?php echo $item['idx'] ?></td>
                            <td><a href="./content.php?idx=<?php echo $item['idx']; ?>">
                                    <?php echo substr($item['content'], 0, 10) ?>
                                </a>
                            </td>
                            <td><?php echo $item['name'] ?></td>
                            <td><?php echo $item['create_date'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    </body>
    </html>
    <?php
} else {
    echo "<script>alert('관리자가 아닙니다'); location.href='/'</script>";
}
?>