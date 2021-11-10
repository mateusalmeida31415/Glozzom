@extends('layouts.app')

@section('pagina', 'Home')

@section('content')
    {{-- Navbar --}}
    <navbar-component 
    id="main-nav"
    :brand="[{'name': 'Glozzom', 'link': '#'}]"
    :itens="[
        {'text': 'home', 'link': '#', 'ref': ''},
        {'text': 'about us', 'link': '#', 'ref': ''},
        {'text': 'services', 'link': '#', 'ref': ''},
        {'text': 'blog', 'link': '#', 'ref': ''},
        {'text': 'contact', 'link': '#', 'ref': ''}
    ]">
    </navbar-component>
@endsection
    