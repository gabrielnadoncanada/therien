<section
        class="mt-[144px] bg-primary p-5 flex flex-row gap-10 items-center justify-start max-w-none relative overflow-hidden">
    @foreach($services as $index => $service)
        <div class="whitespace-nowrap text-foreground text-left text-[96px] relative">
            {{$service['title']}}
        </div>

        @if(!$loop->last)
            <div class="bg-foreground rounded-[50%] shrink-0 w-[15px] h-[15px] relative"></div>
        @endif
    @endforeach
</section>