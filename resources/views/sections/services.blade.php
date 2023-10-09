<section

    id="services" class="pt-20 lg:pt-64 relative" x-init="carousel = new Flickity(document.querySelector('#swiper-services'), {
    draggable: true,
    wrapAround: false,
    cellAlign: 'left',
    prevNextButtons: false,
    pageDots: false,
    dragThreshold: 10
});" x-data="{
    carousel: null,
}">

    <div class="pointer-events-none absolute w-[1062px] h-[1062px] -translate-x-1/2 "
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(116, 182, 33, 0.50) 0%, rgba(116, 182, 33, 0.40) 16.67%, rgba(116, 182, 33, 0.30) 33.85%, rgba(116, 182, 33, 0.20) 51.56%, rgba(116, 182, 33, 0.10) 67.71%, rgba(116, 182, 33, 0.00) 88.54%);height: 100%;aspect-ratio: 1;opacity: .6;top: 0;">
    </div>

    <div class="flex gap-x-[80px] items-end relative max-w-[1548px] mx-auto">
        <div class="hidden lg:pl-6 2xl:flex w-[275px] min-w-[275px]  flex-col gap-y-[60px]">
            <img width="215" src="{{ asset('/svg/wheelbarrow.svg') }}" alt="">
            <x-text class="text-white">
                Nous avons plusieurs cordes à notre arc et toujours le service qui conviendra à vos projets.
            </x-text>

        </div>
        <div class=" flex-1 relative">
            <div class="px-6  flex flex-col-reverse md:flex-row mb-8 gap-y-5 gap-x-10 md:items-center 2xl:pb-[492px] ">
                <div class="flex gap-x-5 md:gap-x-10 ">
                    <x-button theme="ghost" @click="carousel.previous()">
                        <img class="w-[60px] lg:w-[80px]" width="80" src="{{ asset('/svg/before.svg') }}"
                            alt="">
                    </x-button>
                    <x-button theme="ghost" @click="carousel.next()">
                        <img class="w-[60px] lg:w-[80px]" width="80" src="{{ asset('/svg/after.svg') }}"
                            alt="">
                    </x-button>
                </div>
                <x-text as="h2" theme="h1" class="text-primary">
                    Nos services
                </x-text>
            </div>
        </div>
    </div>



    <div id="swiper-services" class="carousel bottom-0 w-full pl-6 max-[454px]:px-6">
        @foreach ($services as $index => $service)
            <div
                class="w-[393px] mr-[20px] h-[492px] max-w-[100%] flex flex-col items-start justify-between bg-primary p-[40px] rounded-[25px]">
                <div class="">
                    <x-text as="h3" theme="h3"
                        class="leading-[1] font-semibold font-display text-secondary">
                        {{ $service['title'] }}
                    </x-text>
                    <x-text class="mt-5">
                        {{ $service['content'] }}
                    </x-text>
                </div>
                <div class="relative mt-8 flex items-center gap-x-[10px] flex-wrap gap-y-6">
                    <x-button theme="light" @click="$dispatch('modal-contact')">Faire un devis</x-button>

                </div>
            </div>
        @endforeach
    </div>
</section>
