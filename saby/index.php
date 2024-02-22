<?php
include '../Admin/connection/conect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saby New</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Poppins:ital,wght@0,200;0,500;1,200&display=swap" rel="stylesheet">
</head>

<body>
    <section class="header-container">
        <div class="logo">
            <!-- <img src="https://news.sabay.com.kh/img/logo.png" alt=""> -->
        </div>
        <div class="ads">
            <!-- <img src="https://ads.sabay.com/openx/www/delivery/avw.php?zoneid=7&cb=55548272923&n=55548272923&" alt=""> -->
        </div>
    </section>
    <section class="menu-container">
        <div class="menu">
            <ul>
                <li>
                    <a href="" style="background: brown;"><i class="fa-solid fa-house-chimney"></i></a>
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
    <section class="Homepage">
        <div class="centent">
            <?php
            $sql = "SELECT * FROM `tbl_contenthomepage`  WHERE status='Active'LIMIT 2 ";
            $resurl = $con->query($sql);
            while ($rowdata = $resurl->fetch_assoc()) {
            ?>
                <div class="left-box bg-img" style="background-image: url(../Admin//Upload/HomepageNews/<?php echo $rowdata['photo'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    <div class="box-title">
                        កម្សាន្ត
                    </div>
                    <h4><?php echo $rowdata['title'] ?>
                        <span><?php echo $rowdata['Subtitle'] ?></span>
                    </h4>
                </div>
            <?php
            }

            ?>
           
            <div class="rigt-box bg-img" style="background-image: url('https://cdn.sabay.com/cdn/media.sabay.com/media/Sothearith(1)/fold16/656d541703cf0_1701663720_medium.jpg');background-position: center; background-repeat: no-repeat; background-size: cover;">
                <div class="box-title">
                    កម្សាន្ត
                </div>
                <h4>អ្នកឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី ៖ ជំនាញឌីជីថល ពិតជាសំខាន់
                    <span>អ្នកឧកញ៉ា វេជ្ជបណ្ឌិត គួច ម៉េងលី បានមានប្រសាសន៍ថា ជំនាញឌីជីថល ពិតជាសំខាន់</span>
                </h4>
            </div>
        </div>
        <div class="ads">
            <div class="ads1">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Q48Yc9vboX4?si=BT9NdNoAfwxaPGDF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="ads1">
                <img src="https://ads.sabay.com/images/b805a2bcd89f17285017a408d283d387.jpeg" alt="" style="width: 100%; height: 100%; object-fit: contain;">
            </div>
        </div>
    </section>
    <section class="Video-conatiner">
        <div class="cut-box">
            <div class="box">
                <h3>Information <i class="fa-solid fa-chevron-right"></i></h3>
            </div>
        </div>
        <div class="content-des">
            <?php
            $selectdeital = "SELECT * FROM `tbl_detailnews`";
            $resde = $con->query($selectdeital);
            while ($rowde = $resde->fetch_assoc()) {
            ?>
                <div class="picture-box">
                    <div class="pic">
                        <img src="../Admin//Upload/DetailNewPicture/7.jpg" alt="">
                    </div>
                    <div class="title">
                        <span><?php echo $rowde['des1'] . $rowde['des2'] . $rowde['des3'] ?></span>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="about-des">
            <div class="left-box">
                <?php
                $selectnew = "SELECT * FROM `tbl_categorynew` limit 8";
                $rs = $con->query($selectnew);
                while ($rownew = $rs->fetch_assoc()) {
                ?>
                    <div class="top-box" style="margin-left: 3px;">
                        <div class="box1-image">
                            <img src="../Admin//Upload/<?php echo $rownew['image'] ?>" alt="">
                        </div>
                        <div class="box1-title">
                            <p><?php echo $rownew['Subtitle'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
            <div class="right-box">
                <div class="image">
                    <img src="https://ads.sabay.com/images/96fe0b5de7d116b8ddb41297144aad26.png" alt="">
                </div>
            </div>
        </div>
    </section>
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
                    <div class="item2" style="margin-left: 3px;">
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
    <section class="content2">
        <div class="cut-box">
            <div class="box" style="width: 10%;">
                <h1 style=" transform: translateX(-5px);">Socail<i class="fa-solid fa-chevron-right"></i></h1>
            </div>
        </div>
        <div class="ads-box">
            <?php
            $selec = "SELECT * FROM `tbl_contenthomepage` WHERE id=16";
            $resrul = $con->query($selec);
            while ($row = $resrul->fetch_assoc()) {
            ?>
                <div class="ads1">
                    <div class="box-top">
                        <img src="../Admin//Upload/HomepageNews/<?php echo $row['photo'] ?>" alt="">
                    </div>
                    <div class="box-btn">
                        <h3><?php echo $row['title'] ?></h3>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="content-item">
                <?php
                $se = "SELECT * FROM `tbl_categorynew` WHERE remark='Active' LIMIT 4";
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
                $se = "SELECT * FROM `tbl_categorynew` WHERE id=64 or id=65 or id=66 or id=67";
                $rs = $con->query($se);
                while ($rownew = $rs->fetch_assoc()) {
                ?>
                    <div class="item2" style="margin-left: 3px;">
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

            </div>
    </section>
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
                        <h3>ភាពផ្អែមល្ហែម គាំទ្រគ្នាទៅមក យកចិត្តទុក្ខដាក់រវាងគ្នានិ
                            ងគ្នា Taylor និង Travis ពិតជា ជាគូស្នេហ៍ ដែលអ្នកគាំទ្រចង់ឱ្យមានថ្ងៃពិសេសសម្រាប់អ្នកទាំងពីរ។</h3>
                    </div>
            </div>
        <?php
                }
        ?>

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
                        <p>អ្វីដែលរឹតតែពិសេសទៅទៀតនោះ Velea ក៏មាន Workshop ឥតគិតថ្លៃផ្សេងៗ ដូចជា</p>
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
                <div class="item1" style="margin-left: 3px;">
                    <div class="pic">
                        <img src="../Admin/Upload/<?php echo $rownew['image'] ?>" alt="">
                    </div>
                    <div class="title1">
                        <p>អ្វីដែលរឹតតែពិសេសទៅទៀតនោះ Velea ក៏មាន Workshop ឥតគិតថ្លៃផ្សេងៗ ដូចជា</p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <section class="content2">
        <div class="cut-box">
            <div class="box" style="width: 10%;">
                <h1 style=" transform: translateX(-5px);">Toyota<i class="fa-solid fa-chevron-right"></i></h1>
            </div>
        </div>
        <div class="ads-box">
            <div class="ads1">
                <?php
                $selec = "SELECT * FROM `tbl_contenthomepage` WHERE Inorder=9";
                $resrul = $con->query($selec);
                while ($row = $resrul->fetch_assoc()) {
                ?>
                    <div class="box-top">
                        <img src="../Admin//Upload/HomepageNews/<?php echo $row['photo'] ?>" alt="">
                    </div>
                    <div class="box-btn">
                        <h3>ភាពផ្អែមល្ហែម គាំទ្រគ្នាទៅមក យកចិត្តទុក្ខដាក់រវាងគ្នានិងគ្នា Taylor និង Travis ពិតជា ជាគូស្នេហ៍ ដែលអ្នកគាំទ្រចង់ឱ្យមានថ្ងៃពិសេសសម្រាប់អ្នកទាំងពីរ។</h3>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="content-item">
                <?php
                $se = "SELECT * FROM `tbl_categorynew` WHERE id=64 or id=65 or id=66 or id=67";
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
                $se = "SELECT * FROM `tbl_categorynew` WHERE remark='Active' LIMIT 4";
                $rs = $con->query($se);
                while ($rownew = $rs->fetch_assoc()) {
                ?>
                    <div class="item2" style="margin-left: 3px;">
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
            
            </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> Developer</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> Shop App</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> Love web</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> forwer webdesinge</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> lucation</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> phnompenh</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> dunpenh</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> Thakyou for Buy</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Shop New</h4>
                    <ul>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> phone number</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> Watch</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> Muos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-arrow-right"></i> Iphone</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follower</h4>
                    <ul>
                        <li>
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>