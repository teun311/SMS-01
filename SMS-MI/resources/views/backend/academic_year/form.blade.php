@extends('backend.master')

@section('title')
    Academic Year
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Academic Year', 'child' => 'Create'])
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Create Academic Year</h4>
                    <a href="{{ route('years.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{isset($any) ? route('years.update',$stage->id) : route('years.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($any))
                            @method('patch')
                        @endif
                        <div class="row col-md-12">
                            @if($errors->any())

                            @endif
                            <div class="col-md-6">

                                <label class="py-1" for="">Session Year Start </label>
                                @if($errors->has('session_year_start'))
                                    <li class="text-danger ms-2">{{$errors->first('session_year_start')}}</li>
                                @endif
                                <input type="text" class="form-control" name="session_year_start" id="datepicker" />

                                <label class="py-1" for="">Session Month Start </label>
                                @if($errors->has('session_month_start'))
                                    <li class="text-danger ms-2">{{$errors->first('session_month_start')}}</li>
                                @endif
                                <input type="text" class="form-control" id="datepicker1" name="session_month_start" >


                                <label class="form-label mt-1" > Status </label>
                                @if($errors->has('status'))
                                    <li class="text-danger ms-2">{{$errors->first('status')}}</li>
                                @endif
                                <div class="input-group mb-3" style="width: 515px;">
                                    <label class="input-group-text">Options</label>
                                    <select name="status" class="form-select" >
                                        <option hidden>Choose...</option>
                                        <option value="1">Active</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="py-1" for="">Session Year End </label>
                                @if($errors->has('session_year_end'))
                                    <li class="text-danger ms-2">{{$errors->first('session_year_end')}}</li>
                                @endif
                                <input type="text" class="form-control" name="session_year_end" id="datepicker2">

                                <label class="py-1" for="">Session Month End </label>
                                @if($errors->has('session_month_end'))
                                    <li class="text-danger ms-2">{{$errors->first('session_month_end')}}</li>
                                @endif
                                <input type="text" class="form-control" name="session_month_end" id="datepicker3">
                            </div>
                        </div>
                        <div class="py-2 float-start
">
                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($any) ? 'Update' : 'Create' }}  Academic Year">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
           $("#datepicker ,#datepicker2").datepicker({
                orientation: "bottom",
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose:true
            });

           $("#datepicker1,#datepicker3").datepicker( {
               orientation: "bottom",
               format: "MM",
               startView: "months",
               minViewMode: "months",
               autoclose: true
           });


    </script>

@endsection

