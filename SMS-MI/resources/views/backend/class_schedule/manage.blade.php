@extends('backend.master')

@section('title')
    Class Schedule
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>' Class Schedule', 'child' => 'Manage'])
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start"> Class Schedule</h4>
                    <a href="{{ route('schedules.create') }}" class="btn btn-success float-end">
                        Create
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schedules as $schedule)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$schedule->starting_time}}</td>
                                    <td>{{$schedule->ending_time}}</td>
                                    <td>{{$schedule->status == 1 ? 'Active': 'InActive'}}</td>
                                    <td class=" d-flex" >
                                        <a href="{{route('sections.show',$schedule->id)}}" class="btn btn-sm btn-warning mx-1" title="details">
                                            <i class="dripicons-photo"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="dripicons-document"></i>
                                        </a>
                                        <a href="{{route('sections.edit',$schedule->id)}}" class="btn btn-sm btn-info mx-1" title="edit">
                                            <i class="dripicons-document-edit"></i>
                                        </a>
                                        <form action="{{route('sections.destroy',$schedule->slug)}}" method="post" onsubmit="return confirm('Are you sure to delete this ?');">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm  mx-0 " title="delete">
                                                <i class="dripicons-trash"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


