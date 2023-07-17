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
                    By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                    in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->slug }}</a>
            </h1>
            <p>Category :
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category['name'] }}</a>
            </p>
            <div>{{ $post->excerpt }} </div>
        </article>
    @endforeach
@endsection
