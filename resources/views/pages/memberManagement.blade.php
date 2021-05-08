@extends('layout.detail')

@section('title')
    Family Member
@endsection

@section('page-content')
    <div class="image-lg mb-2" style="background-image: url('/images/sample-photo.png')"></div>
    <form action="#">
        <div class="text-center mb-4">
            <button type="button" class="btn btn-info btn-sm text-white">Upload</button>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>No Telp</label>
            <input type="text" class="form-control" placeholder="+62">
        </div>
        <div class="form-group">
            <label>Birth Date</label>
            <input type="date" class="form-control">
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select class="form-control">
                <option value="L">Laki - Laki</option>
                <option value="P">Wanita</option>
            </select>
        </div>
        <div>
            <div class="mb-2">
                <label>Wife</label>
                <div>
                    <button type="button" class="btn btn-info btn-sm"><i class="fa fa-plus-circle"></i> Add</button>
                </div>
            </div>
            <div class="mb-2">
                <label>Children</label>
                <div>
                    <button type="button" class="btn btn-info btn-sm"><i class="fa fa-plus-circle"></i> Add</button>
                </div>
            </div>
            <div>
                <label>Parents</label>
                <div>
                    <button type="button" class="btn btn-info btn-sm"><i class="fa fa-plus-circle"></i> Add</button>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-info w-100">Save</button>
            <button type="button" onclick="goBack()" class="btn btn-secondary w-100 mt-2">Cancel</button>
        </div>
    </form>
@endsection