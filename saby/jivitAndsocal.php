<?php
include '../Admin/connection/conect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>កម្សាន្ត</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Angkor&family=Battambang&family=Bayon&family=Bebas+Neue&family=Dongle:wght@400;700&family=Fasthand&family=Freehand&family=Hanuman:wght@700&family=Indie+Flower&family=Khmer&family=Koulen&family=Metal&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Roboto:ital,wght@1,700&family=Russo+One&family=Staatliches&family=Taprom&family=Ubuntu:ital,wght@0,300;0,700;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header  -->
    <section class="header-container-full">
        <div class="header-container">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="header-ads">
                <img src="img/header-ads.gif" alt="">
            </div>
        </div>
    </section>
    <!-- Header-menu -->
    <section class="Menu-full-container">
        <div class="menu-container">
            <ul>
                <li>
                    <a href=""><i style="opacity: 1;" class="fa fa-home" aria-hidden="true"></i></a>
                </li>
                <?php
                $selectMenu = "Select*from tbl_menu WHERE status ='Active' ORDER BY Inorder ASC";
                $res = $con->query($selectMenu);
                while ($menu = $res->fetch_assoc()) {
                ?>
                    <li>
                        <a href="<?php echo $menu['link'] ?>"><?php echo $menu['MenuKH'] ?></i></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </section>

    <!-- Komsan Content -->
    <div class="Komsan-container">
        <div class="Komsan">
            <div class="main-content">
                <div class="box1">
                    <div class="picture">
                        <img src="/img/2.jpg" alt="">
                    </div>
                    <div class="des">
                        <p>ក្រៅពី អ៊ុក សុវណ្ណារី នៅ​មានអ្នកចម្រៀងមួយរូបទៀត មាន​ទឹកដមសំឡេងផ្អែមពីរោះស្រដៀង រស់ សេរីសុទ្ធា</p>
                    </div>
                </div>
                <div class="box1">
                    <div class="picture">
                        <img src="/img/2.jpg" alt="">
                    </div>
                    <div class="des">
                        <p>ក្រៅពី អ៊ុក សុវណ្ណារី នៅ​មានអ្នកចម្រៀងមួយរូបទៀត មាន​ទឹកដមសំឡេងផ្អែមពីរោះស្រដៀង រស់ សេរីសុទ្ធា</p>
                    </div>
                </div>
            </div>
            <div class="sub-content-row">
                <?php
                $selectNews = "SELECT * FROM `tbl_categorynews` where MenuID='JS' ORDER by postdate DESC";
                $res = $con->query($selectNews);
                while ($data = $res->fetch_assoc()) {
                ?>
                    <div class="row-content">
                        <div class="picture">
                            <img src="../Admin/Upload/<?php echo $data['photo']?>" alt="">
                        </div>
                        <div class="des">
                            <p><?php echo $data['Description']?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="sub-Ads">

        </div>
    </div>

    <section class="footer-container-full">
        <div class="container-footer">
            <div class="footer1">
                <img src="https://news.sabay.com.kh/img/footer-logo.png" alt="">
                <br>
                <h4>​© រក្សា​សិទ្ធិ​គ្រប់​យ៉ាង​ដោយ​ Sabay ឆ្នាំ​២០១៦</h4>
                <h5>គោលការណ៍​ភាព​ឯកជន | Privacy Policy</h5>
                <p>អាសយដ្ឋាន <br>
                    អគារ​លេខ ៣០៨ មហាវិថីព្រះមុន្នីវង្ស <br>
                    សង្កាត់បឹងរាំង ខណ្ឌដូនពេញ</p>
            </div>
            <div class="footer2">
                <h3>អំពីយើង</h3>
                <p>Sabay Digital Corporation ជា​ក្រុមហ៊ុន​ព័ត៌មាន​ឌីជីថល និង​កម្សាន្ត​ឈាន​មុខ​គេ​នៅ​កម្ពុជា។ ព័ត៌មាន​បន្ថែម</p>
                <small>
                    ផលិត​ផល​ និង​ សេវាកម្ម របស់ Sabay
                </small><br>
                <img src="img/logo.png" alt="">
                <img src="img/logo.png" alt="">
                <img src="img/logo.png" alt="">
                <img src="img/logo.png" alt="">
                <img src="img/logo.png" alt="">
                <img src="img/logo.png" alt=""> <img src="img/logo.png" alt="">
                <img src="img/logo.png" alt="">
                <img src="img/logo.png" alt="">
            </div>
            <div class="footer3">

            </div>
        </div>
    </section>
</body>

</html>