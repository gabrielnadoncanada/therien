<header x-data="{ open: false }" @keydown.window.escape="open = false" class="px-6 absolute z-10 w-full">
    <nav class="mt-[20px] mx-auto flex max-w-[635px] justify-between gap-x-[32px] px-[30px] py-[20px]  rounded-[60px] bg-[#161A15]"
         style="box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.25)" aria-label="Global">
        <div class="flex items-center">
            <a href="#" class="-mt-[5px] min-w-[115px] ">
                <span class="sr-only">Your Company</span>
                <img src="{{ asset('/svg/logo.svg') }}" width="115" alt="">
            </a>
        </div>
        {{--      <div class="flex lg:hidden">--}}
        {{--        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"--}}
        {{--				@click="open = true">--}}
        {{--          <span class="sr-only">Open main menu</span>--}}
        {{--          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"--}}
        {{--			   aria-hidden="true">--}}
        {{--  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>--}}
        {{--</svg>--}}
        {{--        </button>--}}
        {{--      </div>--}}

        <x-nav class="hidden md:flex  items-center justify-center">
            <x-nav-link link="/#a-propos">À&nbsp;propos</x-nav-link>
            <x-nav-link link="/#services">Services</x-nav-link>
            <x-nav-link>Gallerie</x-nav-link>
        </x-nav>

        <div class="flex justify-end gap-x-[20px] items-center justify-center">
            <a href=""><img src="{{ asset('/svg/phone.svg') }}" width="21" alt=""></a>
            <a href=""><img src="{{ asset('/svg/mail.svg') }}" width="24" alt=""></a>
            <a href=""><img src="{{ asset('/svg/facebook.svg') }}" width="24" alt=""></a>
            <button type="button" class="md:hidden inline-flex items-center justify-center rounded-md  text-primary">
                <span class="sr-only">Open main menu</span>
                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
        </div>
    </nav>
    {{--    <div x-description="Mobile menu, show/hide based on menu open state." class="lg:hidden" x-ref="dialog" x-show="open"--}}
    {{--		 aria-modal="true" style="display: none;">--}}
    {{--      <div x-description="Background backdrop, show/hide based on slide-over state." class="fixed inset-0 z-10"></div>--}}
    {{--      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"--}}
    {{--		   @click.away="open = false">--}}
    {{--        <div class="flex items-center justify-between">--}}
    {{--          <a href="#" class="-m-1.5 p-1.5">--}}
    {{--            <span class="sr-only">Your Company</span>--}}
    {{--            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="">--}}
    {{--          </a>--}}
    {{--          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">--}}
    {{--            <span class="sr-only">Close menu</span>--}}
    {{--            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"--}}
    {{--				 aria-hidden="true">--}}
    {{--  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>--}}
    {{--</svg>--}}
    {{--          </button>--}}
    {{--        </div>--}}
    {{--        <div class="mt-6 flow-root">--}}
    {{--          <div class="-my-6 divide-y divide-gray-500/10">--}}
    {{--            <div class="space-y-2 py-6">--}}
    {{--              <a href="#"--}}
    {{--				 class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">À propos</a>--}}
    {{--              <a href="#"--}}
    {{--				 class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Services</a>--}}
    {{--              <a href="#"--}}
    {{--				 class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Gallerie</a>--}}
    {{--              <a href="#"--}}
    {{--				 class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>--}}

    {{--            </div>--}}
    {{--            <div class="py-6">--}}
    {{--				<a href="">--}}
    {{--					<img src="{{ asset('/svg/phone.svg') }}" width="25" alt="">--}}
    {{--				</a>--}}
    {{--              <a href="#"--}}
    {{--				 class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--        </div>--}}
    {{--      </div>--}}
    {{--    </div>--}}
</header>