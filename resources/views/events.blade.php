<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staging | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/staging-assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/staging-assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/staging-assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/staging-assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/staging-assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/staging-assets/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <a href="#"><img src="/staging-assets/img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__widget">
        <span>Call us for any questions</span>
        <h4>+01 123 456 789</h4>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    {{--                    <a href="#"><img src="/staging-assets/img/logo.png" alt=""></a>--}}
                    <h4><font color="white">IUTDS</font></h4>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li><a href="{{route('home-page')}}">Home</a></li>
                        <li><a href="{{route('hall-of-fame')}}">Hall of fame</a></li>
                        <li class="active"><a href="#">Iutds Corner</a>
                            <ul class="dropdown">
                                <li class="submenu"><a href="{{route('about')}}">About Us</a></li>
                                <li class="submenu"><a href="{{route('highlights')}}">Highlights</a></li>
                                <li class="submenu"><a href="#">Events</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Our People</a>
                            <ul class="dropdown">
                                <li class="submenu"><a href="{{route('present-committee')}}">Present Committee</a></li>
                                <li class="submenu"><a href="{{route('our-alumni')}}">Our Alumni</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('blog-page')}}">Blog</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__widget">
                    <span>Call us for any questions</span>
                    <h4>+01 123 456 789</h4>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="/img/backgroundImage/hall_of_fame_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Hall of fame</h2>
                    <div class="breadcrumb__links">
                        {{--                        <a href="./index.html">Home</a>--}}
                        {{--                        <span>Projects</span>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Project Page Section Begin -->
<section class="project-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="project__item">
                    <img src="/staging-assets/img/project/project-p1.jpg" alt="">
                    <h4><a href="#">Office Building</a></h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="project__item">
                    <img src="/staging-assets/img/project/project-p2.jpg" alt="">
                    <h4><a href="#">Funiture Decorative</a></h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="project__item">
                    <img src="/staging-assets/img/project/project-p3.jpg" alt="">
                    <h4><a href="#">Interior Design</a></h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="project__item">
                    <img src="/staging-assets/img/project/project-p4.jpg" alt="">
                    <h4><a href="#">Home Building</a></h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="project__item">
                    <img src="/staging-assets/img/project/project-p5.jpg" alt="">
                    <h4><a href="#">Decoration</a></h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="project__item">
                    <img src="/staging-assets/img/project/project-p6.jpg" alt="">
                    <h4><a href="#">Funiture</a></h4>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a href="#" class="primary-btn normal-btn">Load More</a>
            </div>
        </div>
    </div>
</section>
<!-- Project Page Section End -->

<!-- Footer Section Begin -->
<footer class="footer set-bg" data-setbg="/staging-assets/img/footer-bg.jpg">
    <div class="container">
        {{--        <div class="footer__top">--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-lg-8 col-md-6">--}}
        {{--                    <div class="footer__top__text">--}}
        {{--                        <h2>Ready To Work With Us?</h2>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-4 col-md-6">--}}
        {{--                    <div class="footer__top__newslatter">--}}
        {{--                        <form action="#">--}}
        {{--                            <input type="text" placeholder="Enter your email...">--}}
        {{--                            <button type="submit"><i class="fa fa-send"></i></button>--}}
        {{--                        </form>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <h3><font color="#dcdcdc">IUTDS</font></h3>
                    </div>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/iutdebatingsociety"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/company/iut-debating-society/about/"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__address">
                    <h6>Get In Touch</h6>
                    <p>Islamic University of Technology <br />Gazipur,Dhaka,Bangladesh</p>
                    <ul>
                        <li>iutds001@gmail.com</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright__text">
                        <p>Copyright © <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved by <strong><font color="#dcdcdc">IUTDS</font></strong> | This website is made with <i class="fa fa-heart-o"
                                                                                                                                                aria-hidden="true"></i> by <strong><font color="#d3d3d3">IUTDS</font></strong> and with the help of <a href="https://colorlib.com"
                                                                                                                                                                                                                                                       target="_blank"><font color="#d3d3d3">Colorlib template<font></font></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="/staging-assets/js/jquery-3.3.1.min.js"></script>
<script src="/staging-assets/js/bootstrap.min.js"></script>
<script src="/staging-assets/js/jquery.slicknav.js"></script>
<script src="/staging-assets/js/owl.carousel.min.js"></script>
<script src="/staging-assets/js/slick.min.js"></script>
<script src="/staging-assets/js/main.js"></script>
</body>

</html>
