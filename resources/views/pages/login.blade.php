@extends('layout.nolayout')

@section('title')
    Login Page
@endsection

@section('page-content')
    <div class="mt-4">
        <div style="background-image: url('/images/family1.png'); margin:auto; background-size: cover; width: 240px; height: 200px;"></div>
        <form action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-info w-100">Login</button>
            </div>
        </form>
        <div class="mt-2 text-small">Doesn't have account? <a class="text-info" href="/register">Register Here.</a></div>
    </div>
@endsection