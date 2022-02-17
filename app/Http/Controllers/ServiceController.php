<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
  $services = Service::all();
  return view('admin.Pages.services.index', compact('services'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  return view('admin.Pages.services.create');
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
   'icon'        => 'required',
   'description' => 'required|max:50',
   'course_name' => 'required|unique:services,course_name,max:20',
  ]);
  $service              = new Service();
  $service->icon        = $request->icon;
  $service->description = $request->description;
  $service->course_name = $request->course_name;

  $service->save();
  return redirect()->route('services.index')->with('success', 'Service Deleted Successfully');
 }

 /**
  * Display the specified resource.
  *
  * @param  \App\Models\Service  $service
  * @return \Illuminate\Http\Response
  */
 public function show(Service $service)
 {
  //
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Service  $service
  * @return \Illuminate\Http\Response
  */
 public function edit(Service $service)
 {
  return view('admin.Pages.services.edit', compact('service'));
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Service  $service
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, Service $service)
 {
  $request->validate([
   'icon'        => 'required',
   'course_name' => 'required|unique:services|min:5|max:20',
   'description' => 'required|min:20 ,max:50',
  ]);
  $service->icon        = $request->icon;
  $service->description = $request->description;
  $service->course_name = $request->course_name;
  $service->update();
  return redirect()->route('services.index')->with('success', 'Service Update Successfully');
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Service  $service
  * @return \Illuminate\Http\Response
  */
 public function destroy(Service $service)
 {
  if ($service) {
   $service->delete();
   return redirect()->route('services.index')->with('success', 'Service Delete Successfully');
  }
 }
}