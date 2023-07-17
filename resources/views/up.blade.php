@extends('components.layout')

@section('banner')
    <h1>Posts by author</h1>
@endsection
@section('content')
    <div>Posts by author</div>
    @foreach ($posts as $post)
        <article>
            <h1>Slug :
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <h1>User :
{{--                <a href="/posts/{{ $post->user['id'] }}">--}}
{{--                    {{ $post->user['name'] }}--}}
{{--                </a>--}}
            </h1>
            <p>Category :
{{--                <a href="/categories/{{ $post->category->slug }}">{{ $post->category['name'] }}</a>--}}
            </p>
            <div>{{ $post->excerpt }} </div>
        </article>
    @endforeach
@endsection
