@extends('layouts.app')

@section('pagina', 'Home')

@section('content')    
    {{-- Alert --}}
    <alert-component 
        :info="
            {
                'status': $store.state.newsletter.status,
                'msg': $store.state.newsletter.msg
            }
        ">
    </alert-component>
    
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

    {{-- Benefits Section--}}
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
    <section id="question" class="">
        <question-component
        :question="[
            {
                'title': 'Are You Ready To Get Started?', 
                'text': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est eaque magni sit dolores. Nisi, dolor nam modi perspiciatis consequatur soluta.'}
        ]">
        </question-component>
    </section>

    {{-- Info Section --}}
    <section id="info" class="bg-light py-4">
        <info-component 
            :info="[
                {
                    'title': 'Lorem Ipsum',
                    'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eveniet blanditiis incidunt iusto corrupti illum cum laudantium ex sequi amet.',
                    'btnText': 'Learn More',
                    'link': '#',
                    'image': 'img/laptop.png',
                    'desc': 'Notebook'
                }
            ]">
        </info-component>
    </section>

    {{-- Info Video Section --}}
    <section id="info-video">
        <question-component
        :question="[
            {
                'title': 'See What We Do', 
                // 'text': '',
                'icon': 'fas fa-play fa-3x',
                'target': '#model-video'
            }
        ]">
        </question-component>

        <model-component
        id="model-video"
        link="https://www.youtube.com/embed/CKBiquAq3eY?controls=1">
            
        </model-component>
    </section>

    {{-- Galeria de fotos --}}
    <section id="photo-gallery" class="py-5">
        <gallery-component
        :gallery="[
            {
                'title': 'Photo Gallery',
                'subtitle': 'Check out our photos',
                'images': [
                    [
                        {
                            'src': 'https://source.unsplash.com/random/560x560',
                            'alt': 'Descri????o imagem',
                            'link': 'https://source.unsplash.com/random/560x560'
                        },
                        {
                            'src': 'https://source.unsplash.com/random/561x561',
                            'alt': 'Descri????o imagem',
                            'link': 'https://source.unsplash.com/random/561x561'
                        },
                        {
                            'src': 'https://source.unsplash.com/random/562x562',
                            'alt': 'Descri????o imagem',
                            'link': 'https://source.unsplash.com/random/562x562'
                        }
                    ],
                    [
                        {
                            'src': 'https://source.unsplash.com/random/563x563',
                            'alt': 'Descri????o imagem',
                            'link': 'https://source.unsplash.com/random/563x563'
                        },
                        {
                            'src': 'https://source.unsplash.com/random/564x564',
                            'alt': 'Descri????o imagem',
                            'link': 'https://source.unsplash.com/random/564x564'
                        },
                        {
                            'src': 'https://source.unsplash.com/random/565x565',
                            'alt': 'Descri????o imagem',
                            'link': 'https://source.unsplash.com/random/565x565'
                        }
                    ]
                ]  
            }
        ]"></gallery-component>
    </section>

    {{-- Newsletter --}}
    <section id="newslatter" class="py-5 bg-dark text-white">
        <newsletter-component
        :newsletter="
            [{
                'title': 'Sign Up For Our Newsletter',
                'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio asperiores consectetur, quae ducimus voluptates vero repellendus architecto maiores recusandae mollitia?',
                'inputs': [
                    {
                        'type': 'text',
                        'placeholder': 'Enter Name',
                        'name': 'name',
                        'value': ''
                    }, 
                    {
                        'type': 'email',
                        'placeholder': 'Enter E-mail',
                        'name': 'email',
                        'value': ''
                    }
                ]
            }]">
        </newsletter-component>
    </section>
@endsection
    