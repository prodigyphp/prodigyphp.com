<div class="not-prose text-[16px]">
    @if(isset($label))
    <div class="ml-2 p-2 relative top-[0.70em] rounded-tl-sm rounded-tr-sm font-medium pb-0 border border-b-0 text-gray-600 border-gray-200 inline-block text-sm ">
        {{ $label ?? '' }}
    </div>
    @endif
<pre><code class=" language-{{ $language ?? 'html' }}">{{ $code ?? '' }}</code></pre>
</div>
