<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Salary;
use Illuminate\Http\Request;
use App\Http\Requests\ExpensestoreRequest;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Salary::latest()->paginate(5);

        return view('admin.salaries.index',compact('salaries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.salaries.create',compact('salary'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalarystoreRequest $request)
    {
        $salary = new Salary();
        $salary->setAttribute('employee_id',$request->input('employee_id'));
        $salary->setAttribute('employee_name',$request->input('employee_name'));
        $salary->setAttribute('employee_role',$request->input('employee_role'));
        $salary->setAttribute('hours',$request->input('hours'));
        $salary->setAttribute('days',$request->input('days'));
        $salary->setAttribute('gross_salary',$request->input('gross_salary'));
        $salary->setAttribute('total_amount',$request->input('total_amount'));



        $salary->save();
        return redirect()->route('admin.salaries.index')
                        ->with('success','salary created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salary  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Salary  $salary)
    {
        $salary = Salary::find($id);
        return view('admin.salaries.show',compact('salary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Salary  $salary)
     {
        return view('admin.salaries.edit',compact('salary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salary $course
     * @return \Illuminate\Http\Response
     */
    public function update(SalarystoreRequest $request, Salary  $salary)
    {

        $salary->setAttribute('employee_id',$request->input('employee_id'));
        $salary->setAttribute('employee_name',$request->input('employee_name'));
        $salary->setAttribute('employee_role',$request->input('employee_role'));
        $salary->setAttribute('hours',$request->input('hours'));
        $salary->setAttribute('days',$request->input('days'));
        $salary->setAttribute('gross_salary',$request->input('gross_salary'));
        $salary->setAttribute('total_amount',$request->input('total_amount'));
        // $request->validate([
        //     'Course_name' => 'required',
        //     'Duration' => 'required',
        //     'Course_type' => 'required',
        //     'Target_group' => 'required',
        //     'Description'=> 'required',
        // ]);


        $salary->save();
        return redirect()->route('admin.salaries.index')
                        ->with('success','salary updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salary  $course
     * @return \Illuminate\Http\Response
     */
    public function delete(Salary  $salary)
    {
        return view('admin.salaries.delete', compact('salary'));
    }

    public function destroy(Salary  $salary)
    {
        $salary->delete();

        return redirect()->route('admin.salaries.index')
                        ->with('success','salary deleted successfully');
    }
}

