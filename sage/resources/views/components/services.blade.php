<x-section-intro eyebrow="Services" title="We help you identify, explore and respond to new opportunities."
				 class="mt-24 sm:mt-32 lg:mt-40">
    <p>
        As long as those opportunities involve giving us money to re-purpose
        old projects — we can come up with an endless number of those.
    </p>
</x-section-intro>

<x-container class="mt-16">
    <div class="lg:flex lg:items-center lg:justify-end">
        <div class="flex justify-center lg:w-1/2 lg:justify-end lg:pr-12">
            <div class="w-[33.75rem] flex-none lg:w-[45rem]">
				<img src="imageLaptop" class="justify-center lg:justify-end"/>
            </div>
        </div>
        <x-list class="mt-16 lg:mt-0 lg:w-1/2 lg:min-w-[33rem] lg:pl-4">
            @foreach($services as $service)
				<x-list-item title="{{ $service['title'] }}">
                    {{ $service['excerpt'] }}
                </x-list-item>
			@endforeach
        </x-list>
    </div>
</x-container>
