<?php
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2018/7/8
 * Time: 14:36
 */
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="baidu_union_verify" content="5f2ffc3b5549889ea0b1eb61d3cb939b">

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
</head>

<body>

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