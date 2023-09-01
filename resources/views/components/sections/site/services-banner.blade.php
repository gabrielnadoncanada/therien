<section
        class="container mt-[144px] bg-primary max-w-none relative overflow-hidden">
    <div class="flex" id="scroll-container">
        <div id="scroll-text"
             class="flex pr-[2.5rem] flex-row gap-10 items-center justify-start inline-block  text-[5vw] whitespace-nowrap text-foreground text-left relative">
            @foreach($services as $index => $service)
                {{$service['title']}}
                <span class="bg-foreground rounded-[50%] shrink-0 w-[15px] h-[15px] relative"></span>
            @endforeach
        </div>
        <div id="scroll-text"
             class="flex pr-[2.5rem] flex-row gap-10 items-center justify-start inline-block  text-[5vw] whitespace-nowrap text-foreground text-left relative">
            @foreach($services as $index => $service)
                {{$service['title']}}
                <span class="bg-foreground rounded-[50%] shrink-0 w-[15px] h-[15px] relative"></span>
            @endforeach
        </div>
    </div>
</section>