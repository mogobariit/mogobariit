<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.Pages.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Pages.slider.create');
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
            'title' => 'required',
            'slide_img' => 'required',
            'description' => 'required'
        ]);
        $slider = new Slider();
        $slider->description = $request->description;
        $slider->title = $request->title;
        $slider->slug = Str::slug($request->name);
        if ($request->hasFile('slide_img')) {
            $file = $request->file('slide_img');
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $ext;
            $file->move('admin/uploads/', $filename);
            $slider->slide_img = 'admin/uploads/' . $filename;
        }
        $slider->save();
        return redirect()->back()->with('success', 'slider Added Successfully');
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
    public function edit(Slider $slider)
    {
        return view('admin.Pages.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required',
            'slide_img' => 'required',
            'description' => 'required'
        ]);
        $slider->description = $request->description;
        $slider->title = $request->title;
        $slider->slug = Str::slug($request->name);
        if ($request->hasFile('slide_img')) {
            $file = $request->file('slide_img');
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $ext;
            $file->move('admin/uploads/', $filename);
            $slider->slide_img = 'admin/uploads/' . $filename;
        }
        $slider->update();
        return redirect()->route('slider.index')->with('success' ,'Slider Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if ($slider) {
            $slider->delete();
            return redirect()->back()->with('success', 'Slider Deleted Successfully');
        }
    }
}
