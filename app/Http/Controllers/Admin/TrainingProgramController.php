<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Training_program;
use App\Target_group;
use App\Http\Requests\TrainingProgramstoreRequest;
class TrainingProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training_programs = Training_program::latest()->paginate(5);

        return view('admin.training_programs.index',compact('training_programs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $target_group =Target_group::select('id','target_group')->get();
        return view('admin.training_programs.create',compact('target_group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingProgramstoreRequest $request)
    {
         $training_program = new Training_program();
         $training_program->setAttribute('program_name',$request->input('program_name'));
         $training_program->setAttribute('date',$request->input('date'));
         $training_program->setAttribute('location',$request->input('location'));
         $training_program->setAttribute('program_type',$request->input('program_type'));
         $training_program->setAttribute('duration',$request->input('duration'));
         $training_program->setAttribute('content',$request->input('content'));
         $training_program->setAttribute('target_group',$request->input('target_group'));
         $training_program->setAttribute('no_of_trainees',$request->input('no_of_trainees'));
         $training_program->setAttribute('no_of_resources',$request->input('no_of_resources'));
         $training_program->setAttribute('no_of_staffs',$request->input('no_of_staffs'));


         $training_program->save();
          return redirect()->route('admin.training_programs.index')
                        ->with('success','TrainingProgram created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training_program = Training_program::find($id);
        return view('admin.training_programs.show',compact('training_program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Training_program $training_program)
    {
        $target_group = Target_group::select('id','target_group')->get();
        return view('admin.training_programs.edit',compact('training_program','target_group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrainingProgramstoreRequest $request, Training_program $training_program)
    {
        $training_program->setAttribute('program_name',$request->input('program_name'));
        $training_program->setAttribute('date',$request->input('date'));
        $training_program->setAttribute('location',$request->input('location'));
        $training_program->setAttribute('program_type',$request->input('program_type'));
        $training_program->setAttribute('duration',$request->input('duration'));
        $training_program->setAttribute('content',$request->input('content'));
        $training_program->setAttribute('target_group',$request->input('target_group'));
        $training_program->setAttribute('no_of_trainees',$request->input('no_of_trainees'));
        $training_program->setAttribute('no_of_resources',$request->input('no_of_resources'));
        $training_program->setAttribute('no_of_staffs',$request->input('no_of_staffs'));
        $training_program->save();

        return redirect()->route('admin.training_programs.index')
                        ->with('success','TrainingProgram updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Training_program $training_program)
    {
        return view('admin.training_programs.delete', compact('training_program'));
    }
    public function destroy(Training_program $training_program)
    {
        $training_program->delete();

        return redirect()->route('admin.training_programs.index')
                        ->with('success','TrainingProgram deleted successfully');
    }
}
