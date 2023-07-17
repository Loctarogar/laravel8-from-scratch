@extends('components.layout')

@section('banner')
    <h1>My Blog</h1>
@endsection
@section('content')
    @foreach ($posts as $post)
        <article>
            <h1>Slug :
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <h1>User :
                <a href="/posts/{{ $post->user['name'] }}">
                    {{ $post->user['name'] }}
                </a>
            </h1>
            <p>Category :
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category['name'] }}</a>
            </p>
            <div>{{ $post->excerpt }} </div>
        </article>
    @endforeach
@endsection
