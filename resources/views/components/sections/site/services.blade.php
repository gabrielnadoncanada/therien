@php
	$services = [
		[
			'title' => 'Pavé Uni',
			'description' => 'Installation : Création de surfaces durables et esthétiques en utilisant des pavés unis pour des allées, des terrasses, des sentiers, etc.',
			'button' => 'Faire un devis',
			'button_url' => '#'
		],
		[
			'title' => 'Muret',
			'description' => 'Installation : Création de surfaces durables et esthétiques en utilisant des pavés unis pour des allées, des terrasses, des sentiers, etc.',
			'button' => 'Faire un devis',
			'button_url' => '#'
		],
		[
			'title' => 'Tourbe',
			'description' => 'Installation : Création de surfaces durables et esthétiques en utilisant des pavés unis pour des allées, des terrasses, des sentiers, etc.',
			'button' => 'Faire un devis',
			'button_url' => '#'
		],
		[
			'title' => 'Déneigement',
			'description' => 'Installation : Création de surfaces durables et esthétiques en utilisant des pavés unis pour des allées, des terrasses, des sentiers, etc.',
			'button' => 'Faire un devis',
			'button_url' => '#'
		],
		[
			'title' => 'Excavation',
			'description' => 'Installation : Création de surfaces durables et esthétiques en utilisant des pavés unis pour des allées, des terrasses, des sentiers, etc.',
			'button' => 'Faire un devis',
			'button_url' => '#'
	    ],
	    [
            'title' => 'Pavé Uni',
            'description' => 'Installation : Création de surfaces durables et esthétiques en utilisant des pavés unis pour des allées, des terrasses, des sentiers, etc.',
            'button' => 'Faire un devis',
            'button_url' => '#'
        ],
        [
            'title' => 'Muret',
            'description' => 'Installation : Création de surfaces durables et esthétiques en utilisant des pavés unis pour des allées, des terrasses, des sentiers, etc.',
            'button' => 'Faire un devis',
            'button_url' => '#'
        ]
	];


@endphp

<section {{ $attributes }}>
    <div class="flex gap-x-[80px] items-end relative">
        <div class="w-[275px] min-w-[275px] flex flex-col gap-y-[60px]">
            <img width="215" src="{{ asset('/svg/wheelbarrow.svg') }}" alt="">
            <p class="text-white text-[22px] text-normal font-normal leading-normal leading[1.25]">
                Nous avons plusieurs cordes à notre arc et toujours le service qui conviendra à vos projets
            </p>
        </div>
		<div
				class="overflow-hidden flex-1"
				x-data="{swiper: null}"
				x-init="swiper = new Swiper($refs.container, {
      loop: true,
      slidesPerView: 'auto',
      spaceBetween: 20,
    })"

		>
            <div class="flex gap-x-[40px] mb-[35px] items-center pb-[492px]">
               <x-button theme="ghost" @click="swiper.slidePrev()"><img width="80" src="{{ asset('/svg/before.svg') }}"
																		alt=""></x-button>
				<x-button theme="ghost" @click="swiper.slideNext()"><img width="80" src="{{ asset('/svg/after.svg') }}"
																		 alt=""></x-button>

                <h2 class="text-primary font-display text-[96px] font-normal font-[400] leading-[1] tracking-[-1.92px]">
                    Nos services
                </h2>
            </div>

            <div class="absolute w-[550px] h-[1355px] bg-gradient-to-l from-[#161915] to-transparent z-[2] right-0"></div>
			<div x-ref="container" class="swiper-container absolute bottom-0">
 					<div
							class="swiper-wrapper"
							{{--							class="swiper-wrapper mx-auto flex max-w-2xl gap-x-[20px] gap-y-16 lg:mx-0 max-w-none services-container"--}}
					>
                @foreach($services as $index => $service)
							<article
							 class="swiper-slide min-h-[492px] max-w-[393px] flex flex-col items-start justify-between bg-primary p-[40px] rounded-[25px]"
									class="swiper-slide bg-primary" >
                <div class="">
                    <h3 class="leading-[1] font-semibold font-display text-foreground text-[48px]">
                        {{ $service['title'] }}
                    </h3>
                    <p class="mt-5 text-foreground">
                        {{ $service['description'] }}
                    </p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-[10px] flex-wrap gap-y-6">
                    <x-button theme="light">{{ $service['button'] }}</x-button>
                    <x-button theme="ghost"
							  class="underline text-foreground text-[14px]">ou appelez-nous</x-button>
                </div>
            </article>
						@endforeach
            </div>
			</div>

        </div>
		{{--        <div x-data="{pos: 0}">--}}
		{{--            <div class="flex gap-x-[40px] mb-[35px] items-center">--}}
		{{--                <x-button theme="ghost"><img width="80" src="{{ asset('/svg/before.svg') }}" alt=""></x-button>--}}
		{{--                <x-button theme="ghost"><img width="80" src="{{ asset('/svg/after.svg') }}" alt=""></x-button>--}}
		{{--                <h2 class="text-primary font-display text-[96px] font-normal font-[400] leading-[1] tracking-[-1.92px]">--}}
		{{--                    Nos services--}}
		{{--                </h2>--}}
		{{--            </div>--}}
		{{--            <div style="transform: translate3d("px,0,0);" class="mx-auto flex max-w-2xl gap-x-[20px] gap-y-16 lg:mx-0 max-w-none ">--}}
		{{--                @foreach($services as $service)--}}
		{{--					<article class="min-w-[393px] min-h-[492px] flex flex-col items-start justify-between bg-primary p-[40px] rounded-[25px]">--}}

		{{--                            <div class="">--}}
		{{--                                <h3 class="leading-[1] font-semibold font-display text-foreground text-[48px]">--}}
		{{--                                    {{ $service['title'] }}--}}
		{{--                                </h3>--}}
		{{--                                <p class="mt-5 text-foreground">--}}
		{{--                                    {{ $service['description'] }}--}}
		{{--                                </p>--}}
		{{--                            </div>--}}
		{{--                            <div class="relative mt-8 flex items-center gap-x-[10px] flex-wrap gap-y-6">--}}
		{{--                                <x-button theme="light">{{ $service['button'] }}</x-button>--}}
		{{--                                <x-button theme="ghost"--}}
		{{--										  class="underline text-foreground text-[14px]">ou appelez-nous</x-button>--}}
		{{--                            </div>--}}

		{{--                    </article>--}}
		{{--				@endforeach--}}
		{{--            </div>--}}

	</div>
</section>