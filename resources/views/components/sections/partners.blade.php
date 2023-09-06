<section {{ $attributes }}>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 flex flex-col gap-y-[40px] items-center">
        <img src="{{ asset('/svg/partner.svg') }}" alt="">

        <div class="relative">
            <x-text as="h2" theme="h1" class="text-primary">
                Partenaires de <span class="leading-[2.5] sm:leading-[1.2] text-foreground z-[1] relative font-bold">choc
                    <svg class="left-1/2 top-1/2 -translate-y-1/2  -translate-x-[45%] z-[-1] absolute"
                        xmlns="http://www.w3.org/2000/svg" width="150%" height="282" viewBox="0 0 313 282"
                        fill="none">
                        <path
                            d="M138.186 68.4176L102.397 0.501253L91.3098 80.0303L36.0963 58.0615L66.6227 103.327L0.63657 117.043L64.0449 148.554L20.1421 169.915L71.0992 181.054C71.0992 181.054 44.8603 217.819 28.7378 237.29L98.7476 214.896L123.369 263.522L136.002 221.725L191.087 281.33L188.89 210.791L235.261 246.372L220.393 197.63L312.332 206.231L226.899 145.4L273.644 115.462L214.311 103.846L247.004 40.3372L177.11 72.4848L165.498 25.6085L138.186 68.4176Z"
                            fill="var(--primary)" />
                    </svg>
                </span>
            </x-text>
        </div>

        <x-text class="text-white max-w-[477px] mx-auto">
            Seul on va vite, mais ensemble on va loin.
            Nous ne serions pas en mesure de vous fournir une telle qualité sans nos partenaires qui sont tout
            simplement extraordinaire.
        </x-text>
        <div class="mt-[20px] flex flex-col gap-[42px] items-center justify-start  relative">
            <div class="flex flex-row gap-[30px] flex-wrap items-center justify-center self-stretch shrink-0 relative">
                @foreach ($partners as $index => $partner)
                    <div
                        class="partner aspect-[16/9] rounded-[15px] border-solid border-[#ffffff] border-2 p-4 sm:p-10 lg:p-15 flex flex-col gap-2.5 items-center justify-center  relative">
                        <img class="shrink-0  relative" src="/storage/{{ $partner['image'] }}"
                            alt="{{ $partner['title'] }}" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
