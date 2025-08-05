@props(['active' => false, 'href' => '#'])

@php
$classes = ($active ?? false)
? 'text-green-700 font-bold hover:text-green-600'
: 'text-gray-700 hover:text-green-600 font-medium';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>