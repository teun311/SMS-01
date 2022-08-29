@extends('backend.master')

@section('title')
    Academic Class
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Academic Class', 'child' => 'Create'])
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Create Academic Class</h4>
                    <a href="{{ route('classes.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{isset($any) ? route('classes.update',$stage->id) : route('classes.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($any))
                            @method('patch')
                        @endif
                        <div class="row col-md-12">
                            @if($errors->any())

                            @endif
                            <div class="col-md-12">

                                <label class="py-1" for="">Educationa Stage</label>
                                @if($errors->has('educational_stage_id'))
                                    <li class="text-danger ms-2">{{$errors->first('educational_stage_id')}}</li>
                                @endif
                                <select name="educational_stage_id" class="form-control mb-1"   data-placeholder="Group ">
                                    <option value=""disabled hidden selected><--Select One---></option>
                                    @foreach($stages as $stage)
                                        <option value="{{isset($cls) ? $cls->level : $stage->id}}">{{$stage->group_name}}</option>
                                    @endforeach
                                </select>

                                <label class="py-1" for="">Class name</label>
                                @if($errors->has('class_name'))
                                    <li class="text-danger ms-2">{{$errors->first('class_name')}}</li>
                                @endif
                                <input type="text" class="form-control"  name="class_name" >

                                <label class="py-1" for="">Class Numeric</label>
                                @if($errors->has('class_numeric'))
                                    <li class="text-danger ms-2">{{$errors->first('class_numeric')}}</li>
                                @endif
                                <input type="text" class="form-control"  name="class_numeric" >

                                <label class="py-1" for="">note </label>
                                @if($errors->has('note'))
                                    <li class="text-danger ms-2">{{$errors->first('note')}}</li>
                                @endif
                                <textarea name="note" class="form-control" cols="30" rows="3"></textarea>


                                <label class="form-label mt-1" > Status </label>
                                @if($errors->has('status'))
                                    <li class="text-danger ms-2">{{$errors->first('status')}}</li>
                                @endif
                                <div class="input-group mb-3" style="width: 450px;">
                                    <label class="input-group-text">Options</label>
                                    <select name="status" class="form-select" >
                                        <option hidden>Choose...</option>
                                        <option value="1">Active</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </div>

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
