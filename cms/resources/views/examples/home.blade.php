@extends('common.basePage')

@section('title', 'home page title')
@section('currPage', 'home')

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
