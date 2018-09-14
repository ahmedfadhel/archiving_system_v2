<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Branch;
class BranchController extends Controller
{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $branches = Branch::get()->all();
        return view('manage.branches.index')->withBranches($branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $locations = Location::get()->all();
        $branches = Branch::get()->all();
        return view('manage.branches.create')
                ->withLocations($locations)
                ->withBranches($branches);
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

      $this->validate($request,[
        'name' => 'required|max:50',
        'brch_code' => 'required|alpha_dash|min:4|max:10|unique:branches',
        'location_id' => 'required|Numeric'
      ]);
      $branch = new Branch();
      $branch->name = $request->input('name');
      $branch->brch_code = $request->input('brch_code');
      $branch->location_id = $request->input('location_id');

      if($branch->save()){
         
          return redirect()->route('branches.index');
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
        $branch = Branch::find($id);
        return view('manage.branches.show')
                ->withBranch($branch);
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
