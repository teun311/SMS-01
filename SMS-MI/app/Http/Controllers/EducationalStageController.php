<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationalStageFormRequest;
use App\Models\EducationalStage;
use App\Models\StudentGroup;
use Illuminate\Http\Request;

class EducationalStageController extends Controller
{

    private $stages;
    private $stage;
    private $groups;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->stages = EducationalStage::orderBy('id','DESC')->get();
        return view('backend.educational_stage.manage',['stages'=>$this->stages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $this->groups = StudentGroup::orderBy('id','ASC')->get();
        return view('backend.educational_stage.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EducationalStageFormRequest $request)
    {
        $this->stage = EducationalStage::create([
            'group_name'=> $request->group_name,
            'slug'      => str_replace(' ','-',$request->group_name),
            'status'    =>$request->status,
        ]);

        return redirect(route('stages.index'))->with('success','Educational Stage create successfully');
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

    }
}
