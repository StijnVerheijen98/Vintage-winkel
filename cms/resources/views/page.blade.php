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
    @isset($page)
        <article class="card">
            @if(file_exists(public_path("storage/$page->image")))
                <img class="card-img-top" src="storage/{{$page->image}}" alt="Page image">
            @endif
            <header class="card-header">
                <h1>{{$page->title}}</h1>
            </header>
            <main class="card-body">
                <div>{!! $page->excerpt !!}</div>
                <div>{!! $page->body !!}</div>
            </main>
            <footer class="card-footer">
                <small>Geplaatst op: {{$page->created_at}}</small> ||
                <small>Bewerkt op: {{$page->updated_at}}</small>
            </footer>
        </article>
    @else
        <div class="card m-auto" style="max-width: 50ch">
            <div class="card-header">
                Niet gevonden
            </div>
            <div class="card-body">
                De opgevraagde pagina kon niet worden gevonden.
            </div>
        </div>
    @endisset
@endsection

@section('footer')
    @parent
@endsection
