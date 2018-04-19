@extends('common.basePage')

@section('title', 'home page title')
@section('currPage', 'home')

@section('head')
    @parent
    <style>
        html, body {
            color : #F22;
            background : #212121
        }
    </style>
@show

@section('navigation')
    @parent
    <p>This is appended to the menu.</p>
@endsection

@section('content')
    <h3>Page content</h3>
    <p>This is my body content.</p>
@endsection

@section('footer')
    @parent
@endsection
