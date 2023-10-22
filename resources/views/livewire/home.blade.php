<div>
    @include('sections.hero')
    @include('sections.achievements')
    @include('sections.services-banner')
    <div class="relative ">
        <div
            class="pointer-events-none max-w-[25vw] hidden md:block absolute w-[550px] h-full bg-gradient-to-l from-[#161915] to-transparent z-[2] right-0 top-0">
        </div>
        @include('sections.services')
        @include('sections.testimonials')
    </div>
    @include('sections.partners')
</div>
