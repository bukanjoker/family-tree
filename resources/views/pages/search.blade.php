@extends('layout.detail')

@section('title')
    Search Member Family
@endsection

@php
    $children = [];
@endphp

@section('page-content')
    <div class="mb-4">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Member" autofocus>
            <div class="input-group-btn">
                <button class="btn btn-info">Search</button>
            </div>
        </div>
    </div>
    <div>
        @include('partial.listMedium', ['title'=>'', 'data'=> $children])
    </div>
@endsection