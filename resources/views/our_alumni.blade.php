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
        <span>Follow us</span>
        <span><font color="#a9a9a9">facebook.com/iutdebatingsociety</font></span>
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
                        <li><a href="#">Iutds Corner</a>
                            <ul class="dropdown">
                                <li class="submenu"><a href="{{route('about')}}">About Us</a></li>
                                <li class="submenu"><a href="{{route('highlights')}}">Highlights</a></li>

                            </ul>
                        </li>
                        <li class="active"><a href="#">Our People</a>
                            <ul class="dropdown">
                                <li class="submenu"><a href="{{route('present-committee')}}">Present Committee</a></li>
                                <li class="submenu"><a href="#">Our Allumni</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('blog-page')}}">Blog</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__widget">
                    <span>Follow us</span>
                    <span><font color="#a9a9a9">facebook.com/iutdebatingsociety</font></span>
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
                    <h2>Our Alumni</h2>
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
<div id="particles-js">

</div>
<!-- Team Section Begin -->
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="section-title">
                    <span>Our Alumni</span>
                    <h2>Meet our Alumni</h2>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/1_Rishad_Shafik_97_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Rishad Shafik</h5>
                            <span class="batch-font">IUT 97</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/2_Mabroor_Wassey_03_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mabroo Wassey</h5>
                            <span class="batch-font">IUT 03</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/3_Rishad_Sharif_05_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Rishad Sharif</h5>
                            <span class="batch-font">IUT 05</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/4_Arif_Mohiuddin_Khan_06_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Arif Mohiuddin Khan</h5>
                            <span class="batch-font">IUT 06</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/5_AFM_Sayem_07_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>AFM Sayem</h5>
                            <span class="batch-font">IUT 07</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/6_Faiaz_Kabir_07_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Faiyaz Kabir</h5>
                            <span class="batch-font">IUT 07</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/7_Tahsin_Mahmood_Jehad_07_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Tahsin Mahmood Jehad</h5>
                            <span class="batch-font">IUT 07</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/8_Mohammad_Shariful_Islam_Chowdhury_07_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mohammad Shariful Islam Chowdhury</h5>
                            <span class="batch-font">IUT 07</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/9_Nazmus_Sakib_08_Vice_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Nazmus Sakib</h5>
                            <span class="batch-font">IUT 08</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/10_Shihab_Ahmed_09_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Shihab Ahmed</h5>
                            <span class="batch-font">IUT 09</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/11_Mehedi_Hossain_09_Vice_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mehedi Hossain</h5>
                            <span>IUT 09</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/12_Md_Ziaul_Haque_Bhuiyan_10_Administrative_Officer.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Md Ziaul Haque Bhuiyan</h5>
                            <span class="batch-font">IUT 10</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
{{--                        <div class="team__social">--}}
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/13_Tamzid_Azad_10_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Tamzid Azad</h5>
                            <span class="batch-font">IUT 10</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/14_Mohammad_Badhan_Dewan_11_Vice_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mohammad Badhan Dewan</h5>
                            <span class="batch-font">IUT 11</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/15_Mir_Shahrukh_Islam_11_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mir Shahrukh Islam</h5>
                            <span class="batch-font">IUT 11</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/16_Tahmidul_Bari_Faiaz_11_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Tahmidul Bari Faiyaz</h5>
                            <span class="batch-font">IUT 11</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/17_Syed_Muqsit_Razee_12_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Syed Muqsit Razee</h5>
                            <span class="batch-font">IUT 12</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/18_Tanvir_Hossain_Mehedi_12_Vice_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Tanvir Hossain Mehedi</h5>
                            <span class="batch-font">IUT 12</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/19_MD_Mahfuzul_Hoq_13_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Md. Mahfuzul Hoq</h5>
                            <span class="batch-font">IUT 13</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/20_Omar_Sadab_Chowdhury_13_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Omar Sadab Chowdhury</h5>
                            <span class="batch-font">IUT 13</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/21_Sadaf_MD_Halim_14_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Sadaf MD Halim</h5>
                            <span class="batch-font">IUT 14</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/22_Muhammad_Shihab_Rashid_14_Head_of_Administration.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Muhammad Shihab Rashid</h5>
                            <span class="batch-font">IUT 14</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/23_Quazi_Fahim_Faisal_Dhruba_14_Head_of_Communication.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Quazi Fahim Faisal Dhruba</h5>
                            <span class="batch-font">IUT 14</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/24_Rayhanul_Islam_14_Head_of_Event_Management.jpeg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Rayhanul Islam</h5>
                            <span class="batch-font">IUT 14</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/25_Mohammad_Ebne_Enayet_14_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mohammad Ebne Enayet</h5>
                            <span class="batch-font">IUT 14</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/26_Rifat_Bin_Alam_14_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Rifat Bin Alam</h5>
                            <span class="batch-font">IUT 14</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/27_Mashharar_Bhuiyan_14_Senior_Member.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mashharar Bhuiyan</h5>
                            <span class="batch-font">IUT 14</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/28_Wakil_Ahmed_Arnob_15_Vice_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Wakil Ahmed Arnob</h5>
                            <span class="batch-font">IUT 15</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/29_Ahsan_Rejwan_Zaman_15_Head_of_Administration.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Ahsan Rejwan Zaman</h5>
                            <span class="batch-font">IUT 15</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/30_Md_Lutfor_Rahman_Rafe_15_Head_of_Internal_Affairs.jpeg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Md. Lutfor Rahman Rafe</h5>
                            <span class="batch-font">IUT 15</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/31_alvee_akand_15_president.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Alvee Akand</h5>
                            <span class="batch-font">IUT 15</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Team Section End -->

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
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
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
<script type="text/javascript" src="/js/particles.js"></script>
<script type="text/javascript" src="/js/app_alumni.js"></script>
</body>

</html>
