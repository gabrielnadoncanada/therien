@props(['eyebrow' => null, 'title' => null, 'invert' => false, 'as' => 'h1', 'centered' => false, 'content' => null])

<x-container {{$attributes->class(['text-center' => $centered])}}>

	<div class="flex flex-col gap-y-6">
			@if($title || $eyebrow)
			<{{$as}} @class(['flex flex-col gap-y-6'])>
			@if($eyebrow)
				<span @class(['block font-display text-base font-semibold text-neutral-950', 'text-white' => $invert,'text-neutral-950' => !$invert])>
			{!! $eyebrow !!}
		</span>
				<span class="sr-only"> - </span>
			@endif
			@if($title)
				<span @class(['block max-w-5xl font-display text-5xl font-medium tracking-tight [text-wrap:balance] sm:text-6xl','mx-auto' => $centered,'text-white' => $invert,'text-neutral-950' => !$invert])>
			{{ $title }}
		</span>
				{!! $content !!}
			@endif
	</{{$as}}>
	@endif
	<div @class(['text-xl','text-neutral-300' => $invert,'text-neutral-600' => !$invert, 'mx-auto' => $centered])>
		{{ $slot }}
	</div>
	</div>

</x-container>
