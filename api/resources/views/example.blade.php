@extends('common.master')

@section('title', 'Hello BLADE')
@section('head')
    @parent
    {{--Append things to head here--}}
@endsection

@section('header')
    <p>I'm in the header</p>
@endsection

@section('main')
    <p>I'm in the main</p>
    <code>Lumen version {{ $version  }}</code>
@endsection

@section('footer')
    <p>I'm in the footer</p>
@endsection