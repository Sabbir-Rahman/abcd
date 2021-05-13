<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IUTDS</title>

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
    <link rel="stylesheet" href="/staging-assets/css/slick.css" type="text/css">
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
        <h4><font color="white">IUTDS</font></h4>
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
                    <!--
                    <a href="#"><img src="/img/iutds-logo.jpg" alt=""></a>
                    -->
                    <h4><font color="white">IUTDS</font></h4>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('home-page')}}">Home</a></li>
                        <li><a href="{{route('hall-of-fame')}}">Hall of fame</a></li>
                        <li><a href="#">Iutds Corner</a>
                            <ul class="dropdown">
                                <li class="submenu"><a href="{{route('about')}}">About Us</a></li>
                                <li class="submenu"><a href="{{route('highlights')}}">Highlights</a></li>

                            </ul>
                        </li>
                        <li><a href="#">Our People</a>
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
                    <span>Follow us</span>
                    <span><font color="#a9a9a9">facebook.com/iutdebatingsociety</font></span>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="/img/iutds-back.jpg">
            <div class="hero__text">
                <h2>" I think Therefore <br>I am "</h2>
                <h5><font color="white"><i>-Rene Descartes</i></font></h5>
                <br><br><br><br>
                <a href="{{route('about')}}" class="primary-btn">Visit Us</a>
{{--                <a href="#" class="more_btn">Discover more</a>--}}
                <div class="hero__social">
                    <a href="https://www.facebook.com/iutdebatingsociety"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/iut-debating-society/about/"><i
                            class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="/img/bg_eid_wish.jpg">
            <div class="hero__text">
                <h2>EID <br>Mubarak</h2>
                {{--                <h5><font color="white"><i>-Rene Descartes</i></font></h5>--}}
                {{--                <br><br><br><br>--}}
                {{--                <a href="#" class="primary-btn">Visit Us</a>--}}
                {{--                <a href="#" class="more_btn">Discover more</a>--}}
                <div class="hero__social">
                    <a href="https://www.facebook.com/iutdebatingsociety"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/iut-debating-society/about/"><i
                            class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>

    </div>
    <div class="slide-num" id="snh-1"></div>
    <div class="slider__progress"><span></span></div>
</section>
<!-- Hero Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>who are we</span>
                        <h2>We are IUTDS</h2>
                    </div>
                    <div class="about__para__text">
                        <p>From Islamic University of Technology, IUTDS is one of the prominent debating clubs of
                            university level debating in Bangladesh.
                            It’s a society that values free-thinking and encourages its members to think analytically.
                        </p>
                        <p>Since its inception in 1997, IUT Debating Society has been actively participating in many
                            national and international tournaments.
                            Breaking to the quarter-finals of Malaysia WUDC 2015 and Dutch WUDC 2017 are its recent most
                            remarkable achievements.
                            Recently, a team from IUTDS broke 4th in the EFL category of the Asian British Parliamentary
                            Debating Championship 2020.
                        </p>
                        <p>Our flagship tournament, IUT Professionals, hosts prominent debate teams from all over the
                            country.
                        </p>

                    </div>
                    <a href="{{route('about')}}" class="primary-btn normal-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">

                <div class="about__pic">
                    <br>
                    <div class="about__pic__inner">
                        <br><br><br><br>
                        <img src="/img/iutds-logo.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->
<!--Moderator speech start-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">

                <div class="about__pic">
                    <br>
                    <div>
                        <br><br><br><br>

                        <img src="/img/moderator_Dr_Rashid_2020_Jan.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="about__text">
                    <div class="section-title">
                        <span>Greetings from our</span>
                        <h2>Moderator</h2>
                    </div>
                    <div class="about__para__text">

                        <p>Since its inception in 2002, IUT Debating Society has been actively participating in many
                            national and international tournaments.
                            Breaking to the quarter-finals of Malaysia WUDC 2015 and Dutch WUDC 2017 are its recent most
                            remarkable achievements.
                            Recently, a team from IUTDS broke 4th in the EFL category of the Asian British Parliamentary
                            Debating Championship 2020.
                        </p>
                        <p>Since its inception, the club has achieved national and international glory. The debaters are
                            being recognized for their extraordinary service to the club. Moreover, I’ve seen alumnus
                            from this club flourishing further in their career and they acknowledge the importance of
                            debating skills for it which includes logical reasoning, problem solving and critical
                            thinking. Apart from tremendous achievements of the debaters, a strong bond among the
                            debaters and alumnus is maintained in IUTDS. I have seen this club grow from its root and
                            I’m proud of it. I expect the continuation of the glory of IUTDS.
                        </p>
                        <p><strong>
                                I wish my beloved club the best of luck.
                            </strong>
                        </p>

                    </div>
                    <h4>-DR A R M Harunur Rashid</h4>
                    <h5>&nbsp&nbspAssociate Professor</h5>
                    <h5>&nbsp&nbspMechanical and Production Engineering, IUT</h5>
                    <h5>&nbsp&nbspModerator,IUTDS</h5>
                    <br><br><br><br><br><br>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Moderator speech end-->

