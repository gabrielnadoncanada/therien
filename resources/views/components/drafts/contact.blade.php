<x-container class="mt-32">
    <x-section-intro eyebrow="Contactez-nous" title="Travaillons ensemble" id="contact">
       <p> Nous avons hâte d'avoir de vos nouvelles.</p>
    </x-section-intro>

    <div class="mt-32 grid grid-cols-1 gap-x-8 gap-y-24 lg:grid-cols-2">
        <div class="lg:order-last" style="opacity: 1; transform: none;">
			@include('forms.contact')
        </div>
        <div>
            <h2 class="font-display text-base font-semibold text-neutral-950">Nos bureaux</h2>
            <x-offices class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2" />
            <x-border class="mt-16 pt-16">
                <h2 class="font-display text-base font-semibold text-neutral-950">
                    Email us
                </h2>
                <dl class="mt-6 grid grid-cols-1 gap-8 text-sm sm:grid-cols-2">
                    @foreach ([['Careers', 'careers@studioagency.com'], ['Press', 'press@studioagency.com']] as $contact)
						<div>
                            <dt class="font-semibold text-neutral-950">{{ $contact[0] }}</dt>
                            <dd>
                                <a href="mailto:{{ $contact[1] }}" class="text-neutral-600 hover:text-neutral-950">
                                    {{ $contact[1] }}
                                </a>
                            </dd>
                        </div>
					@endforeach
                </dl>
            </x-border>
            <x-border class="mt-16 pt-16">
                <h2 class="font-display text-base font-semibold text-neutral-950">
                    Suivez-nous
                </h2>
                <x-social-media class="mt-6" />
            </x-border>
        </div>
    </div>
</x-container>
