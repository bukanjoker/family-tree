@extends('layout.main')

@section('title')
    Family Tree
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
@endphp

@section('page-content')
    <div class="mt-2">
        @include('partial.listMedium', ['title'=>'Parents', 'data'=> $parent])
        @include('partial.listMedium', ['title'=>'Children', 'data'=> $children])
    </div>
@endsection