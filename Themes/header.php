<!doctype html>
    <html lang="th">
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- title -->
        <title><?php echo $navtitle ;?></title>
        <!-- link stylesheet -->
        <link rel="stylesheet" href="Themes/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="Themes/css/bootstrap.min.css">
        <link rel="stylesheet" href="Themes/css/theme.css">
    </head>
<body class="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">UCLASS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> หน้าหลัก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mainweb.php"><i class="fas fa-graduation-cap"></i> เลือกอาคารเรียน</a>
                </li>
                <?php @session_start(); if ($_SESSION['Username'] != "") {  ?>
                <li class="nav-item">
                    <a class="nav-link" href="history.php"><i class="fas fa-history"></i> ประวัติการจองห้องเรียน</a>
                </li>
                <?php } ?>
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
                <?php @session_start(); if ($_SESSION['Username'] == "") {  ?>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</a>
                </li>
                <?php } else { ?>
                <li class="nav-item active">
                    <a class="nav-link"><i class="far fa-user"></i> <?php echo $_SESSION['Username']; ?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
