<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Employee;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeestoreRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(5);

        return view('admin.employees.index',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $department= Department::select('department_name')->get();
         return view('admin.employees.create',compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeestoreRequest $request)
    {
        $employee = new Employee();
        $employee->setAttribute('employee_role',$request->input('employee_role'));
        $employee->setAttribute('first_name',$request->input('first_name'));
        $employee->setAttribute('last_name',$request->input('last_name'));
        $employee->setAttribute('gender',$request->input('gender'));
        $employee->setAttribute('nic',$request->input('nic'));
        $employee->setAttribute('email',$request->input('email'));
        $employee->setAttribute('designation',$request->input('designation'));
        $employee->setAttribute('address',$request->input('address'));
        $employee->setAttribute('department',$request->input('department'));
        $employee->setAttribute('mobile_no',$request->input('mobile_no'));
        $employee->setAttribute('grade',$request->input('grade'));
        $employee->setAttribute('experience',$request->input('experience'));

        $employee->save();
        return redirect()->route('admin.employees.index')
                        ->with('success','employee created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('admin.employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
     {
        $department= Department::select('department_name')->get();
    return view('admin.employees.edit',compact('employee','department'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeestoreRequest $request, Employee $employee)
    {

        $employee->setAttribute('employee_role',$request->input('employee_role'));
        $employee->setAttribute('first_name',$request->input('first_name'));
        $employee->setAttribute('last_name',$request->input('last_name'));
        $employee->setAttribute('gender',$request->input('gender'));
        $employee->setAttribute('nic',$request->input('nic'));
        $employee->setAttribute('email',$request->input('email'));
        $employee->setAttribute('designation',$request->input('designation'));
        $employee->setAttribute('address',$request->input('address'));
        $employee->setAttribute('department',$request->input('department'));
        $employee->setAttribute('mobile_no',$request->input('mobile_no'));
        $employee->setAttribute('grade',$request->input('grade'));
        $employee->setAttribute('experience',$request->input('experience'));


        $employee->save();
        return redirect()->route('admin.employees.index')
                        ->with('success','employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $course
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $employee = Employee::find($id);
        return view('admin.employees.delete', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('admin.employees.index')
                        ->with('success','employee deleted successfully');           
    }
}
