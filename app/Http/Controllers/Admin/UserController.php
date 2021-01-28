<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserstoreRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function register()
    // {
    //     $users = User::all();
    //     return view('admin.users.register')->with('users',$users);
           
    // }

    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('admin.users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserstoreRequest $request)
    {
        $user = new User();
        $user->setAttribute('username',$request->input('username'));
        $user->setAttribute('name',$request->input('name'));
        $user->setAttribute('role_id',$request->input('role_id'));
        $user->setAttribute('email',$request->input('email'));
        $user->setAttribute('password',$request->input('password'));
        $user->setAttribute('phone',$request->input('phone'));
        $user->setAttribute('address',$request->input('address'));
        $user->setAttribute('gender',$request->input('gender'));
        $user->setAttribute('city',$request->input('city'));


            $user->save();
        return redirect()->route('admin.users.index')
                        ->with('success','user created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
         $user = User::find($id);
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
     {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $course
     * @return \Illuminate\Http\Response
     */
    public function update(UserstoreRequest $request, User $user)
    {

        $user->setAttribute('username',$request->input('username'));
        $user->setAttribute('name',$request->input('name'));
        $user->setAttribute('role_id',$request->input('role_id'));
        $user->setAttribute('email',$request->input('email'));
        $user->setAttribute('password',$request->input('password'));
        $user->setAttribute('phone',$request->input('phone'));
        $user->setAttribute('address',$request->input('address'));
        $user->setAttribute('gender',$request->input('gender'));
        $user->setAttribute('city',$request->input('city'));
        // $request->validate([
        //     'Course_name' => 'required',
        //     'Duration' => 'required',
        //     'Course_type' => 'required',
        //     'Target_group' => 'required',
        //     'Description'=> 'required',
        // ]);


        $user->save();
        return redirect()->route('admin.users.index')
                        ->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\(User  $course
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        return view('admin.users.delete', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')
                        ->with('success','user deleted successfully');
    }
}
