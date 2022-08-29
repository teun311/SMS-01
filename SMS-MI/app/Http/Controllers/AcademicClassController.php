<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcademicClassFormRequest;
use App\Models\AcademicClass;
use App\Models\EducationalStage;
use Illuminate\Http\Request;

class AcademicClassController extends Controller
{
    private $classes;
    private $class;
    private $stages;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->classes = AcademicClass::orderBy('id','DESC')->get();
        return view('backend.academic_class.manage',['classes'=> $this->classes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->stages = EducationalStage::orderBy('id','ASC')->get();
        return view('backend.academic_class.form',['stages'=> $this->stages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcademicClassFormRequest $request)
    {
        return $request;
        $this->class = AcademicClass::create([
           'educational_stage_id'   => $request->educational_stage_id,
           'class_name'             => $request->class_name,
           'class_numeric'          => $request->class_numeric,
           'note'                   => $request->note,
           'slug'                   => str_replace(' ','-',$request->class_name),
           'status'                 => $request->status,
        ]);

        return redirect(route('classes.index'))->with('success','Class create successfully');
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
        $this->class = AcademicClass::where('slug',$id)->first();
        $this->class->delete();
        return redirect()->back()->with('success','row delete successfully');
    }
}
