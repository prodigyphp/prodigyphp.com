<div class="bg-cover bg-fixed bg-center relative min-h-screen"
     style="background-image: url('{{ $block->getFirstMediaUrl('prodigy_photos') }}');">
    <div class="max-w-[750px] mx-auto text-center font-extrabold leading-tight lg:text-7xl min-h-screen w-full flex items-center justify-center">
        <div>
            <div class="text-transparent bg-clip-text bg-gradient-to-b from-white to-blue-200 mb-8">{{ $intro ?? '' }}</div>
            <div class="text-center text-center text-2xl font-[249] text-white/80">
                {!!  $body ??'' !!}
            </div>
        </div>
    </div>
    <div class="min-h-screen relative overflow-hidden">
        @forelse($block->children as $item)
            <div class="min-h-1/2 flex w-full relative z-10 mb-32 max-w-[1600px] mx-auto">
                <div class="lg:w-1/2 lg:p-16 lg:px-32">
                    <h3 class="text-3xl font-bold text-gray-700 mb-8">{{ $item->content['title'] ??'' }}</h3>
                    <div class="text-gray-500 lg:text-lg">
                        {!! $item->content['body'] ?? '' !!}
                    </div>
                </div>
                <div class="lg:w-1/2 lg:p-16">
                    <img src="{{ $item->getFirstMediaUrl('prodigy_photos') }}" alt="" class="lg:shadow-xl rounded-md"/>
                </div>
            </div>
        @empty
        @endforelse
        <div class="absolute top-0 bottom-0 left-0 w-1/2 bg-white shadow-2xl rounded-tr-xl z-0"></div>
    </div>
</div>