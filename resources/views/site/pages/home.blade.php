@extends('site.layout.app')
@section('site-cotentn')
<div class="swiper theme-slider min-vh-90 "
    data-swiper='{"loop ":true,"allowTouchMove ":false,"autoplay ":{"delay ":5000},"effect ":"fade ","speed ":800}'>
    <div class="swiper-wrapper ">
        <div class="swiper-slide " data-zanim-timeline="{} ">
            <div class="bg-holder">
                <img src="{{asset('site/assets/img/background-1.jpg')}}" alt="" class="img-fluid">
            </div>
            <!--/.bg-holder-->
            <div class="container ">
                <div class="row min-vh-90 py-8 align-items-center " data-inertia='{"weight ":1.5}'>
                    <div class="col-sm-8 col-lg-7 px-5 px-sm-3 ">
                        <div class="overflow-hidden ">
                            <h1 class="fs-4 fs-md-5 lh-1 text-white " data-zanim-xs='{"delay ":0}'>Helping
                                Leaders
                            </h1>
                        </div>
                        <div class="overflow-hidden ">
                            <p class="text-dark pt-4 mb-5 fs-1 fs-md-2 lh-xs " data-zanim-xs='{"delay ":0.1}'>We
                                look forward to help you in taking your company to new height.</p>
                        </div>
                        <div class="overflow-hidden ">
                            <div data-zanim-xs='{"delay ":0.2}'><a
                                    class="btn btn-dark me-3 mt-3  btn-outline-success text-white" href="# ">Read
                                    more<span class="fas fa-chevron-right ms-2 "></span></a><a
                                    class="btn btn-success btn-outline-dark text-white mt-3 " href="
                                            ">Contact us<span class="fas fa-chevron-right ms-2 "></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide " data-zanim-timeline="{} ">
            <div class="bg-holder " style="background-image:url({{asset('site')}}/assets/img/header-5.jpg); "></div>
            <!--/.bg-holder-->
            <div class="container ">
                <div class="row min-vh-90 py-8 align-items-center " data-inertia='{"weight ":1.5}'>
                    <div class="col-sm-8 col-lg-7 px-5 px-sm-3 ">
                        <div class="overflow-hidden ">
                            <h1 class="fs-4 fs-md-5 lh-1 " data-zanim-xs='{"delay ":0}'>Expert Consultants
                            </h1>
                        </div>
                        <div class="overflow-hidden ">
                            <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs " data-zanim-xs='{"delay ":0.1}'>Over 10
                                years of experience in helping clients
                                finding comprehensive solutions.</p>
                        </div>
                        <div class="overflow-hidden ">
                            <div data-zanim-xs='{"delay ":0.2}'><a class="btn btn-primary me-3 mt-3 " href="#! ">Read
                                    more<span class="fas fa-chevron-right ms-2 "></span></a><a
                                    class="btn btn-warning mt-3 " href="contact.html
                                            ">Contact us<span class="fas fa-chevron-right ms-2 "></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide " data-zanim-timeline="{} ">
            <div class="bg-holder " style="background-image:url({{asset('site')}}/assets/img/header-1.jpg); "></div>
            <!--/.bg-holder-->
            <div class="container ">
                <div class="row min-vh-90 py-8 align-items-center " data-inertia='{"weight ":1.5}'>
                    <div class="col-sm-8 col-lg-7 px-5 px-sm-3 ">
                        <div class="overflow-hidden ">
                            <h1 class="fs-4 fs-md-5 lh-1 " data-zanim-xs='{"delay ":0}'>Growth Partners</h1>
                        </div>
                        <div class="overflow-hidden ">
                            <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs " data-zanim-xs='{"delay ":0.1}'>Connect
                                with top consultants hand-picked by
                                Elixir consulting and finance.</p>
                        </div>
                        <div class="overflow-hidden ">
                            <div data-zanim-xs='{"delay ":0.2}'><a class="btn btn-primary me-3 mt-3 " href="#! ">See
                                    more<span class="fas fa-chevron-right ms-2 "></span></a><a
                                    class="btn btn-warning mt-3 " href="contact.html
                                            ">Contact us<span class="fas fa-chevron-right ms-2 "></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-nav ">
        <div class="swiper-button-prev "><span class="fas fa-chevron-left "></span></div>
        <div class="swiper-button-next "><span class="fas fa-chevron-right "></span></div>
    </div>
