
@php

$chapters = array(
    array(
        'title' => 'Getting Started',
        'number' => '',
        'slug' => 'docs/getting-started',
        'sections' => array(

        )
    ),
    array(
        'title' => 'Installation',
        'number' => '',
        'slug' => 'docs/installation',
        'sections' => array(

        )
    ),
);

@endphp


<aside>
            <nav class="lg:text-sm lg:leading-6 relative">
                    <ul class="pt-4 space-y-4">
                        @foreach($chapters as $chapter)
                        <li>
                            <x-docs.sidebar-heading href="/{{ $chapter['slug'] }}" :active="request()->is( $chapter['slug'] . '*')">
                                {{ $chapter['title'] }}
                            </x-docs.sidebar-heading>
                        </li>

                            @if($chapter['sections'])
                                <ul class="space-y-6 lg:space-y-4 border-l border-slate-100 {{ request()->is( $chapter['slug'] . '*') ? '' : 'hidden' }}">
                                @foreach($chapter['sections'] as $name => $slug)
                                    <li>
                                        <x-docs.sidebar-link href="/{{ $chapter['slug'] }}#{{ $slug }}" :slug="$slug">
                                            {{ $name }}
                                        </x-docs.sidebar-link>
                                    </li>
                                @endforeach
                                </ul>
                            @endif
                        @endforeach

                    </ul>
            </nav>
        </aside>