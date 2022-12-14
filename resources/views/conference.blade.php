@extends('dashboard')

@section('content')
    @auth()
    <div class="w-100">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Conference</li>
            </ol>
        </nav>
        <div class="mt-4 mb-4">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-6">Conference Management</div>
                        <div class="col col-md-6">
                            <a href="{{url('/conference/create')}}" class="btn btn-success btn-lg float-right">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Address</th>
                                    <th>Participants</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($conferences as $item)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <th>{{$item->title}}</th>
                                <th>{{$item->description}}</th>
                                <th>{{$item->conference_date}}</th>
                                <th>{{$item->address}}</th>
                                <th>{{$item->participants}}</th>
                                <td>
                                    <a href="{{url('/conference/' . $item->id)}}" title="View Conference"><button class="btn btn-info btn-lg">View</button></a>
                                    <a href="{{url('/conference/' . $item->id . '/edit')}}" title="Edit Conference"><button class="btn btn-primary btn-lg">Edit</button></a>
                                    <form method="POST" action="{{url('/conference/' . $item->id)}}" accept-charset="UTF-8" style="display:inline">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <a href="" title="Delete Conference"><button type="submit" class="btn btn-danger btn-lg" title="Delete Conference">Delete</button></a>
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
    @endauth
    @guest()
    <div class="w-100">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Conference</li>
            </ol>
        </nav>
        <div class="mt-4 mb-4">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-6">Conference Management</div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Address</th>
                                <th>Participants</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($conferences as $item)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <th>{{$item->title}}</th>
                                    <th>{{$item->description}}</th>
                                    <th>{{$item->conference_date}}</th>
                                    <th>{{$item->address}}</th>
                                    <th>{{$item->participants}}</th>
                                    <td>
                                        <a href="{{url('/conference/' . $item->id)}}" title="View Conference"><button class="btn btn-info btn-lg">View</button></a>
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
    @endguest
@stop
