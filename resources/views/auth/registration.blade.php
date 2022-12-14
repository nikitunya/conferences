@extends('dashboard')
@section('content')

    <main class="signup-form w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row-md-4">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                    @endif
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                                @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                                @if($errors->has('email'))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                @if($errors->has('password'))
                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign Up</button>
                            </div>
                        </form>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
