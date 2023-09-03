<div>
    <x-sections.hero/>
    <x-sections.projects
            id="a-propos"
            class="pt-20 lg:pt-44 pb-20 lg:pb-36 relative"/>
    <x-sections.services-banner
            :services="$services"
            class="py-8 bg-primary max-w-none relative overflow-hidden"/>
    <div class="relative">

        <div class="pointer-events-none max-w-[25vw] absolute w-[550px] h-full bg-gradient-to-l from-[#161915] to-transparent z-[2] right-0 top-0"></div>
        <x-sections.services
                id="services"
                class="pt-20 lg:pt-64 relative"
                :services="$services"/>
        <x-sections.testimonials
                class="relative lg:pt-96"
                :testimonials="$testimonials"/>
    </div>
    <x-sections.partners
            class="lg:pt-48 max-w-[1600px] mx-auto text-center"
            :partners="$partners"/>
</div>

