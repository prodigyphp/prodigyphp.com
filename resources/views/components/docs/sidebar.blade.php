@php

    $chapters = array(
        array(
            'title' => 'Getting Started',
            'number' => '',
            'slug' => 'docs/getting-started',
            'sections' => array(
                array('title' => 'What is Prodigy?',    'slug' => 'docs/what-is-prodigy'),
                array('title' => 'Installation',    'slug' => 'docs/getting-started'),
            ),
        ),
        array(
            'title' => 'The Basics',
            'number' => '',
            'slug' => 'docs/available-fields',
            'sections' => array(
                array( 'title' => 'Available fields', 'slug' => 'docs/available-fields'),
                array( 'title' => 'Routing', 'slug' => 'docs/routing'),
            ),
        ),
         array(
            'title' => 'Making pages',
            'number' => '',
            'slug' => 'docs/making-blocks',
            'sections' => array(
                array( 'title' => 'Making blocks', 'slug' => 'docs/making-blocks'),
                array( 'title' => 'Creating menus', 'slug' => 'docs/creating-menus'),
                array( 'title' => 'Custom templates', 'slug' => 'docs/custom-templates'),
            ),
        ),
        array(
            'title' => 'The CMS',
            'number' => '',
            'slug' => 'docs/using-the-cms',
            'sections' => array(
                array( 'title' => 'Using the CMS', 'slug' => 'docs/using-the-cms'),
                array( 'title' => 'Singular pages', 'slug' => 'docs/singular-pages')
            ),
        ),
        array(
            'title' => 'Deploying',
            'number' => '',
            'slug' => 'docs/deploying',
            'sections' => array(
                array( 'title' => 'Deploying to Prod', 'slug' => 'docs/deploying'),
                array( 'title' => 'Creating backups', 'slug' => 'docs/backups')
            ),
        ),

    );

@endphp


<aside>
    <nav class="lg:text-sm lg:leading-6 relative">
        <ul class="pt-4 space-y-4 md:pb-32">
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