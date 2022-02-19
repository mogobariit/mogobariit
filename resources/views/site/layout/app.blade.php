<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Mogobari it</title>
    <link rel="shortcut icon" href="{{asset('site')}}/assets/img/img/unnamed.png" type="image/x-icon">

    <script src="{{asset('site')}}/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap"
        rel="stylesheet">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- <link rel="stylesheet" href="{{asset('site')}}/assets/css/style.css"> -->
    <!-- ===============================================-->

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/coustom.css')}}">
    <link rel="stylesheet" href="{{asset('site')}}/assets/css/slick-theme.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap"
        rel="stylesheet">
</head>

<body style="background-color: #e6e7e8;">

    <div class="bg-dark py-1 d-none d-sm-block text-white fw-bold">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-auto d-none d-lg-block fs--1"><span class="fas fa-map-marker-alt text-white me-2"
                        data-fa-transform="grow-3"></span>Ka-119/A ,Kuril, Vatara ,Dhaka-1229 </div>
                <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center"><span
                        class="far fa-envelope text-white me-2" data-fa-transform="grow-3"></span>mogobaribd@gmail.com
                </div>
                <div class="col-auto px-lg-11 px-11  me-auto"><span class="fas fa-phone-alt text-white"
                        data-fa-transform="shrink-3"></span>
                    <a class="ms-2 fs--1 text-white fw-bold py-11" href="tel:0188665161"> Hotline : 0188665161 </a>
                </div>

            </div>
        </div>
    </div>
    <div class="sticky-top navbar-elixir z-index-2">

        <nav class="navbar navbar-expand-lg bg-white w-100">
            <div class="container">
                <a class="navbar-brand" href="{{route('/')}}"><img height="55px"
                        src="{{asset('site')}}/assets/img/img/mogobari it logo.png" alt="logo" /></a><button
                    class="navbar-toggler p-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="hamburger hamburger--emphatic"><span
                            class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
                <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
                    <ul class="navbar-nav me-auto py-3 py-lg-0 mb-2 my-lg-0 ms-lg-n1">
                        <li class="nav-item dropdown hover-bg-200"><a class="nav-link" href="{{route('/')}}"
                                role="button">Home</a>
                        </li>
                        <li class="nav-item dropdown hover-bg-200"><a
                                class="nav-link dropdown-toggle dropdown-indicator" href="{{route('domain-register')}}"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Domain</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item hover-bg-200" href="{{route('domain-register')}}"><i
                                            class="fas fa-city size"></i>Domain
                                        Register</a></li>

                                <li><a class="dropdown-item hover-bg-200" href=""><i
                                            class="fas fa-window-restore size"></i>Domain Transfer</a></li>


                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-bg-200"><a
                                class="nav-link dropdown-toggle dropdown-indicator" href="" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Hosting</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item hover-bg-200" href="{{route('vpshosting')}}"><i
                                            class="fas fa-retweet size"></i>VPS
                                        Hosting</a></li>

                                <li><a class="dropdown-item hover-bg-200" href="{{route('shearheosting')}}"><i
                                            class="fas fa-envelope-open-text size"></i>Sheare Hosting</a></li>

                                <li><a class="dropdown-item hover-bg-200" href=""><i
                                            class="fab fa-slideshare size"></i>Cloud Hosting</a></li>
                                <li><a class="dropdown-item hover-bg-200" href=""><i
                                            class="far fa-window-maximize size"></i>Windows Hosting</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-indicator" href="" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li class="">
                                    <a class="dropdown-item hover-bg-200" href="# "><i
                                            class="fas fa-archive size"></i>Digital Marketing</a>
                                </li>

                                <li>
                                    <a class="dropdown-item hover-bg-200" href="# "><i
                                            class="fas fa-atom size"></i>Grapic Desing</a>
                                </li>

                                <li>
                                    <a class="dropdown-item hover-bg-200" href="# "><i class="fas fa-code size"></i>Web
                                        Desing</a>
                                </li>
                                <li><a class="dropdown-item hover-bg-200" href="# "><i
                                            class="fas fa-adjust size"></i>Web Development</a></li>
                                <li><a class="dropdown-item hover-bg-200" href="# "><i class="fas fa-phone size"></i>App
                                        Development</a></li>
                                <li>
                                    <a class="dropdown-item hover-bg-200 " href="# "> <i
                                            class="fas fa-poll size"></i>UI/UX Design</a>
                                </li>
                                <li>

                                    <a class="dropdown-item hover-bg-200" href="# "><i class="fas fa-caret-up size"></i>
                                        Motion Graphic 2D/D3</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-bg-200">
                            <a class="nav-link dropdown-toggle dropdown-indicator" href="" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Cources</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item hover-bg-200" href="# "><i
                                            class="fas fa-archive size"></i>Digital Marketing</a>
                                </li>
                                <li>
                                    <a class="dropdown-item hover-bg-200" href="# "><i
                                            class="fas fa-atom size"></i>Grapic Desing</a>
                                </li>

                                <li>
                                    <a class="dropdown-item hover-bg-200" href="# "><i class="fas fa-code size"></i>Web
                                        Desing</a>
                                </li>
                                <li><a class="dropdown-item hover-bg-200" href="# "><i class="fas fa-poll size"></i>Web
                                        Development</a></li>
                                <li><a class="dropdown-item hover-bg-200" href="# "><i
                                            class="fab fa-android size"></i>App Development</a></li>
                                <li>
                                    <a class="dropdown-item hover-bg-200" href="# "> <i
                                            class="fas fa-play size"></i>Video Editing</a>
                                </li>
                                <li>
                                    <a class="dropdown-item hover-bg-200" href="# "> <i
                                            class="fas fa-poll size"></i>Office Program</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown hover-bg-200">
                            <a class="nav-link " href=" " role="button ">Project</a>
                        </li>
                        <li class="nav-item dropdown hover-bg-200"><a class="nav-link " href="{{route('contactpage')}}"
                                role="button ">Contact</a></li>
                    </ul>
                    <a class="btn btn-outline-success btn-dark text-white rounded-pill btn-sm border-1 d-block d-lg-inline-block ms-auto my-3 my-lg-0"
                        href="" target="_blank ">Sign Up </a>
                </div>
        </nav>
    </div>
    </div>
    </div>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main " id="top ">
        @yield('site-cotentn')
        <!-- end of .container-->
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->





    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <footer style="background-color: #424344 " class="mt-3">
        <div class="container align-items-center ">
            <div class="row align-items-center ">
                <div class="col-lg-3 col-6 col-sm-6">
                    <div class="footer-logo">
                        <img src="./assets/img/img/mogobari it logo-01.png" class="img-fluid " height="55px" alt="">
                        <p class="mt-1 fs--12 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic,
                            facilis ea, perspiciatis consequatur inventore mollitia quod dolor, distinctio nostrum ex
                            sed libero corrupti quia illo aliquam architecto eos velit dignissimos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-sm-6 align-items-center">
                    <h4 class=" text-white mt-5">Services</h4>
                    <ul class="list-unstyled text-center">
                        <li class="mb-2"><a class=" text-white fs--12 lh-1 " href=" ">Contact Us</a></li>
                        <li class="mb-2"><a class="text-white fs--12 lh-1" href="#! ">Our Office</a></li>
                        <li class="mb-2"><a class=" text-white fs--12 lh-1 " href="#! ">FAQ</a></li>
                        <li class="mb-2"><a class="text-white fs--12 lh-1" href="#! ">Privacy Policy</a></li>
                        <li class="mb-2"><a class=" text-white fs--12 lh-1 " href="#! ">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 col-sm-6 ">
                    <h4 class=" text-white mt-5">Usefull Link</h4>
                    <ul class="list-unstyled text-center">
                        <li class="mb-2"><a class="text-white fs--12 lh-1 " href=" ">Contact Us</a></li>
                        <li class="mb-2"><a class="text-white fs--12 lh-1" href="#! ">Our Office</a></li>
                        <li class="mb-2"><a class="text-white fs--12 lh-1 " href="#! ">FAQ</a></li>
                        <li class="mb-2"><a class="text-white fs--12 lh-1" href="#! ">Privacy Policy</a></li>
                        <li class="mb-2"><a class="text-white fs--12 lh-1 " href="#! ">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 col-sm-6 ">
                    <h4 class=" text-white mt-5">Contact</h4>
                    <ul class="list-unstyled text-center">
                        <li class="mb-2"><a class="text-white fs--12 lh-1" href="tel:0188665161"><i
                                    class="fas fa-phone size"></i>0188665161</a></li>
                        <li class="mb-2">
                            <a class=" text-white fs--12 lh-1 " href="tel:0188665162 "><i
                                    class="fas fa-phone size "></i>0188665162</a>
                        </li>
                        <li class="mb-2 ">
                            <a class="text-white fs--12 lh-1 " href="#! "><i
                                    class="far fa-envelope me-2 "></i>mogobaribd@gmail.com</a>
                        </li>
                        <li class="mb-2 ">
                            <h5 class="text-white ">Follow Us</h5>
                        </li>
                        <a href=" " class="ml-1"><i class="fab fa-facebook-square "></i></a>
                        <a href=" "><i class="fab fa-twitter "></i></a>
                        <a href=" "><i class="fab fa-google-plus-g "></i></i></a>
                        <a href=" "><i class="fab fa-linkedin "></i></i></a>
                        <a href=" "><i class="fab fa-instagram-square "></i></i></a>
                    </ul>
                </div>


            </div>
        </div>
        </div>
        <!-- end of .container-->
    </footer>
    <!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- ============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="{{asset('site')}}/assets/js/jquery-3.6.0.min.js ">
    </script>
    <script src="{{asset('site/assets/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="./assets/js/script.js "></script>

    <script src="{{asset('site')}}/assets/js/slick.min.js "></script>
    <script src="{{asset('site')}}/assets/js/myjs.js "></script>
    <script src="{{asset('site')}}/vendors/popper/popper.min.js "></script>
    <script src="{{asset('site')}}/vendors/bootstrap/bootstrap.min.js "></script>
    <script src="{{asset('site')}}/vendors/is/is.min.js "></script>
    <script src="{{asset('site')}}/vendors/bigpicture/BigPicture.js ">
    </script>
    <script src="{{asset('site')}}/vendors/countup/countUp.umd.js ">
    </script>
    <script src="{{asset('site')}}/assets/js/progresscircle.js ">
    </script>
    <script src="{{asset('site')}}/vendors/swiper/swiper-bundle.min.js "></script>
    <script src="{{asset('site')}}/vendors/fontawesome/all.min.js "></script>
    <script src="{{asset('site')}}/vendors/lodash/lodash.min.js "></script>
    <script src="{{asset('site')}}/vendors/imagesloaded/imagesloaded.pkgd.min.js ">
    </script>
    <script src="{{asset('site')}}/vendors/gsap/gsap.js "></script>
    <script src="{{asset('site')}}/vendors/gsap/customEase.js "></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('site')}}/assets/js/theme.js "></script>

    <script>
    $('.circlechart').circlechart(); // Initialization
    </script>
    <script type="text/javascript ">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
                'http://www') +
            '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })(); <
    /s
    cript >
        <
        /body>

        <
        /html>




        <
        /html>