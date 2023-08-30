<header class="">
    <div class="absolute z-60 left-0 right-0 top-0  pb-16 pt-14" :class="openMenu ? 'bg-neutral-950' : 'bg-white '">
        <x-container>
            <div class="flex items-center justify-between relative z-[70]">
                @if (get_field('logo', 'option'))
					<a aria-label="Home" href="/">
                        <img src="{{ get_field('logo' , 'option') }}" alt="" class="group/logo h-8" :class="openMenu ? 'brightness-200 invert' : ''">
                    </a>
				@endif
				<div class="flex items-center gap-x-8">
                    <x-button x-show="!openMenu" href="#contact">
                         <span class="relative top-px">Contactez-nous</span>
                    </x-button>
                    <x-button x-show="openMenu" href="#contact" theme="invert">
                         <span class="relative top-px">Contactez-nous</span>
                    </x-button>


                    <x-button type="button" theme="ghost" @click="openMenu = !openMenu" aria-expanded="false"
							  aria-controls=":R3a:"
							  class="group -m-2.5 rounded-full p-2.5 transition hover:bg-neutral-950/10"
							  aria-label="Toggle navigation">
                        <svg x-show="!openMenu" viewBox="0 0 24 24" aria-hidden="true"
							 class="h-6 w-6 fill-neutral-950 group-hover:fill-neutral-700">
                            <path d="M2 6h20v2H2zM2 16h20v2H2z"></path>
                        </svg>
                          <svg x-show="openMenu" viewBox="0 0 24 24" aria-hidden="true"
                               class="h-6 w-6 fill-white group-hover:fill-neutral-200">
                            <path d="m5.636 4.223 14.142 14.142-1.414 1.414L4.222 5.637z"></path>
                            <path d="M4.222 18.363 18.364 4.22l1.414 1.414L5.636 19.777z"></path>
                        </svg>
                    </x-button>
                </div>
            </div>
        </x-container>
    </div>

    <div id=":R3a:" x-show="openMenu" class="pt-40 relative z-50 overflow-hidden bg-neutral-950 pt-2"
		 :class="openMenu ? 'h-auto' : ''">
        <div class="bg-neutral-800">
            <nav class="font-display text-5xl font-medium tracking-tight text-white">
                <div class="sm:bg-neutral-950">
                    <x-container>
                        {{ wp_nav_menu([
                            'theme_location' => 'primary_navigation',
                            'container' => 'div',
                            'menu_id' => 'main-menu',
                            'menu_class' => 'grid grid-cols-1 sm:grid-cols-2',
                        ]) }}
                    </x-container>
                </div>
            </nav>
            <div class="relative bg-neutral-950 before:absolute before:inset-x-0 before:top-0 before:h-px before:bg-neutral-800">
                <x-container>
                    <div class="grid grid-cols-1 gap-y-10 pb-16 pt-10 sm:grid-cols-2 sm:pt-16">
                        <div>
                            <h2 class="font-display text-base font-semibold text-white">Notre adresse</h2>
                            <x-offices class="mt-6" invert></x-offices>
                        </div>
                        <div class="sm:border-l sm:border-transparent sm:pl-16">
                            <h2 class="font-display text-base font-semibold text-white">Suivez-nous</h2>
                            <x-social-media class="flex gap-x-10 text-white mt-6"></x-social-media>
                        </div>
                    </div>
                </x-container>
            </div>
        </div>
    </div>
</header>
