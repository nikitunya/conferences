@extends('dashboard')

@section('content')
    <div class="w-100">
        <h2 class="mt-3">Conference Management</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/conference">Conference Management</a></li>
                <li class="breadcrumb-item active">Add New Conference</li>
            </ol>
        </nav>
        <div class="row mt-4">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <div class="card-header">Add New Conference</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('conference.add_validation')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <label><b>Title</b></label>
                                <input type="text" name="title" class="form-control">
                                @if($errors->has('title'))
                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label><b>Description</b></label>
                                <input type="text" name="description" class="form-control">
                                @if($errors->has('description'))
                                    <span class="text-danger">{{$errors->first('description')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label><b>Date</b></label>
                                <input type="date" name="conference_date" class="form-control">
                                @if($errors->has('conference_date'))
                                    <span class="text-danger">{{$errors->first('conference_date')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label><b>Address</b></label>
                                <input type="text" name="address" class="form-control">
                                @if($errors->has('address'))
                                    <span class="text-danger">{{$errors->first('address')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label><b>Participants</b></label>
                                <input type="text" name="participants" class="form-control">
                                @if($errors->has('participants'))
                                    <span class="text-danger">{{$errors->first('participants')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3 text-center">
                                <input type="submit" class="btn btn-primary" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
