<section class="pt-20 relative lg:pt-96" >

    <style>
        @media only screen and (min-width: 1548px) {
            #swiper-testimonials {
                left: calc((50% - 1548px / 2) + 60px + 80px);
            }

        }
    </style>
    <div class="hidden max-w-[1548px]
 mx-auto 2xl:flex gap-x-[67px]  items-center px-6">
        <svg class="min-w-[60px]" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
            fill="none">
            <path
                d="M12.1875 26.25H2.8125C1.25918 26.25 0 27.5092 0 29.0625V57.1875C0 58.7408 1.25918 60 2.8125 60H12.1875C13.7408 60 15 58.7408 15 57.1875V29.0625C15 27.5092 13.7408 26.25 12.1875 26.25ZM7.5 55.3125C5.94668 55.3125 4.6875 54.0533 4.6875 52.5C4.6875 50.9467 5.94668 49.6875 7.5 49.6875C9.05333 49.6875 10.3125 50.9467 10.3125 52.5C10.3125 54.0533 9.05333 55.3125 7.5 55.3125ZM45 9.54516C45 14.5158 41.9567 17.3039 41.1004 20.625H53.021C56.9348 20.625 59.9816 23.8765 59.9999 27.4334C60.0098 29.5355 59.1156 31.7985 57.7219 33.1986L57.709 33.2115C58.8617 35.9463 58.6743 39.7784 56.6182 42.5243C57.6355 45.5589 56.6102 49.2865 54.6985 51.2849C55.2021 53.3471 54.9614 55.1023 53.978 56.5152C51.5862 59.9516 45.6582 60 40.6452 60L40.3118 59.9999C34.6532 59.9979 30.0221 57.9376 26.3009 56.2821C24.4309 55.4502 21.9859 54.4204 20.1308 54.3862C19.3644 54.3722 18.75 53.7468 18.75 52.9802V27.9291C18.75 27.5541 18.9002 27.1942 19.167 26.9305C23.8092 22.3433 25.8054 17.4867 29.6104 13.6753C31.3452 11.9372 31.9762 9.31172 32.5861 6.77273C33.1072 4.60465 34.1973 0 36.5625 0C39.375 0 45 0.9375 45 9.54516Z"
                fill="#ABE85E" />
            <div class="pb-[200px]">

            </div>
        </svg>
    </div>

    <div id="swiper-testimonials" class="px-6 overflow-hidden swiper-container 2xl:absolute bottom-0 ">
        <x-slider id="testimonials" desktop="auto"  navigation="false" pagination="false" width="500">
            @foreach ($testimonials as $index => $testimonial)
                <x-slide
                    class="max-w-[500px]  swiper-slide mx-auto  flex gap-x-[32px]  rounded-[50px] px-[50px] py-[40px] lg:px-[40px]  border border-primary lg:rounded-[200px]">
                    <div class="hidden lg:flex items-center gap-x-6 min-w-[111px]">
                        <img width="111" height="111" class="rounded-full bg-gray-50"
                            src="{{ $testimonial['image'] }}" alt="{{ $testimonial['title'] }}">
                    </div>
                    <div>
                        <div class="flex gap-x-[2px] text-primary">
                            @for ($i = 0; $i < $testimonial['rating']; $i++)
                                <svg class="h-4 w-4 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            @endfor
                        </div>
                        <h3 class="text-gray-900 text-primary font-display text-[36px] leading-1">
                            {{ $testimonial['title'] }}</h3>
                        <p class="text-white">
                            {{ $testimonial['content'] }}
                        </p>
                    </div>
                </x-slide>
            @endforeach
        </x-slider>
    </div>
</section>
