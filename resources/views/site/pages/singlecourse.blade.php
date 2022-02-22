@extends('site.layout.app')
@section('site-cotentn')

<div class="container">
    <div class="row align-items-center">
        <img src="{{asset($slider->slide_img)}}" alt="" height="500">
    </div>
    <div class="row mt-3">
        <div class="col">
            <h3 class="text-center fs-2 fs-md-3 "> Overview</h3>
            <hr class="short"
                data-zanim-xs="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;width&quot;:0},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;width&quot;:&quot;4.20873rem&quot;},&quot;duration&quot;:0.8}"
                style="width: 4.2087rem; opacity: 1;">
        </div>
        <div class="col-12">
            <div class="bg-white px-3 mt-3 px-0 py-5 px-lg-5 rounded-3">
                <h5>Earning the right</h5>
                <blockquote class="blockquote my-5 ms-lg-6" style="max-width: 700px;">
                    <h5 class="fw-medium ms-3 mb-0">{{$slider->title}}</h5>
                </blockquote>
                <p>{{$slider->description}} </p>
            </div>
        </div>
    </div>
</div>

@endsection