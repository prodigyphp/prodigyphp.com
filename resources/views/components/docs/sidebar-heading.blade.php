@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-semibold pt-2 block text-blue-600 border-current'
            : 'font-semibold pt-2 block hover:text-blue-700';

$activeRef = '';

if($active) {
    $activeRef = 'x-ref=sidebarActiveLink';
}

@endphp

<a {{ $activeRef }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
