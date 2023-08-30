@props(['title' => null, 'intro' => false])


<div {{ $attributes->class(['relative py-24 sm:py-32 lg:py-40 ']) }}>


	@if($related_posts && count($related_posts))
		@if($title)
			<x-section-intro title="{{ $title }}" content="{{ $intro }}"/>
		@endif

		<x-container @class(['mt-24' => $intro, 'mt-16' => !$intro])>
			<div class="grid grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2 mt-16 ">
				@foreach ($related_posts as $post)
					<article>
						<x-border position="left" class="h-full relative flex flex-col items-start pl-8 gap-y-3">
							<h3 class="mt-4 text-base font-semibold text-neutral-950">
								{!! $post['title'] !!}
							</h3>
							<time dateTime="{{ $post['date'] }}" class="order-first text-sm text-neutral-600">
								{{ $post['date'] }}
							</time>
							<p class="mt-auto text-base text-neutral-600">{!!  $post['excerpt'] !!}</p>
							<x-link href="{{ $post['permalink'] }}"
									class="mt-4 flex gap-x-3 text-base font-semibold text-neutral-950 transition hover:text-neutral-700">
								Read more
								 <x-arrow-icon class="w-6 flex-none fill-current"/>
								<span class="absolute inset-0"></span>
							</x-link>
						</x-border>
					</article>
				@endforeach
			</div>
		</x-container>
	@endif
</div>

