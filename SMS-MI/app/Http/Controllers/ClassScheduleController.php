<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassScheduleFromRequest;
use App\Models\ClassSchedule;
use Illuminate\Http\Request;

class ClassScheduleController extends Controller
{
    private $schedules;
    private $schedule;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->schedules = ClassSchedule::orderBy('id',"DESC")->get();
        return view('backend.class_schedule.manage',['schedules' => $this->schedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.class_schedule.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassScheduleFromRequest $request)
    {
        return $request;

        $this->schedule = ClassSchedule::create([
            'starting_time'               =>$request->starting_time,
            'starting_time_timestamp'     =>$request->starting_time_timestamp,
            'ending_time'                 =>$request->ending_time,
            'ending_time_timestamp'       =>$request->ending_time_timestamp,
            'slug'                        =>$request->slug,
            'status'                      =>$request->status,
        ]);

        return redirect(route('schedules.index'))->with('success','Class Schedule create successfully');
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
        //
    }
}
