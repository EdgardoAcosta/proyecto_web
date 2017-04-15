<?php
/**
 * User: edgardoacosta
 * Date: 14/04/17
 */

echo '<!DOCTYPE html>
<html lang="en">

<head>
    <!-- tab image-->
    <link rel="icon" href="https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/698183/1161/773/m1/fpnw/wm0/pet-shop-.png?1444150631&s=5abfd42752dfc67a6903b054b5680d87">

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pet Shop</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    
    <!--SweetAlert2--
    <script src="sweetalert2/sweetalert2.min.js"></script>-->
     <!--jquery3-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body class="fixed-sn green-skin">
   
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">

            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="#"><img src="http://mdbootstrap.com/wp-content/uploads/2015/12/mdb-white2.png" class="img-fluid flex-center"></a>
                </div>
            </li>
            <!--/. Logo -->

            <!--Social-->
            <li>
                <ul class="social">
                    <li><a href="https://www.facebook.com/mdbootstrap" target="_blank" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                    <li><a class="icons-sm git-ic"><i class="fa fa-github"> </i></a></li>
                    <li><a href="https://www.linkedin.com/in/dawid-adach-97435534/pl" target="_blank" class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a></li>
                    <li><a class="icons-sm yt-ic"><i class="fa fa-youtube"> </i></a></li>
                    <li><a href="https://plus.google.com/u/0/+Mdbootstrap" target="_blank" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                </ul>
            </li>
            <!--/Social-->

            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-heart"></i> New Arrivals<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Handbags</a>
                                </li>
                                <li><a href="#" class="waves-effect">Shoes</a>
                                </li>
                                <li><a href="#" class="waves-effect">Dresses</a>
                                </li>
                                <li><a href="#" class="waves-effect">Skirts</a>
                                </li>
                                <li><a href="#" class="waves-effect">Jeans</a>
                                </li>
                                <li><a href="#" class="waves-effect">Outerwear</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-diamond"></i> Accessories<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Jewelry</a>
                                </li>
                                <li><a href="#" class="waves-effect">Wallets & Purses</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-gitlab"></i> For kids<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Girls</a>
                                </li>
                                <li><a href="#" class="waves-effect">Boys</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-sun-o"></i> Summer<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Swimsuits</a>
                                </li>
                                <li><a href="#" class="waves-effect">Sandals</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-briefcase"></i> Fall / Winter<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Coats</a>
                                </li>
                                <li><a href="#" class="waves-effect">Boots</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-coffee "></i> Spring<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Denim jackets</a>
                                </li>
                                <li><a href="#" class="waves-effect">Sneakers</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->

        </ul>
        <!--/. Sidebar navigation -->

        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

            <!-- SideNav slide-out button -->
            <div class="pull-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <p>MDB E-commerce Home Page</p>
            </div>


            <ul class="nav navbar-nav pull-right">

                <li class="nav-item ">
                    <a class="nav-link"> <span class="label red z-depth-1">2</span> <i class="fa fa-shopping-cart"></i> <span class="hidden-sm-down">Cart</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-sign-in"></i> <span class="hidden-sm-down">Register</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span></a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="#">Logout</a>
                        <a class="dropdown-item" href="#">My account</a>
                    </div>
                </li>
            </ul>

        </nav>
        <!--/.Navbar-->
    </header>
    <!--/Double navigation-->
';