</div>




<!-- ============================================-->
<!-- ============================================-->
<!-- <section> begin ============================-->

<div class="container mt-4">
    <div class="text-center mb-3 ">
        <h3 class="fs-2 fs-md-3 ">Our Portfolio</h3>
        <hr class="short "
            data-zanim-xs='{"from ":{"opacity ":0,"width ":0},"to ":{"opacity ":1,"width ":"4.20873rem "},"duration ":0.8}'
            data-zanim-trigger="scroll " />
    </div>

    <div class="row g-0  position-relative mb-4 mb-lg-0 mt-4">
        <div
            class="col-lg-3box hover-areas  px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-3    rounded-be-lg rounded-lg-be-3 rounded-lg-te-lg shadow mlbox rounded-3 hover-bg-200">
            <div class="d-flex align-items-center h-100  ">
                <div data-zanim-timeline="{} " data-zanim-trigger="scroll ">
                    <div class="overflow-hidden ml-2 mb-2 icon">
                        <img src="./assets/img/icon/computer.png" alt="" srcset="" width="120px" class="img-fuild ml-2">
                    </div>
                    <div class="overflow-hidden ">
                        <h5 class="text-center"> Our Business</h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mt-3 fs--12">As one of the world’s largest accountancy networks, elixir helps
                            a diverse range of clients with a diverse range of needs.This is especially true of
                            our Advisory Practice, which provides corporate finance and transaction
                            services, business restructuring.</p>
                    </div>
                    <div class="overflow-hidden ">
                        <div><a class="d-flex align-items-center " href="#! ">See
                                More<div class="overflow-hidden ms-2 "><span class="d-inline-block ">&xrarr;</span>
                                </div></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="col-lg-3box hover-areas  px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-3 rounded-be-lg rounded-lg-be-3 rounded-lg-te-lg shadow mlbox rounded-3">
            <div class="elixir-caret d-none d-lg-block "></div>
            <div class="d-flex align-items-center h-100 ">
                <div>
                    <div class="overflow-hidden ml-2 mb-2 ">
                        <img src="./assets/img/icon/consulting-services.png" alt="" srcset="" width="120px"
                            class="img-fuild ml-2">
                    </div>
                    <div class="overflow-hidden ">
                        <h5 class="text-center">Our Service</h5>
                    </div>
                    <div class="overflow-hidden ">
                        <p class="mt-3 fs--12 ">As one of the worlds largest accountancy networks, elixir helps
                            a diverse range of clients with a diverse range of needs.This is especially true of
                            our Advisory Practice, which provides corporate finance and transaction
                            services, business restructuring.</p>
                    </div>
                    <div class="overflow-hidden ">
                        <div data-zanim-xs='{ "delay ":0.2} '><a class="d-flex align-items-center " href="#! ">See
                                More<div class="overflow-hidden ms-2 "><span class="d-inline-block " data-zanim-xs='{ "from ":{ "opacity ":0, "x ":-30}, "to
                                    ":{ "opacity ":1, "x ":0}, "delay ":0.8} '>&xrarr;</span></div></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="col-lg-3box hover-areas px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-3 rounded-be-lg rounded-lg-be-3 rounded-lg-te-lg shadow mlbox rounded-3">
            <div class="elixir-caret d-none d-lg-block "></div>
            <div class="d-flex align-items-center h-100 ">
                <div data-zanim-timeline="{} " data-zanim-trigger="scroll ">
                    <div class="overflow-hidden ml-2 mb-2">
                        <img src="./assets/img/icon/education.png" alt="" width="120px" class="img-fluid ml-2">
                    </div>
                    <div class="overflow-hidden ">
                        <h5 data-zanim-xs='{ "delay ":0} ' class="text-center">Our Course</h5>
                    </div>
                    <div class="overflow-hidden ">
                        <p class="mt-3 fs--12" data-zanim-xs='{ "delay ":0.1} '>As one of the world’s largest
                            accountancy networks, elixir helps a diverse range of clients with a diverse range
                            of needs.This is especially true of our Advisory Practice, which provides corporate
                            finance and transaction
                            services, business restructuring.</p>
                    </div>
                    <div class="overflow-hidden ">
                        <div data-zanim-xs='{ "delay ":0.2} '><a class="d-flex align-items-center " href="#! ">See
                                More<div class="overflow-hidden ms-2 "><span class="d-inline-block " data-zanim-xs='{ "from ":{ "opacity ":0, "x ":-30}, "to
                                        ":{ "opacity ":1, "x ":0}, "delay ":0.8} '>&xrarr;</span></div></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of .container-->

