@php

    $chapters = array(
        array(
            'title' => 'Getting Started',
            'number' => '',
            'slug' => 'docs/getting-started',
            'sections' => array(
            array(
                    'title' => 'What is Prodigy?',
                    'slug' => 'docs/what-is-prodigy',
                ),
                array(
                    'title' => 'Installation',
                    'slug' => 'docs/getting-started',
                ),
            ),
        ),
        array(
                'title' => 'Available Fields',
                'slug' => 'docs/available-fields'
                )

    );

@endphp


<aside>
    <nav class="lg:text-sm lg:leading-6 relative">
        <ul class="pt-4 space-y-4">
            @foreach($chapters as $chapter)
                <li>
                    <x-docs.sidebar-heading href="/{{ $chapter['slug'] }}" :active="request()->is( $chapter['slug'])">
                        {{ $chapter['title'] }}
                    </x-docs.sidebar-heading>
                </li>

                @if(array_key_exists('sections', $chapter))
                    <ul class="space-y-6 lg:space-y-4 border-l border-slate-100">
                        @foreach($chapter['sections'] as $subchapter)
                            <li>
                                <x-docs.sidebar-link :href="'/' . $subchapter['slug']" :slug="$subchapter['slug']"
                                                     :active="request()->is( $subchapter['slug'])">
                                    {{ $subchapter['title'] }}
                                </x-docs.sidebar-link>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endforeach

        </ul>
    </nav>
</aside>