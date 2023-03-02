@props(['active', 'slug'])

@php
$classes = ($active ?? false)
            ? 'block border-l pl-4 -ml-px text-sky-500 border-current'
            : 'block border-l pl-4 -ml-px border-transparent hover:border-plan-400 hover:text-plan-400  text-slate-700 hover:text-slate-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} :class="visibleHeadingId == '{{ $slug }}' && 'font-bold text-gray-900'">
    {{ $slot }}
</a>
