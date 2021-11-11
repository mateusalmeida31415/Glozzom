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
    
    {{-- Showcase --}}
    <header id="showcase">
        <carousel-component
            :carousel="[
                {
                    'title': 'Heading One', 
                    'text': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, eaque!', 
                    'btnText': 'Sign Up Now', 
                    'link': '#', 
                    'image': 'img/image1.jpg', 
                    'desc': 'Celular',
                    'align': '',
                    'btnColor' : 'btn-primary'
                },
                {
                    'title': 'Heading One', 
                    'text': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, eaque!', 
                    'btnText': 'Learn More', 
                    'link': '#', 
                    'image': 'img/image2.jpg', 
                    'desc': 'Celular',
                    'align': 'text-left',
                    'btnColor': 'btn-danger'
                },
                {
                    'title': 'Heading One', 
                    'text': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, eaque!', 
                    'btnText': 'Learn More', 
                    'link': '#', 
                    'image': 'img/image3.jpg', 
                    'desc': 'Celular',
                    'align': 'text-right',
                    'btnColor': 'btn-success'
                }
            ]">
        </carousel-component>
    </header>
    
@endsection
    