@extends('dashboard')
@section('content')

    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row-md-4">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
