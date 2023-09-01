<section {{ $attributes }}  x-data="{swiper: null}"
         x-init="swiper = new Swiper($refs.container, {
    width: 393,
      slidesPerView: 'auto',
      spaceBetween: 20,
    })">

    <style>
        @media only screen and (min-width: 1600px){
            #swiper-services {
                left: calc((50% - 1600px / 2) + 275px + 80px);
            }

        }

    </style>
    <div class="flex gap-x-[80px] items-end relative max-w-[1600px] mx-auto">
        <div class="hidden 2xl:flex w-[275px] min-w-[275px]  flex-col gap-y-[60px]">
            <img width="215" src="{{ asset('/svg/wheelbarrow.svg') }}" alt="">
            <p class="text-white text-[22px] text-normal font-normal leading-normal leading[1.25]">
                Nous avons plusieurs cordes à notre arc et toujours le service qui conviendra à vos projets
            </p>
        </div>
        <div class=" flex-1 relative">
            <div class="flex gap-x-[40px] mb-[35px] items-center pb-[492px] ">
                <x-button theme="ghost" @click="swiper.slidePrev()"><img width="80" src="{{ asset('/svg/before.svg') }}"
                                                                         alt=""></x-button>
                <x-button theme="ghost" @click="swiper.slideNext()"><img width="80" src="{{ asset('/svg/after.svg') }}"
                                                                         alt=""></x-button>
                <h2 class="text-primary font-display text-[96px] font-normal font-[400] leading-[1] tracking-[-1.92px]">
                    Nos services
                </h2>
            </div>
        </div>
    </div>
    <div class="max-w-[25vw] absolute w-[550px] h-[1355px] bg-gradient-to-l from-[#161915] to-transparent z-[2] right-0 top-0"></div>
    <div x-ref="container" id="swiper-services" class="swiper-container  bottom-0 absolute overflow-hidden"
         style="">


        <div
                class="swiper-wrapper"
                {{--							class="swiper-wrapper mx-auto flex max-w-2xl gap-x-[20px] gap-y-16 lg:mx-0 max-w-none services-container"--}}
        >
            @foreach($services as $index => $service)
                <article
                        class="swiper-slide min-h-[492px] max-w-[393px] flex flex-col items-start justify-between bg-primary p-[40px] rounded-[25px]"
                        class="swiper-slide bg-primary">
                    <div class="">
                        <h3 class="leading-[1] font-semibold font-display text-foreground text-[48px]">
                            {{ $service['title'] }}
                        </h3>
                        <p class="mt-5 text-foreground">
                            {{ $service['content'] }}
                        </p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-[10px] flex-wrap gap-y-6">
                        <x-button theme="light">Faire un devis</x-button>
                        <x-button theme="ghost"
                                  class="underline text-foreground text-[14px]">ou appelez-nous
                        </x-button>
                    </div>
                </article>
            @endforeach
        </div>
    </div>


</section>