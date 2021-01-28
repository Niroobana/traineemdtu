<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Course;
use App\Target_group;
use Illuminate\Http\Request;
use App\Http\Requests\CoursestoreRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(5);

        return view('admin.courses.index',compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $target_group= Target_group::select('id','target_group')->get();
        return view('admin.courses.create',compact('target_group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoursestoreRequest $request)
    {
        $course = new Course();
        $course->setAttribute('course_name',$request->input('course_name'));
        $course->setAttribute('categary',$request->input('categary'));
        $course->setAttribute('duration',$request->input('duration'));
        $course->setAttribute('course_type',$request->input('course_type'));
        $course->setAttribute('target_group',$request->input('target_group'));
        $course->setAttribute('description',$request->input('description'));



            $course->save();
        return redirect()->route('admin.courses.index')
                        ->with('success','course created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
         $course = Course::find($id);
        return view('admin.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
     {
        $target_group = Target_group::select('id','target_group')->get();
        return view('admin.courses.edit',compact('course','target_group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CoursestoreRequest $request, Course $course)
    {

        $course->setAttribute('course_name',$request->input('course_name'));
        $course->setAttribute('categary',$request->input('categary'));
        $course->setAttribute('duration',$request->input('duration'));
        $course->setAttribute('course_type',$request->input('course_type'));
        $course->setAttribute('target_group',$request->input('target_group'));
        $course->setAttribute('description',$request->input('description'));
        // $request->validate([
        //     'Course_name' => 'required',
        //     'Duration' => 'required',
        //     'Course_type' => 'required',
        //     'Target_group' => 'required',
        //     'Description'=> 'required',
        // ]);


        $course->save();
        return redirect()->route('admin.courses.index')
                        ->with('success','course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function delete(Course $course)
    {
        return view('admin.courses.delete', compact('course'));
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('admin.courses.index')
                        ->with('success','course deleted successfully');
    }
}
