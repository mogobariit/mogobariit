<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.Pages.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Pages.course.create');
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
            'course_name' => 'required|unique:courses,course_name,max:20',
           ]);
           $service              = new Course();
           $service->icon        = $request->icon;
           $service->description = $request->description;
           $service->course_name = $request->course_name;

           $service->save();
           return redirect()->route('course.index')->with('success', 'Course Deleted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.Pages.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'icon'        => 'required',
            'course_name' => 'required|unique:courses|min:5|max:20',
            'description' => 'required|min:20 ,max:50',
           ]);
           $course->icon        = $request->icon;
           $course->description = $request->description;
           $course->course_name = $request->course_name;
           $course->update();
           return redirect()->route('course.index')->with('success', 'Course Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if($course){
            $course->delete();
            return redirect()->route('course.index')->with('success', 'Course Update Successfully');
        }
    }
}