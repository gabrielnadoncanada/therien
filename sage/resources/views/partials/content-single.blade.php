<article @php(post_class('h-entry'))>
   <header class="mx-auto flex max-w-5xl flex-col text-center">
    <h1 class="mt-6 font-display text-5xl font-medium tracking-tight text-neutral-950 [text-wrap:balance] sm:text-6xl">
      {{$title}}
    </h1>
       <div class="mt-6 max-w-3xl text-xl text-neutral-600 mx-auto">
          {{the_excerpt()}}

       </div>
   <time dateTime="{{ get_post_time('c', true) }}"
		 class="order-first text-sm text-neutral-950">
    {{ get_the_date() }}
  </time>
	   @if(get_post_type() === 'post')
		   <p class="mt-6 text-sm font-semibold text-neutral-950">
     	{!! get_the_category_list('&nbsp;•&nbsp;') !!}
    </p>
	   @endif
  </header>

	@if(get_post_type() === 'project')

		<div style="opacity: 1; transform: none;">
        <div class="mt-24 border-t  border-b border-neutral-200 bg-white/50 sm:mt-32 lg:mt-40">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:max-w-none">
                    <div class="mx-auto max-w-5xl">
                        <dl class="-mx-6 grid grid-cols-1 text-sm text-neutral-950 sm:mx-0 sm:grid-cols-3">
                            <div class="border-t border-neutral-200 px-6 py-4 first:border-t-0 sm:border-l sm:border-t-0">
                                <dt class="font-semibold">Client</dt><dd>FamilyFund</dd>
                            </div>
                            <div class="border-t border-neutral-200 px-6 py-4 first:border-t-0 sm:border-l sm:border-t-0">
                                <dt class="font-semibold">Year</dt><dd><time datetime="2023">2023</time></dd></div>
                            <div class="border-t border-neutral-200 px-6 py-4 first:border-t-0 sm:border-l sm:border-t-0">
                                <dt class="font-semibold">Service</dt><dd>Web development, CMS</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<div class="border-y border-neutral-200 bg-neutral-100"><div
					class="-my-px mx-auto max-w-[76rem] bg-neutral-200"><div
						class="group relative"><img alt="" fetchpriority="high" width="3648" height="3117"
													decoding="async"
													data-nimg="1" class="w-full"
													sizes="(min-width: 1216px) 76rem, 100vw"
													src="{{asset('images/hero.webp')}}"
													style="color: transparent; filter: grayscale(0.679962);"><div
							class="pointer-events-none absolute left-0 top-0 w-full opacity-0 transition duration-300 group-hover:opacity-100"
							aria-hidden="true"><img alt="" fetchpriority="high" width="3648" height="3117"
													decoding="async"
													data-nimg="1" class="w-full"
													sizes="(min-width: 1216px) 76rem, 100vw"
													src="{{asset('images/hero.webp')}}"
													style="color: transparent;"></div></div></div></div>
	@endif
	<div class="[&>*]:mx-auto [&>*]:max-w-3xl [&>:first-child]:!mt-0 [&>:last-child]:!mb-0 mt-24 sm:mt-32 lg:mt-40">
        <div class="typography">
             @php(the_content())
        </div>
    </div>
</article>
