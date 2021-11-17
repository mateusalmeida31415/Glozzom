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
    
@endsection