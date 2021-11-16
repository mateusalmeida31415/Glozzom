@extends('layouts.app')

@section('pagina', 'About Us')

@section('content')
    {{-- Navbar --}}
    <navbar-component 
    id="main-nav"
    :brand="[{'name': 'Glozzom', 'link': '#'}]"
    :itens="[
        {'text': 'home', 'link': '{{route('home')}}', 'ref': '', 'path': '/'},
        {'text': 'about us', 'link': '{{route('about')}}', 'ref': '', 'path': '/about-us'},
        {'text': 'services', 'link': '#', 'ref': ''},
        {'text': 'blog', 'link': '#', 'ref': ''},
        {'text': 'contact', 'link': '#', 'ref': ''}
    ]">
    </navbar-component>

    <header-component 
    :header="{
        'id': 'header-about-us',
        'title': 'What We Do',
        'text': 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?'
    }" >
    </header-component>
    
@endsection