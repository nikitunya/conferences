@extends('dashboard')
@section('content')

    <div class="card w-100">
        <h1 class="card-header">Edit Conference</h1>
        <div class="card-body">
            <form method="POST" action="{{url ('conference/' .$conferences->id)}}">
                @csrf
                @method("PATCH")
                <p>"{{$conferences->id}}"</p>
                <div class="form-group mb-3">
                    <label><b>Title</b></label>
                    <input type="text" name="title" class="form-control" value="{{$conferences->title}}">
                    @if($errors->has('title'))
                        <span class="text-danger">{{$errors->first('title')}}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label><b>Description</b></label>
                    <input type="text" name="description" class="form-control" value="{{$conferences->description}}">
                    @if($errors->has('description'))
                        <span class="text-danger">{{$errors->first('description')}}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label><b>Date</b></label>
                    <input type="date" name="conference_date" class="form-control" value="{{$conferences->conference_date}}">
                    @if($errors->has('conference_date'))
                        <span class="text-danger">{{$errors->first('conference_date')}}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label><b>Address</b></label>
                    <input type="text" name="address" class="form-control" value="{{$conferences->address}}">
                    @if($errors->has('address'))
                        <span class="text-danger">{{$errors->first('address')}}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label><b>Participants</b></label>
                    <input type="text" name="participants" class="form-control" value="{{$conferences->participants}}">
                    @if($errors->has('participants'))
                        <span class="text-danger">{{$errors->first('participants')}}</span>
                    @endif
                </div>
                <div class="form-group mb-3 text-center">
                    <input type="submit" class="btn btn-success btn-lg" value="Edit">
                </div>
            </form>
        </div>
    </div>
@endsection
