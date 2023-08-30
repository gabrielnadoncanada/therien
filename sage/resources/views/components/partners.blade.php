@php
	$clients = [
			['Phobia', 'logoPhobiaLight'],
			['Family Fund', 'logoFamilyFund'],
			['Unseal', 'logoUnseal'],
			['Mail Smirk', 'logoMailSmirk'],
			['Home Work', 'logoHomeWork'],
			['Green Life', 'logoGreenLife'],
			['Bright Path', 'logoBrightPath'],
			['North Adventures', 'logoNorthAdventures'],
	];
@endphp



<div class="mt-24 rounded-4xl bg-neutral-950 py-20 sm:mt-32 sm:py-32 lg:mt-56">
    <x-container>
        <div class="flex items-center gap-x-8">
            <h2 class="text-center font-display text-sm font-semibold tracking-wider text-white sm:text-left">
                We’ve worked with hundreds of amazing people
            </h2>
            <div class="h-px flex-auto bg-neutral-800"></div>
        </div>
        <div>
            <ul role="list" class="mt-10 grid grid-cols-2 gap-x-8 gap-y-10 lg:grid-cols-4">
                @foreach ($partners as $partner)
					<li>
                        <img class="" src="{{ $partner['image'] }}" alt="{{ $partner['title'] }}"/>
                    </li>
				@endforeach
            </ul>
        </div>
    </x-container>
</div>
