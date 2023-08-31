<div>
    @php
        $services = App\Models\Service::all()->sortBy('sort');
        $partners = App\Models\Partner::all()->sortBy('sort');
        $testimonials = App\Models\Testimonial::all()->sortBy('sort');
    @endphp

    <x-sections.site.hero></x-sections.site.hero>
    <x-sections.site.projects class="mt-[170px]"></x-sections.site.projects>
    <x-sections.site.services-banner :services="$services"></x-sections.site.services-banner>
    <x-sections.site.services class="mt-[255px] relative" :services="$services"></x-sections.site.services>
    <x-sections.site.testimonials class="relative mt-[370px]" :testimonials="$testimonials"></x-sections.site.testimonials>
    <x-sections.site.partners class="mt-[197px] max-w-[1600px] mx-auto text-center" :partners="$partners"></x-sections.site.partners>



</div>

