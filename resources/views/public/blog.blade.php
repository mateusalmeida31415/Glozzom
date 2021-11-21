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
            :post="$store.state.posts"
            api="http://glozzom.test/api/posts/"
            num="1">
        </blog-component>
        <pagination-component
            :pagination="$store.state.pagination"
            url-base="http://glozzom.test/blog">
        </pagination-component>
    </section>
@endsection