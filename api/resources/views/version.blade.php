@extends('common.master')

@section('title', 'Hello API')
@section('head')
    @parent
@endsection

@section('header')
@endsection

@section('main')
    <code>Lumen version {{ $version  }}</code>
@endsection

@section('footer')
@endsection