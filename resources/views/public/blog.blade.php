@extends('layouts.app')

@section('pagina', 'Blog')

@section('content')
    {{-- Header --}}
    <header-component 
        :header="{
            'id': 'header-blog',
            'title': 'Read Our Blog',
            'text': 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?'
        }">
    </header-component>

    {{-- Blog Section --}}
    <section id="blog" class="py-3">
        <blog-component
            :post="[
                {
                    'image': {
                        'src': 'https://source.unsplash.com/random/300x200?code',
                        'alt': '',
                    },
                    'title': 'Card Title',
                    'whiter': 'Written by Jeff on 05/20',
                    'demo': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia exercitationem.',
                    'btn': {
                        'title': 'Read More',
                        'link': '#',
                    },
                    'quote': {
                        'text': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?',
                        'font': 'Someone Famous in Source Title'
                    }
                },
                {
                    'image': {
                        'src': 'https://source.unsplash.com/random/301x200?code',
                        'alt': '',
                    },
                    'title': 'Card Title',
                    'whiter': 'Written by Jeff on 05/20',
                    'demo': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia exercitationem.',
                    'btn': {
                        'title': 'Read More',
                        'link': '#',
                    },
                    'quote': {
                        'text': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?',
                        'font': 'Someone Famous in Source Title'
                    }
                },
                {
                    'image': {
                        'src': 'https://source.unsplash.com/random/300x201?code',
                        'alt': '',
                    },
                    'title': 'Card Title',
                    'whiter': 'Written by Jeff on 05/20',
                    'demo': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia exercitationem.',
                    'btn': {
                        'title': 'Read More',
                        'link': '#',
                    },
                    'quote': {
                        'text': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?',
                        'font': 'Someone Famous in Source Title'
                    }
                }
            ]">
        </blog-component>
        <pagination-component>
        </pagination-component>
    </section>
@endsection