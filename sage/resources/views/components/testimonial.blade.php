@props(['client'])

<div {{$attributes }}>
    <div class="relative isolate bg-neutral-50 py-16 sm:py-28 md:py-32">
        <x-container>
            <div>
                <figure class="mx-auto max-w-4xl">
                    <blockquote class="relative font-display text-3xl font-medium tracking-tight text-neutral-950 sm:text-4xl">
                        <p class="before:content-['“'] after:content-['”'] sm:before:absolute sm:before:right-full">
                            {{ $slot }}
                        </p>
                    </blockquote>
                    <figcaption class="mt-10">
                        <img :src="$client['logo']" :alt="$client['name']" :unoptimized="true">
                    </figcaption>
                </figure>
            </div>
        </x-container>
    </div>
</div>
