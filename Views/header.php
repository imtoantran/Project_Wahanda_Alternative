<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>WA Home page</title>
        <meta name="description" content="" />
        <meta name="author" content="TrongLoi" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="" />
        <link rel="apple-touch-icon" href="../img/ico/Cat-Brown-icon-72px.png" />

        <!-- Chèn link CSS -->
        <style type="text/css">
            @font-face {
                font-family: 'OpenSans';
                src: url("https://www.google.com/fonts#UsePlace:use/Collection:Open+Sans+Condensed:300,300italic,700");
                /*src: url("<?php echo ASSETS ?>fonts/OpenSans/OpenSans.woff");*/
               /* src: url("<?php echo ASSETS ?>fonts/OpenSans/OpenSans-Regular-webfont.eot?#iefix") format('embedded-opentype'),
                     url("<?php echo ASSETS ?>fonts/OpenSans/OpenSans-Regular-webfont.woff") format('woff'),
                     url("<?php echo ASSETS ?>fonts/OpenSans/OpenSans-Regular-webfont.ttf") format('truetype'),
                     url("<?php echo ASSETS ?>fonts/OpenSans/OpenSans-Regular-webfont.svg#open_sansregular") format('svg');
                font-weight: normal;
                font-style: normal;*/
            }
            * {
                font-family: "OpenSans";
            }
        </style>

        <link rel="stylesheet" href="<?php echo ASSETS ?>plugins/bootstrap/css/bootstrap.min.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo ASSETS ?>plugins/font-awesome/css/font-awesome.min.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo ASSETS ?>css/home-page/home-page.css" type="text/css"  />


        <?php
            if(isset($this->style)){
                foreach ($this->style as $style) {
                    echo '<link rel="stylesheet" type="text/css" href="'. $style .'" />';
                }
            }
        ?>
    </head>

    <body id="home-page" class="container">
        <header id="header" class="container">
            <div id="top-header">
                <div id="top-header-left" class="col-md-3">
                    <button class="btn btn-sm create-location-btn" type="button"><i class="fa fa-plus"></i> Tạo địa điểm</button>
                </div>
                <div id="top-header-center" class="col-md-6">
                    <div class="logo">
                        <h1 class="logo-text text-center">COMPANY NAME</h1>
                        <img class="logo-image" src=""/>
                    </div>
                </div>
                <div id="top-header-right" class="col-md-3">
                    <div class="clearfix">
                        <button class="form-control btn col-md-6 login-btn" type="button">Đăng nhập</button>
                        <button class="form-control btn col-md-6 login-face-btn" type="button">Login Face</button>
                    </div>
                    <input type="text" class="form-control search-global" placeHolder="Gõ nội dung cần tìm">
                </div>
            </div><!-- END TOP HEADER -->
            <nav id="navigation" class="navbar" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="#">Brand</a> -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">FACE</a></li>
                            <li><a href="#">BODY</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">TÓC <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">MÓNG</a></li>
                            <li><a href="#">MASSAGE</a></li>
                            <li><a href="#">FITNESS</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="cart-shop"><a href="#">Giỏ hàng</a></li>
                            <li class="languages"><a href="#">VI</a></a></li>
                            <li class="languages"><a href="#">EN</a></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav><!-- END NAVIGATION -->

        </header>