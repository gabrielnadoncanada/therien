<section {{ $attributes }}>
    <div class="flex" id="scroll-container">
        <div id="scroll-text"
             class="flex pr-[2.5rem] flex-row gap-10 items-center justify-start inline-block   whitespace-nowrap text-foreground text-left relative">
            @foreach($services as $index => $service)
                <x-text theme="h1">{{$service['title']}}</x-text>
                <span class="bg-foreground rounded-[50%] shrink-0 w-[15px] h-[15px] relative"></span>
            @endforeach
        </div>
        <div id="scroll-text"
             class="flex pr-[2.5rem] flex-row gap-10 items-center justify-start inline-block   whitespace-nowrap text-foreground text-left relative">
            @foreach($services as $index => $service)
                <x-text theme="h1">{{$service['title']}}</x-text>
                <span class="bg-foreground rounded-[50%] shrink-0 w-[15px] h-[15px] relative"></span>
            @endforeach
        </div>
    </div>
</section>