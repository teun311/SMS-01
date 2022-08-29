@extends('backend.master')

@section('title')
    Section
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Academic Class', 'child' => 'Create'])
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Create Section</h4>
                    <a href="{{ route('sections.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{isset($any) ? route('sections.update',$section->id) : route('sections.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($any))
                            @method('patch')
                        @endif
                        <div class="row col-md-12">
                            @if($errors->any())

                            @endif
                            <div class="col-md-12">

                                <label class="py-1" for="">Section name</label>
                                @if($errors->has('section_name'))
                                    <li class="text-danger ms-2">{{$errors->first('section_name')}}</li>
                                @endif
                                <input type="text" class="form-control"  name="section_name" >

                                <label class="py-1" for="">Capacity</label>
                                @if($errors->has('capacity'))
                                    <li class="text-danger ms-2">{{$errors->first('capacity')}}</li>
                                @endif
                                <input type="text" class="form-control"  name="capacity" >

                                <label class="py-1" for="">Note </label>
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
