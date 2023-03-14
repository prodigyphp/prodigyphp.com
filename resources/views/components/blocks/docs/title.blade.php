<div class="not-prose lg:not-prose">
    <h2 class=" font-black text-xl text-blue-900 lg:text-4xl xl:text-5xl mt-8 mb-4 text-gray-900">
        {{ $content['text'] ?? '' }}
    </h2>

    @if(isset($subtitle))
        <p class="text-lg text-xl mb-4">
            {{ $subtitle }}
        </p>
    @endif
</div>