<!-- <section> close ============================-->
<!-- ============================================-->

<div class="container mt-4">
    <div class="row justify-content-center text-center ">
        <div class="col-10 col-md-6 ">
            <h3 class="fs-2 fs-lg-3 ">Our Services</h3>
            <p class="px-lg-4 mt-3 ">Get expert consultancy and support with Elixir, an advisory firm that stand
                by your side always.</p>
            <hr class="short "
                data-zanim-xs='{ "from ":{ "opacity ":0, "width ":0}, "to ":{ "opacity ":1, "width ": "4.20873rem "}, "duration ":0.8} '
                data-zanim-trigger="scroll " />
        </div>
    </div>
    <div class="row justify-content-center text-center responsive">
        <div class="col-sm-6 col-lg-3 mt-4 col-6 ml-1" data-zanim-timeline="{} " data-zanim-trigger="scroll ">
            <div class="ring-icon mx-auto shadow  icon-width" data-zanim-xs='{ "delay ":0} '><span
                    class="far fa-chart-bar "></span></div>
            <h5 class="mt-4 align-items-center px-2 ml-1 fs-1" data-zanim-xs='{ "delay ":0.1} '>Digital
                Marketing
            </h5>
            <p class="mb-0 mt-3 px-2 align-items-center ml-1 fs--1" data-zanim-xs='{ "delay ":0.2} '>
                Solution for every business related problems, readily and skillfully.</p>
        </div>
        <div class="col-sm-6 col-lg-3 mt-4 col-6 ml-1" data-zanim-timeline="{} " data-zanim-trigger="scroll ">
            <div class="ring-icon mx-auto shadow  icon-width" data-zanim-xs='{ "delay ":0} '><span
                    class="far fa-chart-bar "></span></div>
            <h5 class="mt-4 align-items-center px-2 ml-1 fs-1" data-zanim-xs='{ "delay ":0.1} '>Digital
                Marketing
            </h5>
            <p class="mb-0 mt-3 px-2 align-items-center ml-1 fs--1" data-zanim-xs='{ "delay ":0.2} '>
                Solution for every business related problems, readily and skillfully.</p>
        </div>
        <div class="col-sm-6 col-lg-3 mt-4 col-6 ml-1" data-zanim-timeline="{} " data-zanim-trigger="scroll ">
            <div class="ring-icon mx-auto shadow  icon-width" data-zanim-xs='{ "delay ":0} '><span
                    class="far fa-chart-bar "></span></div>
            <h5 class="mt-4 align-items-center px-2 ml-1 fs-1" data-zanim-xs='{ "delay ":0.1} '>Digital
                Marketing
            </h5>
            <p class="mb-0 mt-3 px-2 align-items-center ml-1 fs--1" data-zanim-xs='{ "delay ":0.2} '>
                Solution for every business related problems, readily and skillfully.</p>
        </div>
        <div class="col-sm-6 col-lg-3 col-6 mt-4  ml-1" data-zanim-timeline="{} " data-zanim-trigger="scroll ">
            <div class="ring-icon mx-auto shadow  icon-width" data-zanim-xs='{ "delay ":0} '><span
                    class="far fa-chart-bar "></span></div>
            <h5 class="mt-4 align-items-center px-2 ml-1 fs-1" data-zanim-xs='{ "delay ":0.1} '>Digital
                Marketing
            </h5>
            <p class="mb-0 mt-3 px-2 align-items-center ml-1 fs--1" data-zanim-xs='{ "delay ":0.2} '>
                Solution for every business related problems, readily and skillfully.</p>
        </div>
        <div class="col-sm-6 col-lg-3 col-6 mt-4  ml-1" data-zanim-timeline="{} " data-zanim-trigger="scroll ">
            <div class="ring-icon mx-auto shadow  icon-width" data-zanim-xs='{ "delay ":0} '><span
                    class="far fa-chart-bar "></span></div>
            <h5 class="mt-4 align-items-center px-2 ml-1 fs-1" data-zanim-xs='{ "delay ":0.1} '>Digital
                Marketing
            </h5>
            <p class="mb-0 mt-3 px-2 align-items-center ml-1 fs--1" data-zanim-xs='{ "delay ":0.2} '>
                Solution for every business related problems, readily and skillfully.</p>
        </div>
        <div class="col-sm-6 col-lg-3 mt-4 col-6  ml-1" data-zanim-timeline="{} " data-zanim-trigger="scroll ">
            <div class="ring-icon mx-auto shadow  icon-width" data-zanim-xs='{ "delay ":0} '><span
                    class="far fa-chart-bar "></span></div>
            <h5 class="mt-4 align-items-center px-2 ml-1 fs-1" data-zanim-xs='{ "delay ":0.1} '>Digital
                Marketing
            </h5>
            <p class="mb-0 mt-3 px-2 align-items-center ml-1 fs--1" data-zanim-xs='{ "delay ":0.2} '>
                Solution for every business related problems, readily and skillfully.</p>
        </div>
        <div class="col-sm-6 col-lg-3 mt-4 col-6 ml-1" data-zanim-timeline="{} " data-zanim-trigger="scroll ">
            <div class="ring-icon mx-auto shadow  icon-width" data-zanim-xs='{ "delay ":0} '><span
                    class="far fa-chart-bar "></span></div>
            <h5 class="mt-4 align-items-center px-2 ml-1 fs-1" data-zanim-xs='{ "delay ":0.1} '>Digital
                Marketing
            </h5>
            <p class="mb-0 mt-3 px-2 align-items-center ml-1 fs--1" data-zanim-xs='{ "delay ":0.2} '>
                Solution for every business related problems, readily and skillfully.</p>
        </div>
        <div class="col-sm-6 col-lg-3 mt-4 col-6 ml-1" data-zanim-timeline="{} " data-zanim-trigger="scroll ">
            <div class="ring-icon mx-auto shadow  icon-width" data-zanim-xs='{ "delay ":0} '><span
                    class="far fa-chart-bar "></span></div>
            <h5 class="mt-4 align-items-center px-2 ml-1 fs-1" data-zanim-xs='{ "delay ":0.1} '>Digital
                Marketing
            </h5>
            <p class="mb-0 mt-3 px-2 align-items-center ml-1 fs--1" data-zanim-xs='{ "delay ":0.2} '>
                Solution for every business related problems, readily and skillfully.</p>
        </div>
    </div>
