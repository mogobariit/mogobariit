<?php

namespace App\Http\Controllers;

use App\Models\topbar;
use Illuminate\Http\Request;

class TopbarController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
  $topbars = topbar::all();
  return view('admin.Pages.topbar.index', compact('topbars'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  return view('admin.Pages.topbar.create');
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {
  $request->validate([
   'location' => 'required',
   'email'    => 'required',
   'phone'    => 'required',
  ]);
  $topbar           = new topbar();
  $topbar->location = $request->location;
  $topbar->email    = $request->email;
  $topbar->phone    = $request->phone;

  $topbar->save();
  return redirect()->route('topbar.index')->with('success', 'Topbar Deleted Successfully');
 }

 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function show($id)
 {
  //
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function edit(topbar $topbar)
 {
  return view('admin.Pages.topbar.edit', compact('topbar'));
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, topbar $topbar)
 {
    $request->validate([
        'location' => 'required',
        'email'    => 'required',
        'phone'    => 'required',
       ]);
  $topbar->location = $request->location;
  $topbar->email    = $request->email;
  $topbar->phone    = $request->phone;

  $topbar->update();
  return redirect()->route('topbar.index')->with('success', 'Topbar Deleted Successfully');
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function destroy(topbar $topbar)
 {
    if($topbar){
        $topbar->delete();
        return redirect()->route('topbar.index')->with('success', 'Topbar Deleted Successfully');
    }
 }
}