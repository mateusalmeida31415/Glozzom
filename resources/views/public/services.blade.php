@extends('layouts.app')

@section('pagina', 'Services')
@section('content')
    {{-- Header --}}
    <header-component 
        :header="{
            'id': 'header-services',
            'title': 'Our Services',
            'text': 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?'
        }">
    </header-component>

    {{-- Plans --}}
    <section id="plans" class="py-3">
        <plans-component 
            :plans="[
                {
                    'title': 'Service Plan One',
                    'value': '$59.99/Month',
                    'desc': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, perspiciatis.',
                    'benefits': [
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature One'
                        }, 
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Two'
                        },
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Three'
                        }, 
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Four'
                        }, 
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Five'
                        }
                    ],
                    'button': {
                        'desc': 'Get It',
                        'link': '#'
                    },
                    'footer': '1 Year Plan'
                },
                {
                    'title': 'Service Plan Two',
                    'value': '$99.99/Month',
                    'desc': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, perspiciatis.',
                    'benefits': [
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature One'
                        }, 
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Two'
                        },
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Three'
                        }, 
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Four'
                        }, 
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Five'
                        }
                    ],
                    'button': {
                        'desc': 'Get It',
                        'link': '#'
                    },
                    'footer': '1 Year Plan'
                },
                {
                    'title': 'Service Plan Three',
                    'value': '$129.99/Month',
                    'desc': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, perspiciatis.',
                    'benefits': [
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature One'
                        }, 
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Two'
                        },
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Three'
                        }, 
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Four'
                        }, 
                        {
                            'icon': 'fas fa-check',
                            'desc': 'Feature Five'
                        }
                    ],
                    'button': {
                        'desc': 'Get It',
                        'link': '#'
                    },
                    'footer': '1 Year Plan'
                }
            ]">
        </plans-component>
    </section>
    
    {{-- Frequently question --}}
    <section id="frequently" class="bg-dark py-4">
        <frequently-component
            :questions="{
                'title': 'Frequently Asked Questions',
                'accordion1': [
                    {
                    'question': 'Question One',
                    'answer': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis distinctio exercitationem dolor minus placeat amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae molestias nulla, quod voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.'
                    },
                    {
                        'question': 'Question Two',
                        'answer': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis distinctio exercitationem dolor minus placeat amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae molestias nulla, quod voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.'
                    },
                    {
                        'question': 'Question Three',
                        'answer': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis distinctio exercitationem dolor minus placeat amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae molestias nulla, quod voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.'
                    }
                ],
                'accordion2': [
                    {
                    'question': 'Question Four',
                    'answer': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis distinctio exercitationem dolor minus placeat amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae molestias nulla, quod voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.'
                    },
                    {
                        'question': 'Question Five',
                        'answer': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis distinctio exercitationem dolor minus placeat amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae molestias nulla, quod voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.'
                    },
                    {
                        'question': 'Question Six',
                        'answer': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea officiis distinctio exercitationem dolor minus placeat amet commodi, ab a perspiciatis officia nobis reiciendis numquam totam repudiandae molestias nulla, quod voluptatibus modi rerum laboriosam tenetur. Nihil, soluta eaque? Minima, deserunt.'
                    }
                ]
            }">
        </frequently-component>
    </section>
@endsection