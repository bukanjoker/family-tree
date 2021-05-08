@extends('layout.nolayout')

@section('title')
    Register Page
@endsection

@section('page-content')
    <div class="mt-3 mb-5">
        <div style="background-image: url('/images/family2.png'); margin:auto; background-size: cover; width: 240px; height: 200px;"></div>

        <form action="">
            <div class="form-group">
                <label>Name</label>
                <input type="email" class="form-control" placeholder="Who">
            </div>
            <div class="form-group">
                <label>Birth Place</label>
                <input type="text" class="form-control" placeholder="Where">
            </div>
            <div class="form-group">
                <label>Birth Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" rows="3" placeholder="Where"></textarea>
            </div>
            <div class="form-group">
                <label>No Telp</label>
                <input type="text" class="form-control" placeholder="+62">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-info w-100">Register</button>
            </div>
        </form>
        <div class="mt-2 text-small">Already have account? <a class="text-info" href="/login">Login Here.</a></div>
    </div>
@endsection