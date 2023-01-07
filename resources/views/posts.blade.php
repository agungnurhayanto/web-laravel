@extends('layouts.main')

@section('container')
    <article class="mb-5">
        @foreach ($posts as $post)
            <h2>
                <a href="/posts/{{ $post['slug'] }}"> {{ $post['title'] }}</a>
            </h2>
            <h5>By : {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        @endforeach
    </article>
@endsection

{{--  tulisan @extends('layouts.main') itu mengambil file templating folder layouts/main.blade.php

dan untuk section itu mengisi file yang di main.blade.php itu di dalam yiels  --}}
