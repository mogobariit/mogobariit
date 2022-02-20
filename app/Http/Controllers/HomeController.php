<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Partner;
use App\Models\Service;
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

        $ourPortfolios = Category::latest()->limit(3)->get();
        $services = Service::latest()->get();
        $partners = Partner::latest()->get();
        return view('site.pages.home', compact(['ourPortfolios','services','partners']));
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
    return view('site.pages.contact');
}


}