@props(['active' => false])

@php
    $classes = 'block text-left px-3 hover:bg-gray-300 focus:bg-gray-300';

    if ($active) $classes = $classes.' bg-blue-500 text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }} >
    {{ $slot }}
</a>
