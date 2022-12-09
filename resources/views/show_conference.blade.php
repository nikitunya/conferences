@extends('dashboard')
@section('content')

    <div class="card w-100 text-center">
        <h1 class="card-header">Conference</h1>
        <div class="card-body">
            <h2 class="card-title">Title : {{ $conferences->title }}</h2>
            <h4 class="card-text">Description : {{ $conferences->title }}</h4>
            <h4 class="card-text">Date : {{ $conferences->conference_date }}</h4>
            <h4 class="card-text">Address : {{ $conferences->address }}</h4>
            <h4 class="card-text">Participants : {{ $conferences->participants }}</h4>
                <a href="{{route('conference')}}" title="Back"><button class="btn btn-info btn-lg">Main Page</button></a>
        </div>
    </div>
@endsection