</div>



<!-- <section> close ============================-->
<!--============================================-->



<!-- ============================================-->
<!-- <section> begin ============================-->

<div class="container mt-8 ">
    <div class="row flex-center text-center">
        <div class="col-12 shadow">
            <!--/.bg-holder-->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="480" src="https://www.youtube.com/embed/up2Iw07y-fA"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- <section> begin ============================-->


<div class="container mt-4">
    <div class="row justify-content-center text-center ">
        <div class="col-10 col-md-6 ">
            <h3 class="fs-2 fs-lg-3 ">Our Cuorse</h3>
            <hr class="short "
                data-zanim-xs='{ "from ":{ "opacity ":0, "width ":0}, "to ":{ "opacity ":1, "width ": "4.20873rem "}, "duration ":0.8} '
                data-zanim-trigger="scroll " />
            <p class="px-lg-4 mt-3 ">Get expert consultancy and support with Elixir, an advisory firm that stand
                by your side always.</p>

        </div>
    </div>

    <div class=" height-400 overflow-hidden">
        <div class="row justify-content-center text-center overflow-hidden responsives">
            <div class="col-sm-4 col-6 col-lg-3 mt-4  shadow rounded-3 bg-white hover-area ml-1"
                data-zanim-timeline="{} " data-zanim-trigger="scroll ">
                <div class="ring-icon mx-auto shadow icon-width" data-zanim-xs='{ "delay ":0} '><span
                        class="far fa-chart-bar "></span></div>
                <h5 class="mt-4 align-items-center px-2 ml-1" data-zanim-xs='{ "delay ":0.1} '>Digital Marketing
                </h5>
                <p class="mb-0 mt-3 px-2 align-items-center ml-1" data-zanim-xs='{ "delay ":0.2} '>
                    Solution for every business related problems, readily and skillfully.</p>
            </div>
            <div class="col-sm-4 col-6  col-lg-3 mt-4 shadow rounded-3 ml-1 bg-white hover-area overflow-hidden"
                data-zanim-timeline="{} " data-zanim-trigger="scroll ">
                <div class="ring-icon mx-auto shadow icon-width" data-zanim-xs='{ "delay ":0} '><span
                        class="far fa-bell "></span>
                </div>
                <h5 class="mt-4 align-items-center px-2 ml-1" data-zanim-xs='{ "delay ":0.1} '>Risk Management
                </h5>
                <p class="mb-0 mt-3 px-2 align-items-center ml-1 " data-zanim-xs='{ "delay ":0.2} '>
                    Calculate every possible risk in your business, take control over them.</p>
            </div>
            <div class="col-sm-4 col-6 col-lg-3 mt-4 shadow rounded-3 ml-1 bg-white hover-area overflow-hidden"
                data-zanim-timeline="{} " data-zanim-trigger="scroll ">
                <div class="ring-icon mx-auto shadow icon-width" data-zanim-xs='{ "delay ":0} '><span
                        class="far fa-lightbulb "></span></div>
                <h5 class="mt-4 align-items-center px-2 ml-1 " data-zanim-xs='{ "delay ":0.1} '>Market Research
                </h5>
                <p class="mb-0 mt-3 px-2 align-items-center ml-1 " data-zanim-xs='{ "delay ":0.2} '>Know the
                    market before taking any step, reduce risks before you go.
                </p>
            </div>
            <div class="col-sm-4 col-6 col-lg-3 mt-4 shadow rounded-3 ml-1 bg-white hover-area overflow-hidden"
                data-zanim-timeline="{} " data-zanim-trigger="scroll ">
                <div class="ring-icon mx-auto shadow icon-width" data-zanim-xs='{ "delay ":0} '><span
                        class="far fa-lightbulb "></span></div>
                <h5 class="mt-4 align-items-center px-2 ml-1 " data-zanim-xs='{ "delay ":0.1} '>Market Research
                </h5>
                <p class="mb-0 mt-3 px-2 align-items-center ml-1 " data-zanim-xs='{ "delay ":0.2} '>Know the
                    market before taking any step, reduce risks before you go.
                </p>
            </div>
            <div class="col-sm-4 col-6 col-lg-3 mt-4 shadow rounded-3 ml-1 bg-white hover-area overflow-hidden"
                data-zanim-timeline="{} " data-zanim-trigger="scroll ">
                <div class="ring-icon mx-auto shadow icon-width" data-zanim-xs='{ "delay ":0} '><span
                        class="far fa-chart-bar "></span></div>
                <h5 class="mt-4 align-items-center px-2 ml-1" data-zanim-xs='{ "delay ":0.1} '>Digital Marketing
                </h5>
                <p class="mb-0 mt-3 px-2 align-items-center ml-1" data-zanim-xs='{ "delay ":0.2} '>
                    Solution for every business related problems, readily and skillfully.</p>
            </div>


            <div class="col-sm-4 col-6 col-lg-3 mt-4 shadow rounded-3 ml-1 bg-white hover-area overflow-hidden"
                data-zanim-timeline="{} " data-zanim-trigger="scroll ">
                <div class="ring-icon mx-auto shadow icon-width" data-zanim-xs='{ "delay ":0} '><span
                        class="far fa-chart-bar "></span></div>
                <h5 class="mt-4 align-items-center px-2 ml-1" data-zanim-xs='{ "delay ":0.1} '>Digital Marketing
                </h5>
                <p class="mb-0 mt-3 px-2 align-items-center ml-1" data-zanim-xs='{ "delay ":0.2} '>
                    Solution for every business related problems, readily and skillfully.</p>
            </div>
            <div class="col-sm-4 col-6 col-lg-3 mt-4 shadow rounded-3 ml-1 bg-white hover-area overflow-hidden"
                data-zanim-timeline="{} " data-zanim-trigger="scroll ">
                <div class="ring-icon mx-auto shadow icon-width" data-zanim-xs='{ "delay ":0} '><span
                        class="far fa-bell "></span>
                </div>
                <h5 class="mt-4 align-items-center px-2 ml-1" data-zanim-xs='{ "delay ":0.1} '>Risk Management
                </h5>
                <p class="mb-0 mt-3 px-2 align-items-center ml-1 " data-zanim-xs='{ "delay ":0.2} '>
                    Calculate every possible risk in your business, take control over them.</p>
            </div>
            <div class="col-sm-4 col-6 col-lg-3 mt-4 shadow rounded-3 ml-1 bg-white hover-area overflow-hidden"
                data-zanim-timeline="{} " data-zanim-trigger="scroll ">
                <div class="ring-icon mx-auto shadow icon-width" data-zanim-xs='{ "delay ":0} '><span
                        class="far fa-lightbulb "></span></div>
                <h5 class="mt-4 align-items-center px-2 ml-1 " data-zanim-xs='{ "delay ":0.1} '>Market Research
                </h5>
                <p class="mb-0 mt-3 px-2 align-items-center ml-1 " data-zanim-xs='{ "delay ":0.2} '>Know the
                    market before taking any step, reduce risks before you go.
                </p>
            </div>
        </div>


    </div>
