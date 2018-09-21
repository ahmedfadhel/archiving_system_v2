<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Branch;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departments = Department::with('branch.location')->get();
        return view('manage.departments.index')->withDepartments($departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $branches = Branch::get()->all();
        return view('manage.departments.create')->withBranches($branches);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        //Validate the Request

        $this->validate($request,[
            'name'          => 'required|string|min:2|max:15',
            'description'   => 'required|string|min:10|max:200',
            'branch_id'     => 'required|numeric'
        ]);

        $department = new Department;
        $department->name = $request->input('name');
        $department->description = $request->input('description');
        $department->branch_id = $request->input('branch_id');
        
        if($department->save()){
            return redirect()->route('departments.index');
        }
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
        $department = Department::find($id);
        return view('manage.departments.show')
                ->withDepartment($department);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
