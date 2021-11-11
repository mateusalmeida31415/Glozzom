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

    {{-- Benefits --}}
    <section id="benefits" class="bg-light">
        <benefits-component 
            :benefits="[
                {
                    'title': 'Turning Gears',
                    'text': 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, veniam.',
                    'icon': 'fas fa-cog fa-3x'
                },
                {
                    'title': 'Sending Data',
                    'text': 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, veniam.',
                    'icon': 'fas fa-cloud fa-3x'
                },
                {
                    'title': 'Making Money',
                    'text': 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, veniam.',
                    'icon': 'fas fa-cart-plus fa-3x'
                }
            ]">
        </benefits-component>
    </section>

    {{-- Question Section --}}
    <section id="question">
        <question-component
        :question="[
            {
                'title': 'Are You Ready To Get Started?', 
                'text': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est eaque magni sit dolores. Nisi, dolor nam modi perspiciatis consequatur soluta.'}
        ]">
        </question-component>
    </section>
@endsection
    