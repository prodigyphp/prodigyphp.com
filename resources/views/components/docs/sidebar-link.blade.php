@props(['active', 'slug'])

@php
$classes = ($active ?? false)
            ? 'block pl-4 -ml-px text-blue-700'
            : 'block pl-4 -ml-px hover:text-blue-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
