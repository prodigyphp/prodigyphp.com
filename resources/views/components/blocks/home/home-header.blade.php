<div>
    <div class="fixed inset-0 z-[0] bg-gradient-to-bl from-gray-50 to-white"></div>
    <div class="fixed inset-0 z-[1]">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             class="w-full h-full"
             preserveAspectRatio="none"
             viewBox="0 0 568 318" style="enable-background:new 0 0 568 318;" xml:space="preserve">
    <style type="text/css">
        .st0 {
            opacity: 0.2;
            fill: none;
            stroke: rgba(186, 199, 239, 0.5);
            stroke-width: 0.5;
            stroke-miterlimit: 10;
        }
    </style>
            <g>
                <line class="st0" x1="168.2" y1="-10.5" x2="264.2" y2="331.5"/>
                <line class="st0" x1="177" y1="-10.5" x2="273" y2="331.5"/>
                <line class="st0" x1="160.6" y1="-10.5" x2="256.6" y2="331.5"/>
            </g>
            <line class="st0" x1="621.8" y1="100.3" x2="-38.8" y2="342.3"/>
            <line class="st0" x1="621.8" y1="65.3" x2="-38.8" y2="307.3"/>
            <line class="st0" x1="621.8" y1="30.3" x2="-38.8" y2="272.3"/>
            <g>
                <line class="st0" x1="400.8" y1="-16.1" x2="304.8" y2="325.9"/>
                <line class="st0" x1="392" y1="-16.1" x2="296" y2="325.9"/>
                <line class="st0" x1="408.4" y1="-16.1" x2="312.4" y2="325.9"/>
            </g>
            <line class="st0" x1="-36" y1="107" x2="624.6" y2="349"/>
            <line class="st0" x1="-36" y1="72" x2="624.6" y2="314"/>
            <line class="st0" x1="-36" y1="36" x2="624.6" y2="278"/>
    </svg>
    </div>

    <div class="z-[1] relative max-w-[750px] mx-auto text-center font-extrabold leading-tight lg:text-8xl min-h-screen w-full flex items-center justify-center">
        <div>
            <div class="text-transparent bg-clip-text bg-gradient-to-b from-gray-900 to-gray-800 mb-8">{{ $title ?? '' }}</div>
            <div class="text-center text-center text-2xl font-[351] text-gray-600">
                {!!  $subtitle ??'' !!}
            </div>
            <div class="text-center">
                <a href="{{ $buttonLink ?? '' }}"
                   class="inline-block text-[16px] lg:text-2xl font-medium px-2 py-2 rounded-md hover:ring-2 hover:ring-blue-300">
                    {{ $buttonText ?? '' }} &#8594
                </a>
            </div>
        </div>
    </div>

</div>