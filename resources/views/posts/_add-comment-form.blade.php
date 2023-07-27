
@auth()
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex item-center ">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" width="40" height="40" class="rounded-full" alt="">
                <h2 class="ml-3">Want to participate?</h2>
            </header>

            <div class="mt-5">
                            <textarea
                                name="body"
                                class="w-full focus:outline-none focus:ring"
                                cols="30"
                                rows="4"
                                placeholder="wright something"
                            ></textarea>
                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end">
                <x-submit-button>Post</x-submit-button>
            </div>

        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="hover:underline">Register</a>
        or
        <a href="/login" class="hover:underline">Log in</a> to live a comment.
    </p>
@endauth
