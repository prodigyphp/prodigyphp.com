<div class="" style="scroll-padding-top: 7rem;">
    <header class="sticky top-0 bg-white relative z-[99] h-[5rem] md:h-[5rem] border-b border-gray-100 z-[100] bg-white absolute shadow-sm">
        <livewire:prodigy-block block_title="Global Header"/>
    </header>

    <div class="h-[calc(100%-5.5rem)] w-full">
        <div class="hidden lg:block bg-gradient-to-l from-gray-100 to-white lg:w-1/5 md:fixed z-20 inset-0 top-[5rem] right-auto pt-8 px-8 overflow-y-auto">
            <x-docs.sidebar></x-docs.sidebar>
        </div>

        <div class="overflow-y-scroll lg:w-4/5 xl:w-3/5 lg:px-12 lg:pt-12 xl:px-20 lg:ml-auto xl:mx-auto">
            <main class="max-w-2xl mx-auto relative z-20 prose lg:text-lg max-w-none" listen-for-intersection-of-titles>
                <livewire:prodigy-page/>

                <livewire:prodigy-block block_id="5"/>
            </main>
        </div>
        <div class="hidden hide-when-editing xl:block bg-gradient-to-r from-gray-100 to-white lg:w-1/5 md:fixed z-20 inset-0 top-[5rem] left-auto pt-8 px-8 overflow-y-auto">
            <x-docs.on-this-page/>
        </div>
    </div>
</div>
