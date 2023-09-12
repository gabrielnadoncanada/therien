<section class="py-8 bg-primary max-w-none relative overflow-hidden">
    <div class="flex" id="scroll-container">
        <div id="scroll-text"
            class="flex pr-[2.5rem] flex-row gap-10 items-center justify-start inline-block   whitespace-nowrap text-secondary text-left relative">
            @foreach ($services as $index => $service)
                <x-text theme="h1"><a
                        href="{{ route('gallery', ['service' => $service['title']]) }}">{{ $service['title'] }}</a></x-text>
                <span class="bg-secondary rounded-[50%] shrink-0 w-[15px] h-[15px] relative"></span>
            @endforeach
        </div>
        <div id="scroll-text"
            class="flex pr-[2.5rem] flex-row gap-10 items-center justify-start inline-block   whitespace-nowrap text-secondary text-left relative">
            @foreach ($services as $index => $service)
                <x-text theme="h1">{{ $service['title'] }}</x-text>
                <span class="bg-secondary rounded-[50%] shrink-0 w-[15px] h-[15px] relative"></span>
            @endforeach
        </div>
    </div>
</section>
