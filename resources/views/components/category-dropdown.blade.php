<x-dropdown>
    <x-slot name="trigger">
        <button
            {{--@click="show = ! show"--}}
            class="py-2 pl-3 pr-9 text-sm font-semibold w-32 inline-flex"
        >
            {{ isset($currentCategory) ? ucwords($currentCategory->name) :'Categories' }}

            <x-icon name="down-arrow" class=" absolute pointer-events-none" style="right: 12px;" >
            </x-icon>

        </button>
    </x-slot>
    @foreach($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('$category', 'page')) }}"
            :active="isset($currentCategory) && $currentCategory->id == $category->id"
        >
            {{ ucwords($category->name) }}
        </x-dropdown-item>

    @endforeach
    <x-dropdown-item
{{--        href="/?{{ http_build_query(request()->except('$category', 'page')) }}" :active="request()->routeIs('home')"--}}
        href="/"
    >
        All
    </x-dropdown-item>

</x-dropdown>
