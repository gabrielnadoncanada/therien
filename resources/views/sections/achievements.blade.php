<section id="a-propos" class="pt-20 lg:pt-44 pb-20 lg:pb-36 relative">
    <div class="absolute w-[1062px] h-[1062px] left-1/2 top-0 -translate-x-1/2 -translate-y-[75%] z-[-1]"
         style="background: radial-gradient(50% 50% at 50% 50%, rgba(116, 182, 33, 0.50) 0%, rgba(116, 182, 33, 0.40) 16.67%, rgba(116, 182, 33, 0.30) 33.85%, rgba(116, 182, 33, 0.20) 51.56%, rgba(116, 182, 33, 0.10) 67.71%, rgba(116, 182, 33, 0.00) 88.54%);">
    </div>

    <div class="mx-auto max-w-[1548px] px-6">
        <div class="grid grid-cols-12 gap-y-[60px]">
            <div class="col-span-12 md:col-span-5">
                <div class="mx-auto  lg:mx-0 flex flex-col gap-y-8 lg:gap-y-[61px]">
                    <x-text as="h2" theme="h1" class="text-primary">Nous n’avons qu’un but,
                        <span class="text-white block">le vôtre.</span>
                    </x-text>
                    <div class="flex flex-col gap-y-6">
                        <x-text class="text-white">Nous vous offrons bien plus qu'une simple prestations.</x-text>
                        <x-text class="text-white">Nous créons des expériences captivantes pour vos espaces extérieurs.
                            Chaque projet
                            devient
                            une toile où notre créativité audacieuse et notre expertise technique se conjuguent pour
                            donner vie à des environnements uniques.
                        </x-text>
                        <x-text class="text-white">Votre espace devient une expression de notre passion, où l'innovation
                            rencontre
                            l'élégance
                            pour créer une expérience visuelle inoubliable.
                        </x-text>
                    </div>
                    <x-button theme="large" class="mr-auto" @click="$dispatch('modal-contact')">Ca m’intéresse</x-button>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 md:col-start-7">
                <div class="relative ">
                    <img class="hidden lg:block absolute top-[-45px] right-[-100px] z-[20]"
                         src="{{ asset('/svg/paint.svg') }}" alt="">
                    <div id="swiper-projects" class="carousel"
                         x-data="{ showAfter: false, carousel: null }"
                         x-init="carousel = new Flickity(document.querySelector('#swiper-projects'), {
                            draggable: true,
                            wrapAround: true,
                            cellAlign: 'left',
                            prevNextButtons: false,
                            dragThreshold: 10
                        });">

                        @foreach ($achievements as $index => $achievement)
                            <div class="w-full h-full rounded-[50px] ">
                                <div class="hasFilter">
                                    <img class="w-full aspect-[35/44] absolute rounded-[50px]  object-cover "
                                         width="700"
                                         src="{{ $achievement->getMedia('achievements-featured-images-before')[0]->getUrl() }}"
                                         alt=""
                                         :class="{
                                        'z-[-1] right-0 top-[30px] lg:top-[60px]': showAfter,
                                        'z-[1] ': !showAfter
                                    }">

                                    <img class="w-full aspect-[35/44] absolute rounded-[50px]  object-cover "
                                         width="700"
                                         src="{{ $achievement->getMedia('achievements-featured-images-after')[0]->getUrl() }}" alt=""
                                         :class="{
                                        'top-0 ': showAfter,
                                        'z-[-1] right-0 top-[30px] lg:top-[60px]': !showAfter
                                    }">
                                </div>
                                <x-button theme="outline.light" @click="showAfter = !showAfter"
                                          x-text="showAfter ? 'Voir l’avant' : 'Voir l’après'"
                                          class="z-[2] absolute left-[40px] bottom-[72px] lg:bottom-[102px]">
                                </x-button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class=" hidden xl:flex justify-center -mt-8">
            <img src="{{ asset('images/blocks.svg') }}" alt="" width="300">
        </div>
    </div>
</section>
