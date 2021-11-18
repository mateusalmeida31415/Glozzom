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
@endsection