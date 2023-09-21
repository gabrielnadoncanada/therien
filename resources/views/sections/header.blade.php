<header x-data="{ open: false }" @keydown.window.escape="open = false" class="px-6 fixed z-10 w-full">
    <nav
        class="z-[2] relative mt-[20px] mx-auto flex max-w-[635px] justify-between gap-x-[32px] px-[30px] py-[20px]  rounded-[60px] bg-secondary"
        style="box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.25)" aria-label="Global">
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="-mt-[5px] min-w-[115px] ">
                <span class="sr-only">Thérien Inc.</span>
                <img src="{{ asset('/svg/logo.svg') }}" width="115" alt="">
            </a>
        </div>

        <x-nav class="hidden md:flex  items-center justify-center">
            <x-nav-link link="/#a-propos">À&nbsp;propos</x-nav-link>
            <x-nav-link link="/#services">Services</x-nav-link>
            <x-nav-link :link="route('gallery')">Gallerie</x-nav-link>
        </x-nav>

        <div class="flex justify-end gap-x-[20px] items-center justify-center">
            <a class="hidden xxs-block" href="tel:5148388063"><img src="{{ asset('/svg/phone.svg') }}" width="21" alt=""></a>
            <a class="hidden xxs-block" href="mailto:paysagistestephanetherien@hotmail.ca"><img src="{{ asset('/svg/mail.svg') }}" width="24" alt=""></a>
            <a class="hidden xxs-block" target="_blank" href="https://www.facebook.com/profile.php?id=100063790350406"><img src="{{ asset('/svg/facebook.svg') }}" width="24" alt=""></a>
            <button @click="open = true" type="button"
                    class="md:hidden inline-flex items-center justify-center rounded-md  text-primary">
                <div x-show="!open">
                    <span class="sr-only">Ouvrir le menu principal</span>
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </div>
                <div x-show="open">
                    <span class="sr-only">Fermer le menu principal</span>
                    <svg class="h-7 w-7" width="34" height="34" viewBox="0 0 34 34" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.41748 8.41719L25.2519 25.2516" stroke="#ABE85E" stroke-width="2"
                              stroke-linecap="round"/>
                        <path d="M25.2515 8.41719L8.41709 25.2516" stroke="#ABE85E" stroke-width="2"
                              stroke-linecap="round"/>
                    </svg>
                </div>
            </button>
        </div>
    </nav>
    <div class="lg:hidden" x-ref="dialog" x-show="open" aria-modal="true">
        <div class="fixed inset-0 z-[1]"></div>
        <div
            class="rounded-[35px] fixed left-[1.5rem] right-[1.5rem] z-[1]  top-[20px] overflow-y-auto bg-secondary px-[30px] pt-[80px] py-[20px] sm:ring-1 sm:ring-gray-900/10"
            @click.away="open = false">
            <div class="flow-root">
                <div class="divide-y divide-gray-500/10">
                    <div class="space-y-2 ">
                        <a href="{{route('home') . '#a-propos'}}"
                           class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-primary hover:text-secondary">
                            À&nbsp;propos</a>
                        <a href="{{route('home') . '#services'}}"
                           class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-primary hover:text-secondary">
                            Services</a>
                        <a href="{{route('gallery')}}"
                           class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-primary hover:text-secondary">
                            Gallerie</a>

                        <div class="flex justify-around py-[1rem] gap-x-4 items-center xxs-hidden">
                            <a class="xxs-hidden" href="tel:5148388063"><img src="{{ asset('/svg/phone.svg') }}" width="21" alt=""></a>
                            <a class="xxs-hidden" href="mailto:paysagistestephanetherien@hotmail.ca"><img src="{{ asset('/svg/mail.svg') }}" width="24" alt=""></a>
                            <a class="xxs-hidden" target="_blank" href="https://www.facebook.com/profile.php?id=100063790350406"><img src="{{ asset('/svg/facebook.svg') }}" width="24" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
