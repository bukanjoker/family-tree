@extends('layout.detail')

@section('title')
    Family Member
@endsection

@php
    $parent = [ 
        (object) [
            'name'=> 'John Wiskey', 'gender'=>'L'
        ],
        (object) [
            'name'=> 'Mariah Kelly', 'gender'=>'P'
        ],
        (object) [
            'name'=> 'Sherly Gomes', 'gender'=>'P'
        ]
    ];
    $children = [ 
        (object) [
            'name'=> 'Bob Marley', 'gender'=>'L'
        ],
        (object) [
            'name'=> 'Messiah Halow', 'gender'=>'P'
        ],
        (object) [
            'name'=> 'Debby Gomes', 'gender'=>'P'
        ],
        (object) [
            'name'=> 'Bob Marley', 'gender'=>'L'
        ],
        (object) [
            'name'=> 'Messiah Halow', 'gender'=>'P'
        ],
        (object) [
            'name'=> 'Debby Gomes', 'gender'=>'P'
        ]
    ];
    $couple = [
        (object) [
            'name'=> 'Messiah Halow', 'gender'=>'P'
        ]
    ];
    $data = (object) [
        'name'=> 'Bob Marley', 'gender'=>'L'
    ];
@endphp

@section('page-content')
    <div class="image-lg mb-2" style="background-image: url('/images/sample-photo.png')"></div>
    <div class="text-center">
        <a href="/member-management" class="btn btn-info btn-sm text-white">Edit</a>
    </div>
    <div class="mt-4 mb-4">
        <div class="row mb-1">
            <span class="col-4">Name</span>
            <strong class="col-8">{{$data->name}}</strong>
        </div>
        <div class="row mb-1">
            <span class="col-4">Address</span>
            <span class="col-8">Jl Anggrek VIII no 20, Kel.Pekunden, Kota Semarang, Jawa Tengah</span>
        </div>
        <div class="row mb-1">
            <span class="col-4">No Telp</span>
            <span class="col-8">+6281395217751</span>
        </div>
        <div class="row mb-1">
            <span class="col-4">Birth Date</span>
            <span class="col-8">01 June (27 Year)</span>
        </div>
    </div>
    @include('partial.listSmall', ['title'=> $data->gender == 'L'? 'Wife' : 'Husband', 'data'=> $couple, 'redirect'=>false])
    @include('partial.listSmall', ['title'=>'Children', 'data'=> $children, 'redirect'=>'?code=twqe24'])
    @include('partial.listSmall', ['title'=>'Parents', 'data'=> $parent, 'redirect'=>'?code=twqe24'])
@endsection