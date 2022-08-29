<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcademicYearFormRequest;
use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{

    private $years;
    private $year;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->years = AcademicYear::orderBy('id','DESC')->get();
        return view('backend.academic_year.manage', ['years'=>$this->years]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.academic_year.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcademicYearFormRequest $request)
    {
       // return $request;
        $this->year = AcademicYear::create([
            'session_year_start' => $request->session_year_start,
            'session_year_end' => $request->session_year_end,
            'session_month_start' => $request->session_month_start,
            'session_month_end' => $request->session_month_end,
            'slug' => time().str_replace(' ','-',$request->session_year_start),
            'status' => $request->status,
        ]);
        return redirect(route('years.index'))->with('success','Academic Year create successfully');
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
    public function destroy($slug)
    {
        $this->year = AcademicYear::where('slug', $slug)->first();
        $this->year->delete();

        return redirect()->back()->with('success',' row delete successfully');
    }
}
