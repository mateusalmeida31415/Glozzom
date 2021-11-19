@extends('layouts.app')

@section('pagina', 'Contact')

@section('content')
    {{-- Header --}}
    <header-component 
        :header="{
            'id': 'header-services',
            'title': 'Contact Us',
            'text': 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?'
        }">
    </header-component>

    {{-- Contact Section --}}
    <section id="contact" class="py-3">
        <contact-component
            :contacts="[
                {
                    'contact': [
                        {
                            'title': 'Get In Touch',
                            'info': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, odio!'
                        },
                        {
                            'title': 'Address',
                            'info': '550 Main st, Boston MA'
                        },
                        {
                            'title': 'Email',
                            'info': 'test@test.com'
                        },
                        {
                            'title': 'Phone',
                            'info': '(555) 555-5555'
                        } 
                    ],
                    'form': {
                        'title': 'Please fill out this form to contact us',
                        'inputs': [
                            {
                                'type': 'text', 
                                'placeholder': 'First Name',
                                'value': ''
                            },
                            {
                                'type': 'text', 
                                'placeholder': 'Last Name',
                                'value': ''
                            },
                            {
                                'type': 'email', 
                                'placeholder': 'E-mail',
                                'value': ''
                            },
                            {
                                'type': 'text', 
                                'placeholder': 'Phone Number',
                                'value': ''
                            },
                            {
                                'type': 'textarea',
                                'placeholder': 'Message',
                                'value': ''
                            }
                        ],
                        'buttom': {
                            'text': 'Submit'
                        }
                    }
                    
                }
            ]">
        </contact-component>
    </section>

    {{-- Staff Section --}}
    <section id="staff" class="bg-dark py-5">
        <staff-component 
            :staff="[
                {
                    'title': 'Our Staff',
                    'people': [
                        {
                            'image': 
                                {
                                    'src': 'https://source.unsplash.com/random/200x200?woman',
                                    'alt': ''
                                },
                            'name': 'Jane Doe',
                            'job': 'Marketing Manager'
                        },
                        {
                            'image': {
                                'src': 'https://source.unsplash.com/random/201x201?woman',
                                'alt': ''
                            },
                            'name': 'Sara Williams',
                            'job': 'Business Manager'
                        },
                        {
                            'image': {
                                'src': 'https://source.unsplash.com/random/202x202?man',
                                'alt': ''
                            },
                            'name': 'John Doe',
                            'job': 'CEO'
                        },
                        {
                            'image': {
                                'src': 'https://source.unsplash.com/random/203x203?man',
                                'alt': ''
                            },
                            'name': 'Steve Smith',
                            'job': 'Marketing Manager'
                        },
                        
                    ]
                }
        ]">
        </staff-component>
    </section>
@endsection