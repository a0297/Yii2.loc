<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 10.05.2016
 * Time: 22:33
 */
?>
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\MainAsset;
use common\widgets\Alert;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <meta name = "format-detection" content = "telephone=no" />
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
        <link rel="stylesheet" href="css/bootstrap.css" >
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/camera.css">

        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.2.1.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/jquery.mobilemenu.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.ui.totop.js"></script>
        <script src="js/jquery.touchSwipe.min.js"></script>
        <script src="js/jquery.equalheights.js"></script>


        <script src='js/camera.js'></script>
        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="js/jquery.mobile.customized.min.js"></script>
        <!--<![endif]-->

        <script>
            $(window).load( function(){

                jQuery('.camera_wrap').camera();

            });
        </script>


        <!--[if lt IE 9]>
        <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>
        <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
        <script src="assets/assets/js/html5shiv.js"></script>
        <script src="assets/assets/js/respond.min.js"></script>
        <![endif]-->
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>
    <!--==============================header=================================-->
    <header id="header">
        <div class="container">
            <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img alt="Grill point" src="/img/logo.png"></a></h1>
        </div>
        <div class="menuheader">
            <div class="container">
                <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                    <ul class="nav sf-menu">
                        <li class="active"><a href="index.html">home</a>
                            <ul>
                                <li><img src="img/arrowup.png" alt=""><a href="#">info</a></li>
                                <li><a href="#">profile</a></li>
                                <li><a class="last" href="#">news</a>
                                    <ul>
                                        <li><a href="#">fresh</a></li>
                                        <li><a class="last" href="#">archive</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="index-1.html">about me</a></li>
                        <li><a href="index-2.html">gallery</a></li>
                        <li><a href="index-3.html">links</a></li>
                        <li><a href="index-4.html">location</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <?= $content ?>




    <!--==============================footer=================================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                    <ul class="social_icons clearfix">
                        <li><a href="#"><img src="/img/follow_icon1.png" alt=""></a></li>
                        <li><a href="#"><img src="/img/follow_icon2.png" alt=""></a></li>
                        <li><a href="#"><img src="/img/follow_icon3.png" alt=""></a></li>
                        <li><a href="#"><img src="/img/follow_icon4.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 footerlogo footercol">
                    <a class="smalllogo2 logo" href="index.html"><img src="/img/logofooter.png" alt=""></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                    <p class="footerpriv">&copy; 2013 &bull; <a class="privacylink" href="index-5.html">Privacy policy</a>More <a rel="nofollow" href="http://www.templatemonster.com/category.php?category=0&type=1" target="_blank"> at TemplateMonster.com</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>