@props(['active'])

@php
$classes = ($active ?? false)
            ? 'upppercase font-semibold pt-2 block text-plan-400 border-current'
            : 'upppercase font-semibold pt-2 block text-slate-700 hover:text-plan-400';

$activeRef = '';

if($active) {
    $activeRef = 'x-ref=sidebarActiveLink';
}

@endphp

<a {{ $activeRef }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
