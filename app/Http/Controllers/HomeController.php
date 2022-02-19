<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.pages.home');
    }
public function domain(){
    return view('site.pages.domain');
}
public function vpshosting(){
    return view('site.pages.vpshosting');
}
public function shearheosting(){
    return view('site.pages.shearehosting');
}
public function contactpage(){
    return view('site.pages.contactpage');
}

}