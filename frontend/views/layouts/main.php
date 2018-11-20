<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sierra</title>

    <!-- Icon css link -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* .ribbon {
            display: inline-block;
        } */

        .ribbon:after,
        .ribbon:before {
            margin-top: 0.5em;
            content: "";
            float: left;
            border: 1.5em solid rgb(105, 238, 176);
        }

        .ribbon:after {
            border-right-color: transparent;
        }

        .ribbon:before {
            border-left-color: transparent;
        }

        .ribbon .nav-item a:link,
        .ribbon .nav-item a:visited {
            color: #000;
            text-decoration: none;
            float: left;
            height: 3.5em;
            overflow: hidden;
        }

        .ribbon span {
            background: rgb(105, 238, 176);
            display: inline-block;
            line-height: 3em;
            padding: 0 1em;
            margin-top: 0.5em;
            position: relative;
            -webkit-transition: background-color 0.2s, margin-top 0.2s;
            /* Saf3.2+, Chrome */
            -moz-transition: background-color 0.2s, margin-top 0.2s;
            /* FF4+ */
            -ms-transition: background-color 0.2s, margin-top 0.2s;
            /* IE10 */
            -o-transition: background-color 0.2s, margin-top 0.2s;
            /* Opera 10.5+ */
            transition: background-color 0.2s, margin-top 0.2s;
        }

        .ribbon .nav-item a:hover span {
            background: #FFD204;
            margin-top: 0;
        }

        .ribbon span:before {
            content: "";
            position: absolute;
            top: 3em;
            left: 0;
            border-right: 0.5em solid #9B8651;
            border-bottom: 0.5em solid rgb(105, 238, 176);
        }

        .ribbon span:after {
            content: "";
            position: absolute;
            top: 3em;
            right: 0;
            border-left: 0.5em solid #9B8651;
            border-bottom: 0.5em solid rgb(105, 238, 176);
        }
    </style>


    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- import Vue before Element -->
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <!-- 引入组件库 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <!-- import JavaScript -->
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>

    <script src="js/webgl/jquery-3.2.1.js"></script>


    <!-- 引入样式 -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <!-- setup our canvas element -->
    <canvas id="canvas" style="position: fixed; width: 100%; height: 100%; z-index: -1">Canvas is not supported in your browser.</canvas>
    <script src="js/index.js"></script>
    <!--================Header Menu Area =================-->
    <header class="main_menu_area">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                            <sapn>Home</sapn>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about-us.html"><span>About Us</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="service.html"><span>Services</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="portfolio.html"><span>Portfolio</span></a></li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                            <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!--================End Header Menu Area =================-->

    <div class="container">
        <?= $content ?>
    </div>


    <!--================Footer Area =================-->
    <footer class="footr_area">
        <div class="footer_widget_area">
            <div class="container">
                <div class="row footer_widget_inner">
                    <div class="col-lg-4 col-sm-6">
                        <aside class="f_widget f_about_widget">
                            <img src="img/footer-logo.png" alt="">
                            <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p>
                        </aside>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <aside class="f_widget f_insta_widget">
                            <div class="f_title">
                                <h3>Instagram</h3>
                            </div>
                            <ul>
                                <li>
                                    <a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/instagram/ins-7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/instagram/ins-8.jpg" alt=""></a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <aside class="f_widget f_subs_widget">
                            <div class="f_title">
                                <h3>Subscribe to newsletter</h3>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your e-mail address here" aria-label="Your e-mail address here">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                </span>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <div class="container">
                <div style="text-align: center">
                    <h5>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
<!--                        All rights reserved | This template is made with-->
                        All rights reserved
                        <a href="http://www.miitbeian.gov.cn/" target="_blank"><i style="display: inline-block;width: 14px;height: 16px;margin-right: 6px;background: url(image/icon-police.png?v=md5) 0 0 no-repeat;vertical-align: middle;margin-top: -4px;"></i>闽ICP备18026158号</a>

                    </h5>
                </div>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <!-- Extra plugin css -->
    <script src="vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    <script src="vendors/counterup/apear.js"></script>
    <script src="vendors/counterup/countto.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/smoothscroll.js"></script>

    <script src="js/theme.js"></script>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
