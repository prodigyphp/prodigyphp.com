<div class="bg-cover bg-fixed bg-center relative"
     style="background-image: url('{{ $block->getFirstMediaUrl('prodigy_photos') }}');">

    <div class="z-[2] relative max-w-[850px] mx-auto text-center font-extrabold leading-tight py-32 lg:min-h-screen w-full flex items-center justify-center">
        <div class="px-8">
            <div class="text-transparent bg-clip-text bg-gradient-to-b from-white to-blue-200 text-4xl  lg:text-7xl  mb-8">{{ $intro ?? '' }}</div>
            <div class="text-center text-center text-2xl font-[351] text-white/80">
                {!!  $body ??'' !!}
            </div>
        </div>
    </div>
    <div class="min-h-screen relative">
        @forelse($block->children as $item)
            <div class="min-h-1/2 flex flex-col md:flex-row items-center w-full relative z-10 mb-8 md:mb-32 max-w-[1600px] mx-auto relative">
                <div class="bg-white shadow-lg md:bg-transparent md:shadow-none px-6 py-12 md:w-1/2 md:p-12 lg:p-16 lg:px-32 order-last md:order-first">
                    <h3 class="text-3xl font-bold text-gray-700 mb-8">{{ $item->content['title'] ??'' }}</h3>
                    <div class="text-gray-500 lg:text-lg">
                        {!! $item->content['body'] ?? '' !!}
                    </div>
                    @if($item->content->has('link') && $item->content['link'] != '' )
                        <div>
                            <a href="{{ $item->content['link'] ?? '' }}"
                               class="inline-block text-[16px] lg:text-[17px] font-medium py-4 rounded-md hover:text-blue-600">
                                {{ $item->content['link_label'] ?? '' }} &#8594
                            </a>
                        </div>
                    @endif

                </div>
                <div class="md:w-1/2 md:p-16">
                    <img src="{{ $item->getFirstMediaUrl('prodigy_photos') }}" alt=""
                         class="md:shadow-2xl md:rounded-md"/>
                </div>
            </div>
        @empty
        @endforelse
        <div class="hidden md:block absolute top-0 bottom-0 left-0 w-1/2 bg-white shadow-2xl rounded-tr-xl rounded-br-xl z-[2]"></div>
    </div>

    <div class="min-h-screen relative flex items-center">
        <div class=" w-4/5 lg:w-[45%] mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" x="0" y="0"
                 style="enable-background:new 0 0 256 256" version="1.1" viewBox="0 0 256 256"><style>.st0 {
                        opacity: .5;
                        fill: #e3eaf7
                    }

                    .st1 {
                        fill: #fff
                    }</style>
                <path d="M133.9 101.3c0-2.4 1.5-4.6 3.8-5.4l83-30.2-6.1 21.8c-.6 2.2-2.2 3.9-4.3 4.7L133.9 120v-18.7z"
                      class="st0"/>
                <path d="m220.1 66.3-5.9 21.1c-.6 2-2.1 3.7-4.1 4.4l-75.8 27.6v-18.1c0-2.3 1.4-4.3 3.5-5.1l82.3-29.9m1.1-1.2-83.7 30.5c-2.4.9-4 3.2-4 5.8v19.2l76.8-28c2.2-.8 3.9-2.6 4.6-4.9l6.3-22.6z"
                      class="st1"/>
                <path d="M133.9 172.2c0-2.4 1.5-4.6 3.8-5.4l42.6-15.5-6.1 21.8c-.6 2.2-2.2 3.9-4.3 4.7l-36 13.1v-18.7z"
                      class="st0"/>
                <path d="m179.7 151.9-5.9 21.1c-.6 2.1-2.1 3.7-4.1 4.4l-35.5 12.9v-18.1c0-2.3 1.4-4.3 3.5-5.1l42-15.2m1.1-1.2-43.3 15.8c-2.4.9-4 3.2-4 5.8v19.2l36.5-13.3c2.2-.8 3.9-2.7 4.6-4.9l6.2-22.6z"
                      class="st1"/>
                <path d="M64.5 134.5c-2.1-.8-3.7-2.5-4.3-4.7L54 108.1l73.8 26.9 73.8-26.9-6.1 21.8c-.6 2.2-2.2 3.9-4.3 4.7l-63.4 23.1-63.3-23.2z"
                      class="st0"/>
                <path d="m54.6 108.7 73 26.6.3.1.3-.1 73-26.6-5.9 21.1c-.6 2-2.1 3.7-4.1 4.4l-63.2 23-63.2-23c-2-.7-3.5-2.4-4.1-4.4l-6.1-21.1m147.6-1.2-74.4 27.1-74.4-27.1 6.3 22.5c.6 2.3 2.3 4.1 4.6 4.9l63.5 23.1 63.5-23.1c2.2-.8 3.9-2.6 4.6-4.9l6.3-22.5z"
                      class="st1"/>
                <path d="M45.6 92.2c-2.1-.8-3.7-2.5-4.3-4.7l-6.1-21.8 83 30.2c2.3.8 3.8 3 3.8 5.4V120L45.6 92.2z"
                      class="st0"/>
                <path d="m35.6 66.3 82.3 30c2.1.8 3.5 2.8 3.5 5.1v18.1L45.7 91.8c-2-.7-3.5-2.4-4.1-4.4l-6-21.1m-1.1-1.2 6.3 22.5c.6 2.3 2.3 4.1 4.6 4.9l76.8 28v-19.2c0-2.6-1.6-4.9-4-5.8L34.5 65.1z"
                      class="st1"/>
                <path d="M85.9 177.7c-2.1-.8-3.7-2.5-4.3-4.7l-6.1-21.8 42.6 15.5c2.3.8 3.8 3 3.8 5.4v18.6l-36-13z"
                      class="st0"/>
                <path d="m76 151.9 41.9 15.3c2.1.8 3.5 2.8 3.5 5.1v18.1l-35.4-13c-2-.7-3.5-2.4-4.1-4.4L76 151.9m-1.1-1.2 6.3 22.5c.6 2.3 2.3 4.1 4.6 4.9l36.5 13.3v-19.2c0-2.6-1.6-4.9-4-5.8l-43.4-15.7z"
                      class="st1"/></svg>
        </div>
    </div>
</div>