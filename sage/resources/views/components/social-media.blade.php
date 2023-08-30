@props(['name', 'invert' => false])

@php
	$socialMediaProfiles = get_field('socials_network', 'option');
@endphp


@if(isset($socialMediaProfiles) && count($socialMediaProfiles))
	<ul role="list" {{$attributes->class(['flex gap-x-10 gap-y-5 flex-wrap','text-white' => $invert,'text-neutral-950' => ! $invert])}}>
    @foreach ($socialMediaProfiles as $socialMediaProfile)
			<li>
            <x-link
					href="{{ $socialMediaProfile['url'] }}"
					aria-label="{{ $socialMediaProfile['name'] }}"
					@class(['transition','hover:text-neutral-200' => $invert,'hover:text-neutral-700' => ! $invert])>
					<i class="text-2xl {{$socialMediaProfile['icon']['icon']}}"></i>
            </x-link>
        </li>
		@endforeach
</ul>

@endif
