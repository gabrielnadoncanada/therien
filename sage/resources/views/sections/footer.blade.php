<footer class="bg-white relative">

	<div class="absolute z-[1] inset-x-0 top-0 h-[884px] overflow-hidden rounded-t-4xl bg-gradient-to-b from-neutral-50">
		    <x-grid-bg></x-grid-bg>
	</div>


	<x-container class="z-[2] relative">
		@include('sections.contact')

	{{--            <div class="grid grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2">--}}
				{{--                <nav>--}}
				{{--                    <ul role="list" class="grid grid-cols-2 gap-8 sm:grid-cols-3">--}}
				{{--                        <li>--}}
				{{--                            <div class="font-display text-sm font-semibold tracking-wider text-neutral-950">Work</div>--}}
				{{--                            <ul role="list" class="mt-4 text-sm text-neutral-700">--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950"--}}
				{{--													href="/work/family-fund">FamilyFund</a></li>--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950"--}}
				{{--													href="/work/unseal">Unseal</a></li>--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950"--}}
				{{--													href="/work/phobia">Phobia</a></li>--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950" href="/work">See all--}}
				{{--                                        <span aria-hidden="true">→</span></a></li>--}}
				{{--                            </ul>--}}
				{{--                        </li>--}}
				{{--                        <li>--}}
				{{--                            <div class="font-display text-sm font-semibold tracking-wider text-neutral-950">Company--}}
				{{--                            </div>--}}
				{{--                            <ul role="list" class="mt-4 text-sm text-neutral-700">--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950" href="/about">About</a>--}}
				{{--                                </li>--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950"--}}
				{{--													href="/process">Process</a></li>--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950" href="/blog">Blog</a>--}}
				{{--                                </li>--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950" href="/contact">Contact--}}
				{{--                                        us</a></li>--}}
				{{--                            </ul>--}}
				{{--                        </li>--}}
				{{--                        <li>--}}
				{{--                            <div class="font-display text-sm font-semibold tracking-wider text-neutral-950">Connect--}}
				{{--                            </div>--}}
				{{--                            <ul role="list" class="mt-4 text-sm text-neutral-700">--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950"--}}
				{{--													href="https://facebook.com">Facebook</a></li>--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950"--}}
				{{--													href="https://instagram.com">Instagram</a></li>--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950"--}}
				{{--													href="https://twitter.com">Twitter</a></li>--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950"--}}
				{{--													href="https://github.com">GitHub</a></li>--}}
				{{--                                <li class="mt-4"><a class="transition hover:text-neutral-950"--}}
				{{--													href="https://dribbble.com">Dribbble</a></li>--}}
				{{--                            </ul>--}}
				{{--                        </li>--}}
				{{--                    </ul>--}}
				{{--                </nav>--}}
				{{--                <div class="flex lg:justify-end">--}}
				{{--                    <form class="max-w-sm">--}}
				{{--                        <h2 class="font-display text-sm font-semibold tracking-wider text-neutral-950">Sign up for our--}}
				{{--                            newsletter</h2>--}}
				{{--                        <p class="mt-4 text-sm text-neutral-700">Subscribe to get the latest design news, articles,--}}
				{{--                            resources and inspiration.</p>--}}
				{{--                        <div class="relative mt-6"><input type="email" placeholder="Email address"--}}
				{{--														  autocomplete="email" aria-label="Email address"--}}
				{{--														  class="block w-full rounded-2xl border border-neutral-300 bg-transparent py-4 pl-6 pr-20 text-base/6 text-neutral-950 ring-4 ring-transparent transition placeholder:text-neutral-500 focus:border-neutral-950 focus:outline-none focus:ring-neutral-950/5">--}}
				{{--                            <div class="absolute inset-y-1 right-1 flex justify-end"><button type="submit"--}}
				{{--																							 aria-label="Submit"--}}
				{{--																							 class="flex aspect-square h-full items-center justify-center rounded-xl bg-neutral-950 text-white transition hover:bg-neutral-800"><svg--}}
				{{--											viewBox="0 0 16 6" aria-hidden="true" class="w-4">--}}
				{{--                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"--}}
				{{--											  d="M16 3 10 .5v2H0v1h10v2L16 3Z"></path>--}}
				{{--                                    </svg></button></div>--}}
				{{--                        </div>--}}
				{{--                    </form>--}}
				{{--                </div>--}}
				{{--            </div>--}}
				<div class="mb-20 mt-32 flex flex-wrap items-end justify-between gap-x-6 gap-y-4 border-t border-neutral-950/10 pt-12">
					@if(get_field('logo', 'option'))
						<a aria-label="Home" href="/">
							<img  src="{{ get_field('logo', 'option') }}" alt="" class="group/logo h-8">
						</a>
					@endif
					<p class="text-sm text-neutral-700">© Studio Agency Inc. {{ date('Y') }}. All rights reserved.
					</p>
				</div>


	</x-container>

</footer>