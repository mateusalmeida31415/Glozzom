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
@endsection