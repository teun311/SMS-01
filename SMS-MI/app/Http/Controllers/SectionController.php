<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionFormRequest;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    private $sections;
    private $section;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->sections = Section::orderBy('id','DESC')->get();
        return  view('backend.Academic_section.manage',['sections'=> $this->sections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Academic_section.from');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectionFormRequest $request)
    {
        $this->section = Section::create([
            'section_name' =>$request->section_name,
            'capacity' =>$request->capacity,
            'slug' =>str_replace(' ','-',$request->section_name),
            'note' =>$request->note,
            'status' =>$request->status,
        ]);
        return redirect(route('sections.index'))->with('success','section create successfully');
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
        $this->section = Section::where('slug',$id)->first();
        $this->section->delete();

        return redirect(route('sections.index'))->with('success','row delete successfully');
    }
}
