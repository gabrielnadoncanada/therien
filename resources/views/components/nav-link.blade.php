
<li {{ $attributes->merge(['class' => $theme()])}}>
	<a class="absolute h-full w-full left-0 top-0 flex items-center justify-center" href="{{ Route::has($route) ? route($route) : ''}}" wire:navigate.hover>{{ $slot }}</a>
</li>
