@extends('common.basePage')

@section('title', 'Simple page')
@section('currPage', 'home')

@section('head')
    @parent
    <style>
        html, body {
            color      : #ccc;
            background : #424242
        }
    </style>
@show

@section('content')
    <h3>Page content</h3>
    <p>This is my body content.</p>
@endsection
