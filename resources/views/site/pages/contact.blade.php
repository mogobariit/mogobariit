@extends('site.layout.app')
@section('site-cotentn')
<section>
    <div class="bg-holder overlay"
        style="background-image:url({{asset('site/assets/img/background-2.jpg')}});background-position:center bottom;">
    </div>
    <!--/.bg-holder-->
    <div class="container">
        <div class="row pt-6" data-inertia='{"weight":1.5}'>
            <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                    <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Contact</h1>
                    <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                        <ol class="breadcrumb fs-1 ps-0 fw-bold">
                            <li class="breadcrumb-item"><a class="text-white" href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section>
<div class="container mt-4">
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
<section class="bg-300">
    <div class="container">
        <div class="row align-items-stretch justify-content-center mb-4">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card h-100 shadow">
                    <div class="card-body px-5">
                        <h5 class="mb-3">Our Office</h5>
                        <p class="mb-0 text-1100"> Ka-119/A ,Kuril, Vatara <br>,Dhaka-1229</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card h-100 shadow">
                    <div class="card-body px-5">
                        <h5 class="mb-3">Phone</h5>
                        <p class="mb-0 text-1100">helpline: 0188665161<br />helpline:0188665162 <br />Dhaka-1229</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card h-100 shadow">
                    <div class="card-body px-5">
                        <h5>Socials</h5><a class="d-inline-block mt-2" href="#!"><span
                                class="fab fa-linkedin fs-2 me-2 text-primary"></span></a><a class="d-inline-block mt-2"
                            href="#!"><span class="fab fa-twitter-square fs-2 mx-2 text-primary"></span></a><a
                            class="d-inline-block mt-2" href="#!"><span
                                class="fab fa-facebook-square fs-2 mx-2 text-primary"></span></a><a
                            class="d-inline-block mt-2" href="#!"><span
                                class="fab fa-google-plus-square fs-2 ms-2 text-primary"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section>
@endsection