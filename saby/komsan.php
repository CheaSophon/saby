<?php
include '../Admin/connection/conect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komsam</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Poppins:ital,wght@0,200;0,500;1,200&display=swap" rel="stylesheet">
</head>


<body>
    <!-- Header  -->
    <section class="header-container">
        <div class="logo">
            <!-- <img src="https://news.sabay.com.kh/img/logo.png" alt=""> -->
        </div>
        <div class="ads">
            <!-- <img src="https://ads.sabay.com/openx/www/delivery/avw.php?zoneid=7&cb=55548272923&n=55548272923&" alt=""> -->
        </div>
    </section>
    <!-- Header-menu -->
    <section class="menu-container">
        <div class="menu">
            <ul>
                <li>
                    <a href="index.php" style="background: brown;"><i class="fa-solid fa-house-chimney"></i></a>
                </li>
                <?php
                $select = "SELECT * FROM `tbl_menu`";
                $res = $con->query($select);
                while ($row = $res->fetch_assoc()) {
                ?>
                    <li>
                        <a href="komsan.php"><?php echo $row['menuKH'] ?></a>
                    </li>
                <?php
                }

                ?>

            </ul>
        </div>
    </section>
    <!-- Komsan Content -->
    <section class="content2">
        <div class="cut-box">
            <div class="box" style="width: 10%;">
                <h1 style=" transform: translateX(-5px);">កម្សាន្ត<i class="fa-solid fa-chevron-right"></i></h1>
            </div>
        </div>
        <div class="ads-box">
            <div class="ads1">
                <?php
                $selec = "SELECT * FROM `tbl_contenthomepage` WHERE menuID='KS'";
                $resrul = $con->query($selec);
                while ($row = $resrul->fetch_assoc()) {
                ?>
                    <div class="box-top">
                        <img src="../Admin//Upload//HomepageNews/<?php echo $row['photo'] ?>" alt="">
                    </div>
                    <div class="box-btn">
                        <h3><?php echo $row['Subtitle'] ?></h3>
                    </div>
                <?php
                }
                ?>
                <!-- <div class="box-top">
                    <img src="https://cdn.sabay.com/cdn/media.sabay.com/media/Pav-Sreypich/Folder-1/100/6576c7f8e6b46_1702283220_medium.jpg" alt="">
                </div>
                <div class="box-btn">
                    <h3>ភាពផ្អែមល្ហែម គាំទ្រគ្នាទៅមក យកចិត្តទុក្ខដាក់រវាងគ្នានិងគ្នា Taylor និង Travis ពិតជា ជាគូស្នេហ៍ ដែលអ្នកគាំទ្រចង់ឱ្យមានថ្ងៃពិសេសសម្រាប់អ្នកទាំងពីរ។</h3>
                </div> -->
            </div>
            <div class="content-item">
                <?php
                $se = "SELECT * FROM `tbl_categorynew` WHERE menuID='KS' limit 4";
                $rs = $con->query($se);
                while ($rownew = $rs->fetch_assoc()) {
                ?>
                    <div class="item1">
                        <div class="pic">
                            <img src="../Admin/Upload/<?php echo $rownew['image'] ?>" alt="">
                        </div>
                        <div class="title1">
                            <p><?php echo $rownew['Subtitle'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>

                <?php
                $se = "SELECT * FROM `tbl_categorynew` WHERE menuID='KS' limit 4";
                $rs = $con->query($se);
                while ($rownew = $rs->fetch_assoc()) {
                ?>
                    <div class="item2" style="margin-left: 0px;">
                        <div class="pic">
                            <img src="../Admin/Upload/<?php echo $rownew['image'] ?>" alt="">
                        </div>
                        <div class="title1">
                            <p><?php echo $rownew['Subtitle'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>

    </section>