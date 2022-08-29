@extends('backend.master')

@section('title')
    Educational Stage
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Educational Stage', 'child' => 'Create'])
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Create Educational Stage</h4>
                    <a href="{{ route('stages.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{isset($any) ? route('stages.update',$stage->id) : route('stages.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($any))
                            @method('patch')
                        @endif
                        <div class="row col-md-9">
                            @if($errors->any())

                            @endif
                            <div class="col-md-9 ">
                                <label class="py-1" for=""> Group Name </label>
                                @if($errors->has('group_name'))
                                    <li class="text-danger ms-2">{{$errors->first('group_name')}}</li>
                                @endif
                                <select name="group_name" class="form-control mb-1"   data-placeholder="Group ">
                                    <option value=""disabled hidden selected><--Select One---></option>
                                    <option value="{{isset($cls) ? $cls->level : 'primary'}}">Primary</option>
                                    <option value="{{isset($cls) ? $cls->level : 'school'}}">School</option>
                                    <option value="{{isset($cls) ? $cls->level : 'college'}}">College</option>
                                </select>
                                <label class="form-label mt-1" > Status </label>
                                @if($errors->has('status'))
                                    <li class="text-danger ms-2">{{$errors->first('status')}}</li>
                                @endif
                                <div class="input-group mb-3" style="width:585px;">
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
                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($any) ? 'Update' : 'Create' }}  Education Stage">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


