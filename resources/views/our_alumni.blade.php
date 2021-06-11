<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IUTDS | Our Alumni</title>

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
    <link rel="stylesheet" href="/css/pagination.css" type="text/css">

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
        <a href="https://www.facebook.com/iutdebatingsociety">
            <font color="#a9a9a9">facebook.com/iutdebatingsociety</font>
        </a>
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
                                <li class="submenu"><a href="#">Our Alumni</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('blog-page')}}">Blog</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__widget">
                    <span>Follow us</span>
                    <a href="https://www.facebook.com/iutdebatingsociety">
                        <font color="#a9a9a9">facebook.com/iutdebatingsociety</font>
                    </a>
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
                        <p>Rishad Shafiq is the first-ever president of IUT Debating Society. He carried on his
                            excellence in debating into his academic field. He has worked as a Research Consultant for
                            the National Microelectronics Institute and as a Research Fellow for the University of
                            Southampton and the University of Bristol. He is currently engaged with Newcastle University
                            as a Senior Lecturer and an Associate Professor. </p>
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
                            <h5>Mabroor Wassey</h5>
                            <span class="batch-font">IUT 03</span>
                        </div>
                        <p>Mabroor Wassey is a robust name for being one of the pioneers in international debate in
                            Bangladesh. He coached Bangladesh national debating team for WUDC, organized workshops for
                            debaters, judges and organizers all over the country. He worked for BAT more than 8 years,
                            now working as a Senior Associate at PwC.</p>
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
                        <p>Rishad Sharif has great knowledge on economics, technology and management. He can just sit
                            and tickle you with his great public speaking ability. As expected, BAT grabbed Rishad
                            Sharif as their Management Trainee for his formidable communication skills. He is currently
                            working as Head of Supply Network Plan, New Generation Product at BAT.</p>
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
                        <p>Arif Mohiuddin Khan belongs to IUT batch 06. He had a consequential career both inside and
                            outside IUT. He represented multinational companies like Dabur Bangladesh, Berger Paints and
                            currently working for Teleflex Incorporated as Supply Chain Planner, New South Wales,
                            Australia.</p>
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
                        <p>AFM Sayem is from IUT Batch 07. His eventful career in IUTDS continued further after
                            graduation. He worked at giant companies like BAT, Enosis Solutions, NewsCred, Novelship
                            etc. He is currently working as a lead software engineer at DT One, Singapore.</p>
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
                        <p>Mathematician, engineer or a prominent debater? A lot of attributes go for this person. This
                            tech enthusiast served IUTDS from 2007 to 2011. He has an excellent academic prospectus. He
                            completed his Master of Engineering on BME from UBC, now working as a Biomedical Engineer at
                            Cosmic Medical.</p>
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
                        <p>Tahseen Jehad represented IUT in world stage for
                            multiple times. He represented IUT in prestigious tournaments like WUDC 09-10, Asian BP 2010
                            etc. He is remembered for uniting the whole club, executing debate programs and workshops
                            and making IUTDS more debate friendly club. BAT didn’t think twice to recruit
                            him after his graduation. He is currently working as
                            Category Sourcing Manager at Ericsson. </p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/8_Mohammad_Shariful_Islam_Chowdhury_07_IUTDS.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mohammad Shariful Islam Chowdhury</h5>
                            <span class="batch-font">IUT 07</span>
                        </div>
                        <p>Shariful Islam Chowdhury is an active debater who had great impact on developing young
                            debaters in IUT for ensuring the continuation of the legacy of IUTDS. He shone both in
                            academics and extracurricular activities. He is now working as a Graduate Research and
                            Teaching Assistant at McMaster Manufacturing Research Institute. </p>
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
                        <p>A prominent example of a debater, who shone academically along with great case solving skill.
                            He has shown path to many freshers on how to maintain academics even after performing
                            tremendously in extra-curricular activities. He has great achievements in prestigious
                            competitions like Battle of Minds and other tech based competitions. He is currently working
                            as Graduate Research Assistant at University of South Florida.</p>
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
                        <p>If an employer wants analytical skills, strategy planning, tech expert and great
                            communication skill all in one, call Shihab Ahmed. He was the president of IUTDS in 2013,
                            bore great impact on taking the club to the next level, coaching new debaters and bringing
                            achievements for IUTDS. He is currently working as Global Sourcing Manager at BAT.</p>
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
                        <p>Leadership, strategic insights and visionary thinking; If you combine all in one, you get
                            Mehedi Hossian. He pursued MBA after graduation and trained young generation to learn the
                            art of leadership. Currently he is working as Business Developer and Sales Manager at Hifab
                            International AB.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/12_Md_Ziaul_Haque_Bhuiyan_10_Administrative_Officer.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Md Ziaul Haque Bhuiyan</h5>
                            <span class="batch-font">IUT 10</span>
                        </div>
                        <p>Ziaul Haque is a tech enthusiast, true leader, strategic planner and an effective trainer. He
                            has the great ability of teaching difficult topics in the easiest way possible. He is a
                            substantial speaker that distinguishes him from other individuals. He worked for companies
                            like Huawei, Grameenphone etc. He is currently working as the Chief of Staff at ShopUp.</p>
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
                        <p>Tamzid Azad represented IUTDS as Vice President, brought splendor for IUTDS in many national
                            and international tournaments, successfully arranged national tournaments for IUTDS and
                            trained the young debaters for further greatness of IUTDS. He worked companies like Robi,
                            Grameenphone, Tulip etc. He moved to Toronto, Ontario, Canada as a part of his dynamic
                            career.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/14_Mohammad_Badhan_Dewan_11_Vice_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mohammad Badhan Dewan</h5>
                            <span class="batch-font">IUT 11</span>
                        </div>
                        <p>A true team guy, Badhan Dewan is born with the talent of uniting people and bringing the best
                            out of people under him. He was the president of IUTDS in 2015. His tremendous management
                            skill helped him to get into multinational company like BAT. His dedication proves how
                            debating can come handy to become top corporate official.</p>
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
                        <p>A true all-rounder who achieved countless glories for IUT. From winning competitions like
                            Battle of Minds to Unilever Bizmaestros. He participated in prestigious tech competitions
                            like International Robotics Challenge. He is currently working as Managing Director at
                            Bondstein Technologies Ltd.</p>
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
                        <p>He is the debater every club dreams to have. He debated wholeheartedly, won innumerable
                            trophies for IUT, served as joint secretary and vice president of the club, trained young
                            debaters to follow his footprints and organized successful festivals for IUTDS. He is
                            currently working as Shift Lead at BAT.</p>
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
                        <p>Every club goes through ups and downs. Syed Razee has the magical ability to motivate a whole
                            group of people and bring the best out of them. He served as President in IUTDS and coached
                            young debaters to carry on the legacy of IUTDS. He worked for companies like SELISE Rockin’
                            Software, BAT etc. He is currently working as Product Manager, Project Blitz at ShopUp.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/18_Tanvir_Hossain_Mehedi_12_Vice_President.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Tanveer Hossain Mehedi</h5>
                            <span class="batch-font">IUT 12</span>
                        </div>
                        <p>A person with great academic excellence, gold medalist, debater, business case solver, data
                            scientist, problem solver, passionate traveler, critical thinker:-I’m sure you'll run out of
                            attributes to define the greatness of Tanveer Mehedi. His presence in the club will prove to
                            the newcomers that you can still flourish as a debater maintaining your academics at the
                            same time.</p>
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
                        <p>The legendary Mahfuzul Hoq is the example of true debating talent. He proved that debating
                            skills can develop supplementary skills like business case solving, critical thinking, fast
                            learning etc. His debating excellence smoothed his way into top-tier international brands
                            like BAT, Robi etc. and becoming co-founder and director of Catalytic Interactive.</p>
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
                        <p>A person who takes pleasures from the beauty of life, a music enthusiast who can make you
                            happy even if you are in distress. He has a very strong academic background. He was Gold
                            Medalist from CEE department of IUT. His wholesomeness cheered up IUTDS for many a time. He
                            is currently working as Water Treatment Research and Development Associate in University of
                            Waterloo.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/19_2_Fahrial_Alam_13_head_of_internal_affairs.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Fahrial ALam</h5>
                            <span class="batch-font">IUT 13</span>
                        </div>
                        <p>A person whose speech is more than a set of words, one of the greatest public speakers in the
                            history of IUT, very few people can think as creatively as Fahrial Alam. His widespread
                            network helped IUTDS to build communication with higher officials. He achievements in IUT are
                            tremendous. He is the proud CEO of Bae Engineering Solutions.</p>
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
                        <p>A brilliant programmer, problem solver Sadaf MD Halim is the ideal exemplar for young CSE
                            students to become equally skillful in programming as well as debating. His academic
                            excellence proves how debating skill can help a person to be efficient in time management
                            and critical thinking. He completed Masters in Computer Science with a mindblowing result</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/22_Muhammad_Shihab_Rashid_14_Head_of_Administration.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Muhammad Shihab Rashid</h5>
                            <span class="batch-font">IUT 14</span>
                        </div>
                        <p>Beginning his career from school, Rashid immediately created a space for himself in IUTDS. He
                            compares debating to practical life scenarios and applies the lessons he learned from debate
                            in real life. His excellence in debating has led him to serve the department of CSE in IUT
                            before moving on to be the Graduate Student Researcher in University of California,
                            Riverside.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/23_Quazi_Fahim_Faisal_Dhruba_14_Head_of_Communication.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Quazi Fahim Faisal Dhruba</h5>
                            <span class="batch-font">IUT 14</span>
                        </div>
                        <p>He is one of the most wholesome people in IUTDS. He is extremely brilliant in academics,
                            efficient problem solver and data science enthusiast. He served as Head of Communication in
                            IUTDS. He is currently a Master's Student in Informatics at Technical University of
                            Munich.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/24_Rayhanul_Islam_14_Head_of_Event_Management.jpeg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Rayhanul Islam</h5>
                            <span class="batch-font">IUT 14</span>
                        </div>
                        <p>A famous face in IUT, contributed equally for multiple clubs, Rayhaul Islam is the example of
                            true all-rounder. He was equally skillful in Tabbing and organizing events for IUTDS. He was
                            excellent in academics as well. He is currently a MSc. Student in Hamburg University of
                            Technology.</p>
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
                        <p>The legendary Ebne Enayet was one of the pioneers in developing English Debate Circuit in
                            Bangladesh by constantly collaborating with international debaters and judges, grabbed
                            uncountable national and international achievements for IUT, known for his strong
                            communication skill, rational thinking and leadership.</p>
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
                        <p>An extremely passionate debater who travelled to Thailand just to provide emotional support
                            to his junior team in a WUDC event. He has great connection in the debate circuit and was a
                            famous figure in IUTDS. He worked for Unilever before joining ShopUp as Product Manager.</p>
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
                        <p>A lively person who can easily rile up a group of people in an interesting conversation and
                            set the premise for an event. He cared about the juniors of the club, listened to their
                            issues and gave them mental support. He worked as Vice President in IUTCBS apart from being
                            super active in IUTDS. He joined BAT after graduation. He is currently working as the Deputy
                            Director at Walton Hi-Tech Industries Ltd.</p>
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
                        <p>If Tabbing is an Art, Wakil Arnob is the Picasso of it. Apart from being a debater, he was
                            called in huge events for tabbing. He had maintained a lot of issues regarding IUT. People
                            tend to follow him for his leadership skills and wholesome personality. He helped juniors
                            out of many sticky situations. He is currently working as Engineering Officer at Incepta
                            Pharmaceuticals Ltd.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/29_Ahsan_Rejwan_Zaman_15_Head_of_Administration.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Ahsan Rejwan Zaman</h5>
                            <span class="batch-font">IUT 15</span>
                        </div>
                        <p>Ahsan Rejwan Zaman is a brilliant person. He is an expert in Philosophy, Policies and
                            Principles. He is an efficient problem solver as well as a good debater. He joined Samsung
                            R&D Institute after graduation. He is loved for his great sense of humor and radiant
                            personality.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/30_2_Shadman_alvy_khan_15_senior_member.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Shadman Alvy Khan</h5>
                            <span class="batch-font">IUT 15</span>
                        </div>
                        <p>Shadman Alvy Khan is a motivated individual who is always keen on learning new things. Being
                            an amazing organizer, he played key roles in organizing events such as IUT Professionals and
                            Esonance. He is currently an Assistant Engineer at Energypac Engineering and a Senior
                            photographer & manager at Wedding Edge. Even after fulfilling all his responsibilities, he
                            manages to find time to travel the world.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/30_Md_Lutfor_Rahman_Rafe_15_Head_of_Internal_Affairs.jpeg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Md. Lutfor Rahman Rafe</h5>
                            <span class="batch-font">IUT 15</span>
                        </div>
                        <p>A debater who started debate after joining IUT, participated in multiple national and
                            international debate fests, had breaks to his name, Lutfor Rafe is the ultimate example of
                            sheer dedication to all IUTDS debaters. He joined as intern at Samsung R&D Institute, worked
                            as Sales and Marketing executive at Battery Low Interactive, currently working as Business
                            Development Executive at Antopolis.</p>
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
                        <p>Alvee Akand is the best trainer for training young debaters for BP format in IUT. He served
                            as president of IUT, conducted regular workshops and sessions for debaters, built a good
                            debater friendly environment in the club. He is currently working as a Software Engineer at
                            Educator, New York, United States.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/31_3_Raguib_Raihan_15_iutds.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Raguib Raihan</h5>
                            <span class="batch-font">IUT 15</span>
                        </div>
                        <p>Raguib Raihan, a remarkable exemplary person, who had created a deep impact and made a better
                            change in all sectors of IUTDS. He started his debating career at JDC. He is an idol for the
                            debaters who want to pursue the path of becoming an expert tab master and
                            organizer. He worked for Agro Organic, Nilavo, Singularity, BAT. Currently, he is working as
                            a consultant at Zunoks.</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="/img/alumniImage/32_president_musarrat_rafa_16.JPG">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Musarrat Rafa</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Rafa will be fierce to call out your misogyny and resolute. This mechanical engineer will
                            leave you surprised with her academic rigor while competing in tournaments home and abroad.
                            She led IUTDS as President, Youth Policy Forum as Research and Policy Lead during the
                            uncertainty of the pandemic and still managed to land the position of Management Trainee in
                            one of the most giant MNCs out there.. <br>– Ha-mim Hamid</p>
                        {{--                        <div class="team__social">--}}
                        {{--                            <a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                            <a href="#"><i class="fa fa-instagram"></i></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/33_Vice_President_Muhammad_Rafiul_Mahdi_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Muhamamd Rafiul Mahdi</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Sort of difficult to pen down anything about Rafiul without tons of memories gushing in.
                            Rafiul probably has 99 qualities that make him who he is, but it would be his ability to
                            comfort if I were to choose one. His unusual talent of calming everyone down and carrying on
                            real work is rare. As they say, we are all talk and no work; it magnifies to infinity in,
                            say, a debate club where the average is naturally good in the 'talk.' Let's say you broke
                            someone's nose, just call Rafiul. I'm sure he will make things like shit never happened.
                            <br>– Musarrat Khan Rafa</p>
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

<!-- Pagination start -->
<div class="demo">

    <nav class="pagination-outer" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item "><a class="page-link" href="{{route('our-alumni-second')}}">2</a></li>
            <li class="page-item">
                <a href="{{route('our-alumni-second')}}" class="page-link" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </nav>
    <br><br>

</div>

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
<script type="text/javascript" src="/js/particles.js"></script>
<script type="text/javascript" src="/js/app_alumni.js"></script>
</body>

</html>
