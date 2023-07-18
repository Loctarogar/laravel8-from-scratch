@extends('components.layout')

@section('content')

    @include('_posts-header');

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    <x-post-feature-card/>

    <div class="lg:grid lg:grid-cols-2">
        <x-post-card />
        <x-post-card />
    </div>
    <div class="lg:grid lg:grid-cols-3">
        <x-post-card />
        <x-post-card />
        <x-post-card />
    </div>
</main>

@endsection



{{--    <h1>My Blog</h1>--}}
{{--@endsection--}}
{{--@section('content')--}}
{{--    @foreach ($posts as $post)--}}
{{--        <article>--}}
{{--            <h1>Slug :--}}
{{--                <a href="/posts/{{ $post->slug }}">--}}
{{--                    {{ $post->title }}--}}
{{--                </a>--}}
{{--            </h1>--}}
{{--            <h1>User :--}}
{{--                    By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>--}}
{{--                    in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->slug }}</a>--}}
{{--            </h1>--}}
{{--            <p>Category :--}}
{{--                <a href="/categories/{{ $post->category->slug }}">{{ $post->category['name'] }}</a>--}}
{{--            </p>--}}
{{--            <div>{{ $post->excerpt }} </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
{{--    @isset($go_back_button)--}}
{{--        <div><a href="/">Go to all authors</a></div>--}}
{{--    @endisset--}}


