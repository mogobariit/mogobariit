@extends('site.layout.app')
@section('site-cotentn')
<div class="contwiner mt-5">
    <div class="row g-0 pt-4">
        <div class="col-lg-4 py-3 py-lg-0 position-relative">
            <img src="{{asset($course->img)}}" alt="" class="img-fluid">
        </div>
        <div class=" col-lg-8 px-5 py-6 my-lg-0 bg-white rounded-lg-te-lg rounded-be-lg rounded-bs-lg rounded-lg-bs-0
                d-flex align-items-center">
            <div data-zanim-timeline="{}">
                <h5 data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;">
                    {{$course->course_name}}
                </h5>
                <p class=" my-4" data-zanim-xs="{&quot;delay&quot;:0.1}"
                    style="transform: translate(0px, 0px); opacity: 1;">
                    {{$course->description}}
                </p>
                <!-- <img data-zanim-xs="{&quot;delay&quot;:0.2}" src="../assets/img/signature.png" alt="CEO"
                    style="transform: translate(0px, 0px); opacity: 1;"> -->
                <!-- <h5 class="text-uppercase mt-3 fw-medium mb-1" data-zanim-xs="{&quot;delay&quot;:0.3}"
                    style="transform: translate(0px, 0px); opacity: 1;"></h5> -->
                <h3 class="text-500 fw-semi-bold" data-zanim-xs="{&quot;delay&quot;:0.4}"
                    style="transform: translate(0px, 0px); opacity: 1;">Mogobati IT </h3>
            </div>
        </div>

    </div>
</div>

@endsection