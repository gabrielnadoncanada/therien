@php
	$projects = [
		[
			'before_url' => '/images/image 3.png',
			'after_url' => '/images/image 3.png',
		],
		[
			'before_url' => '/images/image 3.png',
			'after_url' => '/images/image 3.png',
		],
		[
			'before_url' => '/images/image 3.png',
			'after_url' => '/images/image 3.png',
		],
		[
			'before_url' => '/images/image 3.png',
			'after_url' => '/images/image 3.png',
		],
		[
			'before_url' => '/images/image 3.png',
			'after_url' => '/images/image 3.png',
		],
		[
			'before_url' => '/images/image 3.png',
			'after_url' => '/images/image 3.png',
		],
		[
			'before_url' => '/images/image 3.png',
			'after_url' => '/images/image 3.png',
		],
	];

@endphp

<section {{ $attributes }}>
    <div class="mx-auto max-w-[1500px] md:px-6">
        <div class="flex  gap-x-[174px] gap-y-16 sm:gap-y-20  lg:items-start">
            <div class="flex-1">
                <div class="mx-auto  lg:mx-0  flex flex-col gap-y-[61px]">
                    <h2 class="text-primary font-display text-[96px] tracking-tighter leading-[1]">Nous n’avons qu’un
                        but,
                        <span class="text-white block">le vôtre.</span>
                    </h2>
                    <div class="flex flex-col gap-y-6">
                        <p class="text-[22px] text-white  font-normal font-medium leading-normal">
                            Nous vous offrons bien plus qu'une simple prestations.
                        </p>
                        <p class="text-[22px] text-white  font-normal font-medium leading-normal">
                            Nous créons des expériences captivantes pour vos espaces extérieurs. Chaque projet devient
                            une toile où notre créativité audacieuse et notre expertise technique se conjuguent pour
                            donner vie à des environnements uniques.
                        </p>
                        <p class="text-[22px] text-white  font-normal font-medium leading-normal">
                            Votre espace devient une expression de notre passion, où l'innovation rencontre l'élégance
                            pour créer une expérience visuelle inoubliable.
                        </p>
                    </div>
                    <x-button theme="large" class="mr-auto">Ca m’intéresse</x-button>
                </div>
            </div>
            <div class="">
                <div class="relative  sm:mx-auto sm:max-w-2xl sm:rounded-3xl  sm:pr-0 lg:mx-0 ">
                    <div x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
 spaceBetween: 30,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
                    })">
						<img class="absolute top-[-45px] right-[-154px] z-[20]" src="{{ asset('/svg/paint.svg') }}" alt="">


                        <div x-ref="container" class="swiper-container overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach ($projects as $index => $project)
									<div class="swiper-slide">
											<img src="{{ asset($project['before_url']) }}" alt="Product screenshot"
												 width="2432" height="1442"
												 class="  aspect-[700/880] object-cover rounded-[50px] ">
									</div>

								@endforeach
                            </div>
<div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center -mt-8">
            <img src="{{ asset('images/blocks.svg') }}" alt="" width="300">
        </div>

    </div>

</section>
