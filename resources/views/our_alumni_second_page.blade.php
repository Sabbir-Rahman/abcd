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
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/34_Head_of_Administration_Sayeed_Zamee_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Sayeed Zamee</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>At first glance, Sayed Zamee might come off as a lazy individual, but don't let his act fool
                            you. He is probably doing that to analyze who you are. A logical individual who is very
                            fluent in the art of rhetoric. Someone who is very determined and dedicated to achieving his
                            goals.<br>– Mubtaseem Zawad </p>
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
                     data-setbg="/img/alumniImage/35_Head_of_Internal_Affairs_Hamim_Hamid_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Hamim Hamid</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Hamim is one of those few persons you meet in your life who is upfront and clear on their
                            goals and will try to do their utmost to fulfill them. But I guess what makes her a great
                            person is sharing your ideas with her without hesitation. She won't judge you a bit, and I
                            guess that's what makes her exceptional.<br> – Muhammad Rafiul Mahdi (Navid)</p>
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
                     data-setbg="/img/alumniImage/36_Head_of_Publications_Mubtaseem_Zawad_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mubtaseem Zawad</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>A man always seeking perfection; an eloquent speaker; a favorite senior - these words can
                            never be enough to talk genuinely of the nature of Zawad Bhai. All these labels feel like
                            I'm putting a boundary to what he's capable of. To me, he was a mentor and a big brother. He
                            always had time for me, listening to my rants, taking me on a drive at 6 in the morning, or
                            even backing me up when I'm stuck in a corner. Zawad Bhai is one of those people who would
                            do everything in his might to stay beside his closest ones. <br>– Fahad Ahmed Evan</p>
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
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/37_Head_of_Content_Development_Vubon_Chowdhury_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Vubon Chowdhury</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Vubon is one of the most dedicated and hardworking beings I have seen in IUT. "Hungry for
                            perfection," "Motivation to achieve," and "High integrity" are probably the most appropriate
                            ways of describing Vubon, which are some of the rarest attributes these days. It has been an
                            absolute honor to share the same club and research space with this guy! <br>– Mahin Nur</p>
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
                     data-setbg="/img/alumniImage/38_Head_of_Communications_Shamaita_Shabnam_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Shamaita Shabnam</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Often known as a chatterbox, Shamaita is definitely beyond just a good talker. From having
                            significant engineering achievements to gracing the podium, she does it like no other.
                            However, my favorite Shamaita is probably the cat mom Shamaita. Add dancer Shamaita to the
                            list as well. While Shamaita isn't earning gold medals for things, you'll find her dancing
                            to a random song or hiding under her blanket, finishing her manga. <br>– Musarrat Khan Rafa
                        </p>
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
                     data-setbg="/img/alumniImage/39_Head_of_Event_Management_Lamisa_Shams_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Lamisa Shams</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Lamisa is the human definition of clinophile. Being one of the people who got to know her
                            very closely during the university days, I can confidently say that Lamisa is more attached
                            to her bed than any person in the world. Her musings are spectacular, as well as a study on
                            materials.Not
                            only us but
                            Lamisa too considers herself to be a philosophical guru. Proofs gathered from late-night
                            discussions and her two amazing sisters. And most of all, she is a woman of her words. It's
                            an exquisite experience to listen to any of her solicited opinions.</p>
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
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/40_Senior_Executive_Eshrar_Promitee_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Eshrar Promitee</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Eshrar Promitee, a beloved EEE mate, has showcased her talents in several forms over the past
                            four years I have known her. Debate competitions, music, painting are a few of her notable
                            fortes. However, Promitee's prominent feature, indisputably, is her affection and empathy
                            towards her associates. You can always count on our senior executive for rational
                            expositions, partying, and bear hugs! <br>– Sanjida Ali</p>
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
                     data-setbg="/img/alumniImage/41_Senior_Executive_Maheer_Asef_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Maheer Asef</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Maheer Asef is talented, hardworking, and has a good sense of humor at the same time. If
                            there is any task he is given to do, he wants perfection in completing it. Apart from
                            joking, he also loves food and a good book to read. <br>- Nabila Tabassum Suprova</p>
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
                     data-setbg="/img/alumniImage/42_Senior_Executive_Mahin_Nur_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Mahin Nur</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>He's a man of high ambitions, and he's someone whose company keeps you productive. Having
                            spent four years of my university with him in close proximity, I've had the experience of
                            observing him from the perspective of a rival, a friend as well as a teammate. And
                            throughout these four years, he has undergone a journey of growth. The first impression you
                            have of him might not be your favourite, but he'll leave you with a much better and a longer
                            lasting one if you stick by. <br>– Vubon Chowdhury</p>
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
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/43_Senior_Executive_Nabila_Tasnim_Suprova_16.png">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Nabila Tasnim Suprova</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Passion, candor, eloquence- the first words that will spring to mind when you encounter
                            Suprova. Treasured by IUTDS, for she herself has done no less throughout her tenure. When
                            the going gets tough, she is the one you can always count on. <br>- Faria Noor</p>
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
                     data-setbg="/img/alumniImage/44_Senior_Executive_Omar_Ahsan_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Omar Ahsan</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Omar Ahsan is the kind of person who will make you smile with supposedly lame jokes and
                            surprise you with deep conversations on the meaning of life. He is a humble individual who
                            is always eager to learn. He represented IUTDS in many debate competitions and remains a
                            lovable character to all who knows him. Omar Ahsan is currently working as an AI Engineer at
                            Intelligent Machines Limited. <br>– Lutfor Rahman Rafe
                        </p>
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
                     data-setbg="/img/alumniImage/45_Senior_Executive_Raisa_Labiba_Khan_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Raisa Labiba Khan</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Raisa has been the one constant for me over the years of IUT. From being college-mates to
                            dorm-mates, we have been parts of waves of laughter, panic attacks, fights, love, and
                            whatnot. She knows her deal well and is a helpful topper. Her persistence is praiseworthy.
                            <br>– Zarrin Tasnim
                        </p>
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
                <div class="team__item set-bg"
                     data-setbg="/img/alumniImage/46_Senior_Executive_Samia_Tasnim_16.jpeg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Samia Tasnim</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>Samia is one of those people who always go out of her way to help her friends without really
                            giving a second thought. She is exceptionally bold, compassionate and when she makes a
                            statement, it's straightforward. No beating about the bush. She brings smiles to the people
                            around her with an absolutely glamorous fashion sense. <br>– Ehsanuzzaman Shurid</p>
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
                     data-setbg="/img/alumniImage/47_Senior_Executive_Tahmidul_Islam.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Tahmidul Islam</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>You'll rarely find someone who knows Tahmidul personally and dislikes him. He'll always have
                            a new warm gesture and a smile to greet you with every time you come across him. I've had
                            the privilege of debating alongside him on several occasions, and I can only recall
                            wholesome experiences. He was driven by his love for the sport, obsessed with how it refined
                            his thoughts and opinions rather than solely focusing on being the best at it.
                            <br>– Vubon Chowdhury</p>
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
                     data-setbg="/img/alumniImage/48_Senior_Executive_Zarrin_Tasnim_16.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Zarrin Tasnim</h5>
                            <span class="batch-font">IUT 16</span>
                        </div>
                        <p>ZT is the first person with whom I started my IUTDS journey. Debating was her passion. She
                            always used to say, "We have to do our best in debating so that people will recognize IUTDS
                            more." She tried to contribute to IUTDS as much as she could. No matter how many
                            difficulties she faced in her life, she always tried to handle them professionally. I have
                            always seen her setting examples for her batchmates, juniors, and in some cases, for seniors
                            also. All the best wishes for her because she deserves it, she earned it.
                            <br>– Raisa Labiba Khan</p>
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
                <a href="{{route('our-alumni')}}" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li class="page-item "><a class="page-link" href="{{route('our-alumni')}}">1</a></li>
            <li class="page-item active"><a class="page-link" href="{{route('our-alumni-second')}}">2</a></li>
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
