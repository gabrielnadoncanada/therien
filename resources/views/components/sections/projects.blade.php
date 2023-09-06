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
    <div class="absolute w-[1062px] h-[1062px] left-1/2 top-0 -translate-x-1/2 -translate-y-[75%] z-[-1]"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(116, 182, 33, 0.50) 0%, rgba(116, 182, 33, 0.40) 16.67%, rgba(116, 182, 33, 0.30) 33.85%, rgba(116, 182, 33, 0.20) 51.56%, rgba(116, 182, 33, 0.10) 67.71%, rgba(116, 182, 33, 0.00) 88.54%);">
    </div>

    <div class="mx-auto max-w-[1548px] px-6">
        <div class="flex flex-col lg:flex-row gap-[80px]  lg:gap-x-30 justify-between">
            <div class="lg:min-w-[450px] lg:max-w-[584px]">
                <div class="mx-auto  lg:mx-0 flex flex-col gap-y-8 lg:gap-y-[61px]">
                    <x-text as="h2" theme="h1" class="text-primary">Nous n’avons qu’un but,
                        <span class="text-white block">le vôtre.</span>
                    </x-text>
                    <div class="flex flex-col gap-y-6">
                        <x-text theme="invert">Nous vous offrons bien plus qu'une simple prestations.</x-text>
                        <x-text theme="invert">Nous créons des expériences captivantes pour vos espaces extérieurs.
                            Chaque projet
                            devient
                            une toile où notre créativité audacieuse et notre expertise technique se conjuguent pour
                            donner vie à des environnements uniques.
                        </x-text>
                        <x-text theme="invert">Votre espace devient une expression de notre passion, où l'innovation
                            rencontre
                            l'élégance
                            pour créer une expérience visuelle inoubliable.
                        </x-text>
                    </div>
                    <x-button theme="large" class="mr-auto" @click="toggle('contact')">Ca m’intéresse</x-button>
                </div>
            </div>
            <div class="lg:min-w-[450px] lg:max-w-[750px]">
                <div class="relative sm:mx-auto  sm:rounded-3xl  sm:pr-0 lg:mx-0 ">
                    <img class="hidden lg:block absolute top-[-45px] right-[-100px] z-[20]"
                        src="{{ asset('/svg/paint.svg') }}" alt="">
                    <x-slider id="projects" navigation="false" pagination="true" desktop="1">
                        @foreach ($projects as $index => $project)
                            <x-slide class="pr-[60px]">
                                <img src="{{ asset($project['before_url']) }}" alt="Product screenshot"
                                    class="mr-[60px]  aspect-[700/880] object-cover rounded-[50px] ">

                                <div class="z-[-1] rounded-[50px] w-full  h-full absolute left-0 top-[60px] bottom-0 right-0"
                                    style="background-repeat: no-repeat; background: linear-gradient(180deg, rgba(22, 25, 21, 0.00) 0%, #161915 61.98%),url('{{ asset($project['before_url']) }}');background-size: cover;  ">
                                </div>

                            </x-slide>
                        @endforeach
                    </x-slider>
                </div>
            </div>
        </div>
        <div class=" hidden xl:flex justify-center -mt-8">
            <img src="{{ asset('images/blocks.svg') }}" alt="" width="300">
        </div>
    </div>
</section>
