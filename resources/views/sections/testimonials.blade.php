<section class="pt-20 relative lg:pt-96">

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

    <div id="swiper-testimonials" class="w-full carousel pl-6 max-[454px]:px-6 overflow-hidden swiper-container 2xl:absolute bottom-0 "
        x-init="carousel = new Flickity(document.querySelector('#swiper-testimonials'), {
            draggable: true,
            wrapAround: false,
            cellAlign: 'left',
            prevNextButtons: false,
            pageDots: false,
            autoplay: false,
            dragThreshold: 10
        });" x-data="{
            carousel: null,
        }">

        @foreach ($testimonials as $index => $testimonial)
            <div
                class="min-h-[210px] h-full w-[393px] mr-[20px] max-w-[100%] lg:w-[475px] rounded-[25px] mx-auto  flex gap-x-[32px]  p-[40px]   border border-primary ">
                <div class="flex flex-col gap-y-[12px]">
                    <div class="flex gap-x-[2px] text-primary">
                        @for ($i = 0; $i < 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-none" viewBox="0 0 16 16"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                                    fill="#ABE85E" />
                            </svg>
                        @endfor
                    </div>
                    <x-text as="h3" theme="h4" class="text-primary">{{ $testimonial['title'] }}</x-text>
                    <x-text class="text-white">{{ $testimonial['content'] }}</x-text>
                </div>
            </div>
        @endforeach

    </div>
</section>
