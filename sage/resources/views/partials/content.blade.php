<article @php(post_class())>
  <x-border class="pt-16">
  <div class="relative lg:-mx-4 lg:flex lg:justify-end">
    <div class="pt-10 lg:w-2/3 lg:flex-none lg:px-4 lg:pt-0">
      <h2 class="font-display text-2xl font-semibold text-neutral-950">
        <x-link href={{get_the_permalink()}}>{{get_the_title()}}</x-link>
      </h2>
      <dl class="lg:absolute lg:left-0 lg:top-0 lg:w-1/3 lg:px-4">
        <dt class="sr-only">Published</dt>
        <dd class="absolute left-0 top-0 text-sm text-neutral-950 lg:static">
          <time dateTime="{{ get_post_time('c', true) }}">
            {{ get_the_date() }}
          </time>
        </dd>
        <dt class="sr-only">Author</dt>
        <dd class="mt-6 flex gap-x-4">
          <div class="flex-none overflow-hidden rounded-xl bg-neutral-100">
            <img
					alt=""
					class="h-12 w-12 object-cover grayscale"
			/>
          </div>
          <div class="text-sm text-neutral-950">
            <div class="font-semibold">
            {{ get_the_author() }}
            </div>
            <div>Admin</div>
          </div>
        </dd>
      </dl>
      <p class="mt-6 max-w-2xl text-base text-neutral-600">
        {!! get_the_excerpt() !!}
      </p>
      <x-button
			  href={{get_the_permalink()}}
			  aria-label="{{ 'Voir l\'article complet:' . get_the_title() }}"
			  class="mt-8"
	  >
       Voir l'article complet
      </x-button>
    </div>
  </div>
  </x-border>
</article>