</div>

<!-- end of .container-->

<div class="container mt-4 overflow-hidden">
    <div class="text-center mb-5 ">
        <h3 class="fs-2 fs-md-3 ">Why Choose Mogobari It</h3>
        <hr class="short "
            data-zanim-xs='{ "from ":{ "opacity ":0, "width ":0}, "to ":{ "opacity ":1, "width ": "4.20873rem "}, "duration ":0.8} '
            data-zanim-trigger="scroll " />
    </div>
    <div class="row overflow-hidden ">
        <div class="col-lg-6 col-md-6 col-12 col-sm-12 pe-lg-3 ">
            <img class="rounded-3 img-fluid " src="{{asset('site')}}/assets/img/why-choose-us.jpg" alt="about" />
        </div>
        <div class="col-lg-6 col-md-6 col-12 col-sm-12 px-lg-5 mt-6 mt-lg-0 " data-zanim-timeline="{} "
            data-zanim-trigger="scroll ">
            <div class="overflow-hidden ">
                <div class="px-4 px-sm-0 " data-zanim-xs='{ "delay ":0} '>
                    <h5 class="fs-0 fs-lg-1 "><span class="fas fa-laptop-code me-2 "
                            data-fa-transform="flip-h "></span>We Are Professional</h5>
                    <p class="mt-3 ">We resource, train, speak, mentor and encourage; marketplace leaders,
                        business owners and career professionals to be effective in the workplace.</p>
                </div>
            </div>
            <div class="overflow-hidden ">
                <div class="px-4 px-sm-0 mt-5 " data-zanim-xs='{ "delay ":0} '>
                    <h5 class="fs-0 fs-lg-1 "><span class="fas fa-code fs-1 me-2 "
                            data-fa-transform="shrink-1 "></span>We Are Creative</h5>
                    <p class="mt-3 ">With so many factors to consider when deciding how to characterize your
                        company , wouldn’t it be great to have a group of forward-thinking, well-informed
                        individuals on board who know what they’re doing?</p>
                </div>
            </div>
            <div class="overflow-hidden ">
                <div class="px-4 px-sm-0 mt-5 " data-zanim-xs='{ "delay ":0} '>
                    <h5 class="fs-0 fs-lg-1 "><span class="fas fa-stopwatch fs-1 me-2 "
                            data-fa-transform="grow-1 "></span>24/7 Great Support</h5>
                    <p class="mt-3 ">Design clever and compelling marketing strategies, improve product
                        positioning, and drive conversion rates, Elixir is all time available to guide you.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- skill start-->
