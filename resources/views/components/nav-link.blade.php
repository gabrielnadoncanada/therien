<li {{ $attributes->merge(['class' => $theme()]) }}>
	@if(isset($link))
		<a class="flex items-center" href="{{ $link }}">
			{{ $slot }}
		</a>
	@elseif(Route::has($route))
		<a class="flex items-center" href="{{ route($route) }}">
			{{ $slot }}
		</a>
	@else
		{{ $slot }}
	@endif
</li>