<!-- Project Section Begin -->
<section class="project">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>Our</span>
                    <h2>Committee</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/1_President_Musarrat_Rafa.jpg">
                        <div class="project__slider__item__hover">
                            <span>President</span>
                            <h5>Musarrat Rafa</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/2_Vice_President_Muhammad_Rafiul_Mahdi.jpg">
                        <div class="project__slider__item__hover">
                            <span>Vice President</span>
                            <h5>Muhammad Rafiul Mahadi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/3_Head_of_Administration_Sayeed_Zamee.jpg">
                        <div class="project__slider__item__hover">
                            <span>Head Of administration</span>
                            <h5>Sayeed Zamee</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/4_Head_of_Internal_Affairs_Hamim_Hamid.jpg">
                        <div class="project__slider__item__hover">
                            <span>Head Of Internal Affairs</span>
                            <h5>Hamim Hamid</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/5_Head_of_Publications_Mubtaseem_Zawad.jpg">
                        <div class="project__slider__item__hover">
                            <span>Head Of Publication</span>
                            <h5>Mubtaseem Zawad</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/6_Head_of_Content_Development_Vubon_Chowdhury.jpg">
                        <div class="project__slider__item__hover">
                            <span>Head Of Content Development</span>
                            <h5>Vubon Chowdhury</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/7_Head_of_Communications_Shamaita_Shabnam.jpg">
                        <div class="project__slider__item__hover">
                            <span>Head Of Communications</span>
                            <h5>Shamaita Shabnam</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/8_Head_of_Event_Management_Lamisa_Shams.jpg">
                        <div class="project__slider__item__hover">
                            <span>Head Of Event Management</span>
                            <h5>Lamisa Shams</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/9_Senior_Executive_Eshrar_Promitee.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Executive</span>
                            <h5>Eshrar Promitee</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/10_Senior_Executive_Maheer_Asef.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Executive</span>
                            <h5>Maheer Asef</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/11_Senior_Executive_Mahin_Nur.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Executive</span>
                            <h5>Mahin Nur</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/12_Senior_Executive_Nabila_Tasnim_Suprova.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Executive</span>
                            <h5>Nabila Tasnim Suprova</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/13_Senior_Executive_Omar_Ahsan.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Executive</span>
                            <h5>Omar Ahsan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/14_Senior_Executive_Raisa_Labiba_Khan.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Executive</span>
                            <h5>Raisa Labiba Khan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/15_Senior_Executive_Samia_Tasnim.jpeg">
                        <div class="project__slider__item__hover">
                            <span>Samia Tasnim</span>
                            <h5></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/16_Senior_Executive_Tahmidul_Islam.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Executive</span>
                            <h5>Tahmidul Islam</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/17_Senior_Executive_Zarrin_Tasnim.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Executive</span>
                            <h5>Zarrin Tasnim</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/18_General_Secretary_Mutiul_Muhaimin.jpg">
                        <div class="project__slider__item__hover">
                            <span>General Secretary</span>
                            <h5>Mutiul Muhaimin</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/19_Joint_Secretary_Zahin_Raidah.jpg">
                        <div class="project__slider__item__hover">
                            <span>Joint Secretary</span>
                            <h5>Zahin Raidah</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/20_Treasurer_Fahad_Ahmed_Evan.jpg">
                        <div class="project__slider__item__hover">
                            <span>Treasurer</span>
                            <h5>Fahad Ahmed evan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/21_Secretary_Admin_Nushera_Tazreen.jpg">
                        <div class="project__slider__item__hover">
                            <span>Secretary (Admin)</span>
                            <h5>Nushera Tazreen</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/22_Secretary_Internal_Affairs_Maruful_Islam.jpg">
                        <div class="project__slider__item__hover">
                            <span>Secretary (Internal Affairs)</span>
                            <h5>Maruful Islam</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/23_Secretary_Communications_Mahdia_Akter.jpg">
                        <div class="project__slider__item__hover">
                            <span>Secretary (Communications)</span>
                            <h5>Mahdia Akter</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/24_Secretary_Liaison_Zubayer_Kabir_Eisham.jpg">
                        <div class="project__slider__item__hover">
                            <span>Secretary (Liaison)</span>
                            <h5>Zubayer Kabir Eisham</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/25_Public_Relations_Officer_Sameeul_Amin_Dhrubo.jpg">
                        <div class="project__slider__item__hover">
                            <span>Public Relations Officer</span>
                            <h5>Sameeul Amin Dhrubo</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/26_Admin_Officer_Asir_Saadat_Nipun.jpg">
                        <div class="project__slider__item__hover">
                            <span>Admin Officer</span>
                            <h5>Asir Saadat Nipun</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/27_Admin_Officer_Taukir_Azam_Chowdhury.jpg">
                        <div class="project__slider__item__hover">
                            <span>Admin Officer</span>
                            <h5>Taukir Azam Chowdhury</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/28_Logistic_Officer_Kashifa_Kawaakib.jpg">
                        <div class="project__slider__item__hover">
                            <span>Logistic Officer</span>
                            <h5>Kashifa Kawaakib</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/29_Logistic_Officer_MD_Sabbir_Rahman.jpg">
                        <div class="project__slider__item__hover">
                            <span>Logistic Officer</span>
                            <h5>MD Sabbir Rahman</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/30_Equity_Officer_Sumaieta_Tasnim.jpg">
                        <div class="project__slider__item__hover">
                            <span>Equity Officer</span>
                            <h5>Sumaieta Tasnim</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/31_Senior_Member_Afsana_Bushra.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Member</span>
                            <h5>Afsana Bushra</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/32_Senior_Member_Antara_Raisa.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Member</span>
                            <h5>Antara Raisa</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="/img/imageCommitee/33_Senior_Member_Mim.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Member</span>
                            <h5>Mim</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/34_Senior_Member_Mohammad_Ishraq_Hossain.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Member</span>
                            <h5>Mohammad Ishraq Hossain</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg"
                         data-setbg="/img/imageCommitee/35_Senior_Member_Samiha_Anuva.jpg">
                        <div class="project__slider__item__hover">
                            <span>Senior Member</span>
                            <h5>Sumaieta Tasnim</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Project Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our specialize</span>
                    <h2>Events</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="{{route('about',['#cafe-debate-details'])}}">
                    <div class="services__item">
                        <img src="/img/eventsImage/cafe_debate_little_logo.png" alt="" width="60%">
                        <h4>Cafe Debate</h4>
                        <br>
                        <p>The yearly fun debate on Club Fresher’s Day for all the icebreaking</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="{{route('about',['#greatness-express-details'])}}">
                    <div class="services__item">
                        <img src="/img/eventsImage/greatness_express_little_logo.png" alt="" width="60%">
                        <h4>Iutds Greatness Express</h4>
                        <p>The yearly novice tournament to find out the best debaters among the freshers</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="{{route('about',['#iutds-iv-details'])}}">
                    <div class="services__item">
                        <img src="/img/eventsImage/iutdsiv_little_logo.png" alt="" width="60%">
                        <h4>Iutds IV</h4>
                        <br>
                        <p>The biggest debate tournament organized by IUTDS comprising of teams from both the national
                            and international arena
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="{{route('about',['#iut-professionals-details'])}}">
                    <div class="services__item">
                        <img src="/img/eventsImage/professionals_little_logo.png" alt="" width="60%">
                        <h4>Iutds Professional</h4>
                        <p>IUT Professionals is the flagship event of IUTDS hosting the most competitive debates from
                            the strongest of teams.
                        </p>
                    </div>
                </a>

            </div>

        </div>
        <div class="counter__content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="count">2002</h2>
                        </div>
                        <div class="counter__item__text">
                            <h5>Estd<br/></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="count">24</h2>
                        </div>
                        <div class="counter__item__text">
                            <h5>Executives<br/></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="count">70</h2>

                        </div>
                        <div class="counter__item__text">
                            <h5>Members<br/></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="count">26</h2>
                        </div>
                        <div class="counter__item__text">
                            <h5>Achievements<br/></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Testimonial Section Begin -->
{{--<section class="testimonial spad set-bg" data-setbg="/staging-assets/img/testimonial/testimonial-bg.jpg">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12 text-center">--}}
{{--                <div class="section-title">--}}
{{--                    <span>Testimonials</span>--}}
{{--                    <h2>What your clients say</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="testimonial__carousel">--}}
{{--                    <div class="testimonial__item">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-xl-9 col-lg-10">--}}
{{--                                <p>“1. Fast and accurate at solving mental math problems involving addition,--}}
{{--                                    subtraction, multiplication, division and percentages but without high-level--}}
{{--                                    skills that might be required in jobs requiring complex calculation and--}}
{{--                                    analysis.”</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial__item">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-xl-9 col-lg-10">--}}
{{--                                <p>“2. Fast and accurate at solving mental math problems involving addition,--}}
{{--                                    subtraction, multiplication, division and percentages but without high-level--}}
{{--                                    skills that might be required in jobs requiring complex calculation and--}}
{{--                                    analysis.”</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial__item">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-xl-9 col-lg-10">--}}
{{--                                <p>“3. Fast and accurate at solving mental math problems involving addition,--}}
{{--                                    subtraction, multiplication, division and percentages but without high-level--}}
{{--                                    skills that might be required in jobs requiring complex calculation and--}}
{{--                                    analysis.”</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial__item">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-xl-9 col-lg-10">--}}
{{--                                <p>“4. Fast and accurate at solving mental math problems involving addition,--}}
{{--                                    subtraction, multiplication, division and percentages but without high-level--}}
{{--                                    skills that might be required in jobs requiring complex calculation and--}}
{{--                                    analysis.”</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial__item">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-lg-9">--}}
{{--                                <p>“5. Fast and accurate at solving mental math problems involving addition,--}}
{{--                                    subtraction, multiplication, division and percentages but without high-level--}}
{{--                                    skills that might be required in jobs requiring complex calculation and--}}
{{--                                    analysis.”</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row d-flex justify-content-center">--}}
{{--            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-10 ">--}}
{{--                <div class="testimonial__client">--}}
{{--                    <div class="testimonial__client__item add">--}}
{{--                        <div class="testimonial__client__pic">--}}
{{--                            <img src="/staging-assets/img/testimonial/ta-1.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="testimonial__client__text">--}}
{{--                            <h5>Renee Calhoun</h5>--}}
{{--                            <span>CEO Woolley</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial__client__item">--}}
{{--                        <div class="testimonial__client__pic">--}}
{{--                            <img src="/staging-assets/img/testimonial/ta-2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="testimonial__client__text">--}}
{{--                            <h5>Renee Calhoun</h5>--}}
{{--                            <span>CEO Woolley</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial__client__item">--}}
{{--                        <div class="testimonial__client__pic">--}}
{{--                            <img src="/staging-assets/img/testimonial/ta-3.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="testimonial__client__text">--}}
{{--                            <h5>Renee Calhoun</h5>--}}
{{--                            <span>CEO Woolley</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial__client__item">--}}
{{--                        <div class="testimonial__client__pic">--}}
{{--                            <img src="/staging-assets//testimonial/ta-4.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="testimonial__client__text">--}}
{{--                            <h5>Renee Calhoun</h5>--}}
{{--                            <span>CEO Woolley</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial__client__item">--}}
{{--                        <div class="testimonial__client__pic">--}}
{{--                            <img src="/staging-assets/img/testimonial/ta-5.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="testimonial__client__text">--}}
{{--                            <h5>Renee Calhoun</h5>--}}
{{--                            <span>CEO Woolley</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="logo__carousel owl-carousel">--}}
{{--                    <div class="logo__carousel__item">--}}
{{--                        <a href="#"><img src="/staging-assets//logo/logo-1.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="logo__carousel__item">--}}
{{--                        <a href="#"><img src="/staging-assets/img/logo/logo-2.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="logo__carousel__item">--}}
{{--                        <a href="#"><img src="/staging-assets/img/logo/logo-3.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="logo__carousel__item">--}}
{{--                        <a href="#"><img src="/staging-assets/img/logo/logo-4.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="logo__carousel__item">--}}
{{--                        <a href="#"><img src="/staging-assets/img/logo/logo-5.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="logo__carousel__item">--}}
{{--                        <a href="#"><img src="/staging-assets/img/logo/logo-3.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Testimonial Section End -->

<!-- Team Section Begin -->
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="section-title">
                    <span>Our</span>
                    <h2>Highlights</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team__btn">
                    <a href="{{route('highlights')}}" class="primary-btn normal-btn">View All</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/indexImage/index_treasure_hunt.png">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Treasure Hunt</h5>
                            <span>2020</span>
                        </div>
                        <p>You know what debaters are good at? Solving puzzles and mysteries. And the Treasure Hunt
                            event is the testament of that.<br><br>
                            <a id="show-more-link" href="{{route('highlights',['#highlights-1'])}}">Show More..</a>
                        </p>

                        <div class="team__social">
{{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/indexImage/greatness_express_index_highlights.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Greatness Express</h5>
                            <span>2020</span>
                        </div>
                        <p>Despite covid pandemic, IUT Greatness Expressed 20 was
                            successfully organized online. The freshman from IUT show their debating skill. Tahya
                            Ahammed Bisma and Reaz
                            Hassan Joarder’s Team Springfield took the trophy home
                            <br><br>
                            <a id="show-more-link" href="{{route('highlights',['#highlights-2'])}}">Show More..</a>
                        </p>

                        <div class="team__social">
                            <a href="https://www.facebook.com/events/682229159236957/?acontext=%7B%22event_action_history%22%3A[%7B%22mechanism%22%3A%22search_results%22%2C%22surface%22%3A%22search%22%7D]%7D"><i
                                    class="fa fa-facebook"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/indexImage/enginnering_debate_index_highlights.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Engineering Debate</h5>
                            <span>Upcoming</span>
                        </div>
                        <p>The upcoming Engineering Debate 2020 will be a concoction of fun and logic. The departments
                            of IUT will be partaking in a jovial war of logics on humorous motions. Also, there will be
                            no language barrier in this event. <br><br>
                            <a id="show-more-link" href="{{route('highlights',['#highlights-3'])}}">Show More..</a>
                        </p>

                        <div class="team__social">
{{--                            <a href=""><i class="fa fa-facebook"></i></a>--}}

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Team Section End -->

<!-- Call To Action Section Begin -->
{{--<section class="callto spad set-bg" data-setbg="/staging-assets/img/call-bg.jpg">--}}
{{--    <div class="container">--}}
{{--        <div class="row d-flex justify-content-center">--}}
{{--            <div class="col-lg-10 text-center">--}}
{{--                <div class="callto__text">--}}
{{--                    <span>Why choose us?</span>--}}
{{--                    <h2>Our Ability To Deliver Outstanding Results For Our Clients Starts With Our Team Of Smart.--}}
{{--                    </h2>--}}
{{--                    <a href="#" class="primary-btn">Contact Us</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Call To Action Section End -->

<!-- Latest Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="section-title">
                    <span>Latest</span>
                    <h2>From our blog</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="latest__btn">
                    <a href="{{route('blog-page')}}" class="primary-btn normal-btn">View All</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <a href="{{route('blog-page',['#blog-1'])}}">
                    <div class="latest__item">
                        <div class="latest__item__pic">
                            <img src="/img/blogImage/How_To_Look_Pretty_by_Tahya_1.jpeg" alt="">
                        </div>
                        <div class="latest__item__text">
                            <span>Self Care</span>
                            <h4>How To Look Pretty<br><br></h4>
                            <p>Tahya Ahmed Bisma</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <a href="{{route('blog-page',['#blog-2'])}}">
                    <div class="latest__item">
                        <div class="latest__item__pic">
                            <img src="/img/blogImage/belief.jpg" alt="">
                        </div>
                        <div class="latest__item__text">
                            <span>Thinking</span>
                            <h4>Belief <br><br></h4>
                            <p>Nokimul Hasan Arif</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <a href="{{route('blog-page',['#blog-3'])}}">
                    <div class="latest__item">
                        <div class="latest__item__pic">
                            <img src="/img/blogImage/life_matters_blog_arpi.jpg" alt="">
                        </div>
                        <div class="latest__item__text">
                            <span>Activism</span>
                            <h4>What Is Activism<br><br></h4>
                            <p>Safoat Saima Arpi</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Latest Section End -->

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
                        <a href="https://www.linkedin.com/company/iut-debating-society/about/"><i
                                class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__address">
                    <h6>Get In Touch</h6>
                    <p>Islamic University of Technology <br/>Gazipur,Dhaka,Bangladesh</p>
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
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved by <strong><font color="#dcdcdc">IUTDS</font></strong> | This website is
                            made with <i class="fa fa-heart-o"
                                         aria-hidden="true"></i> by <strong><font color="#d3d3d3">IUTDS</font></strong>
                            and with the help of <a href="https://colorlib.com"
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
