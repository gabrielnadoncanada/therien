<x-container class="mt-24 sm:mt-32 lg:mt-40">
  <div class="space-y-24">
		  <div>
        <x-border as="div" />
        <div class="grid grid-cols-1 gap-6 pt-12 sm:pt-16 lg:grid-cols-4 xl:gap-8">
          <div>
            <h2 class="font-display text-2xl font-semibold text-neutral-950">
              Équipe
            </h2>
          </div>
          <div class="lg:col-span-3">
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-8">
              @foreach ($members as $member)
					<li>
                  <div>
                    <div class="group relative overflow-hidden rounded-3xl bg-neutral-100">
                      <img alt="" src="{{ $member['image'] }}" class="h-96 w-full object-cover grayscale transition duration-500 motion-safe:group-hover:scale-105" />
                      <div class="absolute inset-0 flex flex-col justify-end bg-gradient-to-t from-black to-black/0 to-40% p-6">
                        <p class="font-display text-base/6 font-semibold tracking-wide text-white">
                          {{ $member['title'] }}
                        </p>
                        <p class="mt-2 text-sm text-white">
                          {!! implode(' / ', $member['roles']) !!}
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
				@endforeach
            </ul>
          </div>
        </div>
      </div>
  </div>
</x-container>
