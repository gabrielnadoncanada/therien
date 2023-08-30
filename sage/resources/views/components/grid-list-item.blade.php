<li {{
		$attributes->class([
		'text-base',
		'text-neutral-300 before:bg-white after:bg-white/10' => $invert,
		'text-neutral-600 before:bg-neutral-950 after:bg-neutral-100' => ! $invert
		])
	}}>

	<x-border position="left" class="pl-8" invert={invert}>
	  <strong @class(['font-semibold','text-white' => $invert,'text-neutral-950' => ! $invert])>
		{{ $title }}.
	  </strong>
		{{ $slot }}
	</x-border>

</li>