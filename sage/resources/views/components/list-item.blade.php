@props(['title'])

<li class="group mt-10 first:mt-0">
    <div>
        <x-border class="pt-10 group-first:pt-0 group-first:before:hidden group-first:after:hidden">
            @if($title)
				<strong class="font-semibold text-neutral-950">{{ $title }}. </strong>
			@endif
			{{ $slot }}
        </x-border>
    </div>
</li>
