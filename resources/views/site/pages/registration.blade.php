@extends('site.layout.app')
@section('site-cotentn')
<div class="container">
    <div class="row min-vh-100 align-items-center">
        <div class="col-md-9 col-lg-6 mx-auto" data-zanim-timeline="{}">
            <div class="mb-5" data-zanim-xs="{&quot;delay&quot;:0,&quot;duration&quot;:1}"
                style="transform: translate(0px, 0px); opacity: 1;"><a href="../index-2.html"><img
                        src="../assets/img/logo-light.png" alt="logo"></a></div>
            <div class="card" data-zanim-xs="{&quot;delay&quot;:0.1,&quot;duration&quot;:1}"
                style="transform: translate(0px, 0px); opacity: 1;">
                <div class="card-body p-md-5">
                    <h4 class="text-uppercase fs-0 fs-md-1">create your elixir account</h4>
                    <form class="text-start mt-4">
                        <div class="row align-items-center g-4">
                            <div class="col-6"> <input class="form-control" type="text" placeholder="First name"
                                    aria-label="First Name"></div>
                            <div class="col-6"><input class="form-control" type="text" placeholder="Last name"
                                    aria-label="Last Name"></div>
                            <div class="col-12"><input class="form-control" type="email" placeholder="Email Address"
                                    aria-label="Email Address"></div>
                            <div class="col-12"><input class="form-control" type="Password" placeholder="Password"
                                    aria-label="Password"></div>
                            <div class="col-12"><input class="form-control" type="Password"
                                    placeholder="Confirm Password" aria-label="Confirm Password"></div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-6 mt-3">
                                <div class="form-check"><input class="form-check-input" id="rememberMe" type="checkbox"
                                        value=""><label class="form-check-label text-500 lh-sm fw-semi-bold"
                                        for="rememberMe">I agree with the terms &amp; conditions</label></div>
                            </div>
                            <div class="col-6 mt-2 mt-sm-3"><button class="btn btn-primary w-100" type="submit">Create
                                    Account</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection