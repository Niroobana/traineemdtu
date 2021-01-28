<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Expense;
use Illuminate\Http\Request;
use App\Http\Requests\ExpensestoreRequest;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::latest()->paginate(5);

        return view('admin.expenses.index',compact('expenses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expenses.create',compact('expense'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpensestoreRequest $request)
    {
        $expense = new Expense();
        $expense->setAttribute('program_id',$request->input('program_id'));
        $expense->setAttribute('program_name',$request->input('program_name'));
        $expense->setAttribute('stationary',$request->input('stationary'));
        $expense->setAttribute('accommodation',$request->input('accommodation'));
        $expense->setAttribute('refreshment',$request->input('refreshment'));
        $expense->setAttribute('total_amount',$request->input('total_amount'));



        $expense->save();
        return redirect()->route('admin.expenses.index')
                        ->with('success','expense created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Expense  $expense)
    {
        $expense = Expense::find($id);
        return view('admin.expenses.show',compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense  $expense)
     {
        return view('admin.expenses.edit',compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $course
     * @return \Illuminate\Http\Response
     */
    public function update(ExpensestoreRequest $request, Expense  $expense)
    {
        $expense->setAttribute('program_id',$request->input('program_id'));
        $expense->setAttribute('program_name',$request->input('program_name'));
        $expense->setAttribute('stationary',$request->input('stationary'));
        $expense->setAttribute('accommodation',$request->input('accommodation'));
        $expense->setAttribute('refreshment',$request->input('refreshment'));
        $expense->setAttribute('total_amount',$request->input('total_amount'));
        // $request->validate([
        //     'Course_name' => 'required',
        //     'Duration' => 'required',
        //     'Course_type' => 'required',
        //     'Target_group' => 'required',
        //     'Description'=> 'required',
        // ]);


        $expense->save();
        return redirect()->route('admin.expenses.index')
                        ->with('success','expense updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $course
     * @return \Illuminate\Http\Response
     */
    public function delete(Expense  $expense)
    {
        return view('admin.expenses.delete', compact('expense'));
    }

    public function destroy(Expense  $expense)
    {
        $expense->delete();

        return redirect()->route('admin.expenses.index')
                        ->with('success','expense deleted successfully');
    }
}
