<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Target_group;
use Illuminate\Http\Request;
use App\Http\Requests\TargetgroupstoreRequest;

class TargetGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $target_groups = Target_group::latest()->paginate(5);

        return view('admin.target_groups.index',compact('target_groups'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.target_groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store(TargetgroupstoreRequest $request)
    {
        $target_group = new Target_group();
        $target_group->setAttribute('target_group',$request->input('target_group'));
        $target_group->setAttribute('description',$request->input('description'));

        $target_group->save();
        return redirect()->route('admin.target_groups.index')
                        ->with('success','target_group created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $target_group =  Target_group::find($id);
        return view('admin.target_groups.show',compact('target_group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $target_group =  Target_group::find($id);
        return view('admin.target_groups.edit',compact('target_group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TargetgroupstoreRequest $request, Target_group $target_group)
    {

        $target_group->setAttribute('target_group',$request->input('target_group'));
        $target_group->setAttribute('description',$request->input('description'));

        $target_group->save();
        return redirect()->route('admin.target_groups.index')
                        ->with('success','target_group updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Target_group $target_group)
    {
        return view('admin.target_groups.delete', compact('target_group'));
    }

    public function destroy(Target_group $target_group)
    {
        $target_group->delete();

        return redirect()->route('admin.target_groups.index')
                        ->with('success','target_group deleted successfully');
    }
}


