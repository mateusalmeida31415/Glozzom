@extends('layouts.app')

@section('pagina', 'About Us')

@section('content')
    {{-- Header --}}
    <header-component 
        :header="{
            'id': 'header-about-us',
            'title': 'About Us',
            'text': 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?'
        }">
    </header-component>

    {{-- What we do Section --}}
    <section id="what-we-do" class="py-3">
        <what-we-do-component
        :itens="[{
            'title': 'What We Do',
            'text': [
                { 
                    'p': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique praesentium temporibus adipisci debitis labore!'
                },
                { 
                    'p': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique praesentium temporibus adipisci debitis labore!'
                }
            ],
            'image': {
                'src': 'https://source.unsplash.com/random/700x700/?technology',
                'alt': 'Tecnology image'
            },
            'cards': [
                {
                    'icon': 'fas fa-building fa-3x',
                    'title': 'Sample Heading',
                    'text' : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.'
                },
                {
                    'icon': 'fas fa-bullhorn fa-3x',
                    'title': 'Sample Heading',
                    'text' : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.'
                },
                {
                    'icon': 'fas fa-comments fa-3x',
                    'title': 'Sample Heading',
                    'text' : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.'
                },
                {
                    'icon': 'fas fa-box fa-3x',
                    'title': 'Sample Heading',
                    'text' : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.'
                },
                {
                    'icon': 'fas fa-credit-card fa-3x',
                    'title': 'Sample Heading',
                    'text' : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.'
                },
                {
                    'icon': 'fas fa-coffee fa-3x',
                    'title': 'Sample Heading',
                    'text' : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.'
                }
            ]
        }]">
        </what-we-do-component>
    </section>
    
    {{-- Feedback Section --}}
    <section id="feedback" class="py-3 bg-dark text-white">
        <feedback-component 
            :feedback="[
                {
                    'title': 'Testimonials',
                    'feedback': [
                        {
                            'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, suscipit.',
                            'source': 'Company 1',
                            'name': 'Sam Smith From '
                        },
                        {
                            'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, suscipit.',
                            'source': 'Company 2',
                            'name': 'John Doe From '  
                        },
                        {
                            'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, suscipit.',
                            'source': 'Company 3',
                            'name': 'Meghan Willians From ' 
                        }
                    ]
                }
            ]">
        </feedback-component>
    </section>
@endsection