<div class="container ">
    <div class="text-center  ">
        <h3 class="fs-2 fs-md-3 ">Skills</h3>
        <hr class="short "
            data-zanim-xs='{ "from ":{ "opacity ":0, "width ":0}, "to ":{ "opacity ":1, "width ": "4.20873rem "}, "duration ":0.8} '
            data-zanim-trigger="scroll " />
    </div>
    <div class="progressbar">
        <div id="demo" class="d-flex justify-content-between mt-3 ">
            <div class="circlechart m-3" data-percentage="85">Web Design</div>
            <div class="circlechart m-3" data-percentage="85">Web Development</div>
            <div class="circlechart m-3" data-percentage="-10">D Marketing</div>
            <div class="circlechart m-3" data-percentage="85">Branding</div>
            <div class="circlechart m-3" data-percentage="65">Video Editimg</div>
            <div class="circlechart m-3" data-percentage="45">App Developent</div>
        </div>
    </div>

</div>


<div class="container ">
    <div class="text-center  ">
        <h3 class="fs-2 fs-md-3 ">Our Client </h3>
        <hr class="short "
            data-zanim-xs='{ "from ":{ "opacity ":0, "width ":0}, "to ":{ "opacity ":1, "width ": "4.20873rem "}, "duration ":0.8} '
            data-zanim-trigger="scroll " />
    </div>

    <!-- skill end-->
    <div class="partner mt-4">
        <div class="row client">
            <div class="col-md-6 col-lg-3 col-sm-6 col-6">
                <div class="border-img ">
                    <img src="{{asset('site')}}/assets/img/partner/download (7).png " alt=" " class=" ">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-6 ">
                <div class="border-img ">
                    <img src="{{asset('site')}}/assets/img/partner/download (2).png " alt=" " class=" ">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-6 ">
                <div class="border-img ">
                    <img src="{{asset('site')}}/assets/img/partner/download (3).png " alt=" " class=" ">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-6  ">
                <div class="border-img ">
                    <img src="{{asset('site')}}/assets/img/partner/download (7).png " alt=" " class=" ">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-6  ">
                <div class="border-img ">
                    <img src="{{asset('site')}}/assets/img/partner/download (7).png " alt=" " class=" ">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-6  ">
                <div class="border-img ">
                    <img src="{{asset('site')}}/assets/img/partner/download (7).png " alt=" " class=" ">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-6  ">
                <div class="border-img ">
                    <img src="{{asset('site')}}/assets/img/partner/download (7).png " alt=" " class=" ">
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="text-center  ">
        <h3 class="fs-2 fs-md-3 ">Contact Us</h3>
        <hr class="short "
            data-zanim-xs='{ "from ":{ "opacity ":0, "width ":0}, "to ":{ "opacity ":1, "width ": "4.20873rem "}, "duration ":0.8} '
            data-zanim-trigger="scroll " />
    </div>
    <div class="row align-items-center text-white ">
        <div class="col-lg-8 col-md-6 ">
            <h5 class="text-dark text-center mt-5 mb-3
                     ">Our Location</h5> <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.9437050172774!2d90.4190062143498!3d23.820600792009273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72909a75517%3A0xb0fcd1ba87b00bd7!2sMogobari%20Online%20Shop%20%26%20Service%20in%20Bangladesh!5e0!3m2!1sen!2sbd!4v1644133083760!5m2!1sen!2sbd "
                width="100% " height="400 " style="border:0; " allowfullscreen=" " loading="lazy "
                class="mt-4 border-2"></iframe>


        </div>
        <div class="col-lg-4 col-md-6">
            <h5 class="text-dark mb-3">I would like to discuss with us:</h5>
            <form class="mt-1 " method="post ">
                <div class="row  ">
                    <div class="input-group col-12 mb-2 rounded-3 "><input class="form-control " type="hidden "
                            name="to " placeholder="Name " /></div>

                    <div class="col-12 mb-2 rounded-3"><input class="form-control " type="hidden " name="to "
                            placeholder="Enter Your Mail " /></div>
                    <div class="col-12 mb-2 "><input class="form-control " type="text " placeholder="Phone Number "
                            aria-label="Phone Number " /></div>
                    <div class="col-12 mb-2 "><input class="form-control " type="text " placeholder="Subject "
                            aria-label="Subject " /></div>
                    <div class="col-12 mb-2 "><textarea class="form-control " type="text " placeholder="message "
                            aria-label="Subject "></textarea> </div>
                    <div class="col-6 mb-2 "><button class="btn btn-success rounded-pill w-100 "
                            type="submit ">Submit</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection