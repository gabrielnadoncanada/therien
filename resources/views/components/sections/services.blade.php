<section {{ $attributes }}>
    <style>
        @media only screen and (min-width: 1548px) {
            #swiper-services {
                left: calc((50% - 1548px / 2) + 275px + 80px);
            }

        }
    </style>
    <div class="pointer-events-none absolute w-[1062px] h-[1062px] -translate-x-1/2 "
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(116, 182, 33, 0.50) 0%, rgba(116, 182, 33, 0.40) 16.67%, rgba(116, 182, 33, 0.30) 33.85%, rgba(116, 182, 33, 0.20) 51.56%, rgba(116, 182, 33, 0.10) 67.71%, rgba(116, 182, 33, 0.00) 88.54%);height: 100%;aspect-ratio: 1;opacity: .6;top: 0;">
    </div>

    <div class="flex gap-x-[80px] items-end relative max-w-[1548px] mx-auto">
        <div class="hidden lg:pl-6 2xl:flex w-[275px] min-w-[275px]  flex-col gap-y-[60px]">
            <img width="215" src="{{ asset('/svg/wheelbarrow.svg') }}" alt="">
            <x-text theme="invert">
                Nous avons plusieurs cordes à notre arc et toujours le service qui conviendra à vos projets.
            </x-text>

        </div>
        <div class=" flex-1 relative">
            <div class="px-6  flex flex-col-reverse md:flex-row mb-8 gap-y-5 gap-x-10 md:items-center 2xl:pb-[492px] ">
                <div class="flex gap-x-5 md:gap-x-10 ">
                    <x-button theme="ghost">
                        <img class="w-[60px] lg:w-[80px]" width="80" src="{{ asset('/svg/before.svg') }}"
                            alt="">
                    </x-button>
                    <x-button theme="ghost">
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

    <div id="swiper-services" class="px-6  bottom-0 2xl:absolute overflow-hidden">
        <x-slider id="servicers" desktop="auto" navigation="false" width="393">
            @foreach ($services as $index => $service)
                <x-slide
                    class="min-h-[492px] max-w-[100%] flex flex-col items-start justify-between bg-primary p-[40px] rounded-[25px]">
                    <div class="">
                        <x-text as="h3" theme="h3"
                            class="leading-[1] font-semibold font-display text-foreground text-[48px]">
                            {{ $service['title'] }}
                        </x-text>
                        <p class="mt-5 text-foreground">
                            {{ $service['content'] }}
                        </p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-[10px] flex-wrap gap-y-6">
                        <x-button theme="light" @click="toggle('contact')">Faire un devis</x-button>
                        <x-button theme="ghost" class="underline text-foreground text-[14px]">ou appelez-nous
                        </x-button>
                    </div>
                </x-slide>
            @endforeach
        </x-slider>
    </div>
</section>
