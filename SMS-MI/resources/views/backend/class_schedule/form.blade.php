@extends('backend.master')

@section('title')
    Class Schedule
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Class Schedule', 'child' => 'Create'])
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Create Class Schedule</h4>
                    <a href="{{ route('schedules.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{isset($any) ? route('schedules.update',$section->id) : route('schedules.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($any))
                            @method('patch')
                        @endif
                        <div class="row col-md-12">
                            @if($errors->any())

                            @endif
                            <div class="col-md-6">

                                <label class="py-1" for="">Start Time</label>
                                @if($errors->has('starting_time'))
                                    <li class="text-danger ms-2">{{$errors->first('starting_time')}}</li>
                                @endif
                                <input type="text" class="form-control"  name="starting_time" id="timepicker" >

                                <label class="py-1" for="">End Time</label>
                                @if($errors->has('ending_time'))
                                    <li class="text-danger ms-2">{{$errors->first('ending_time')}}</li>
                                @endif
                                <input type="text" class="form-control"  name="ending_time" id="timepicker1">

                                <label class="form-label mt-1" > Status </label>
                                @if($errors->has('status'))
                                    <li class="text-danger ms-2">{{$errors->first('status')}}</li>
                                @endif
                                <div class="input-group mb-3" >
                                    <label class="input-group-text">Options</label>
                                    <select name="status" class="form-select" >
                                        <option hidden>Choose...</option>
                                        <option value="1">Active</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                        <div class="py-2 float-start
">
                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($any) ? 'Update' : 'Create' }} Section">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>


        $('#timepicker,#timepicker1').timepicker({
            timeFormat: 'h:mm p',
            interval: 60,
            minTime: '10',
            maxTime: '6:00pm',
            defaultTime: '11',
            startTime: '10:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });



    </script>

@endsection
