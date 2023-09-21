@extends('layouts.app')

@section('content')


<section>
    <div class="relative isolate flex items-center">
        <div class="mx-auto pt-[8rem] pb-[5rem] 2xl:pt-[12rem] 2xl:pb-[5rem] relative">
            <div class="text-center px-6 mb-[75px]">
                <img class="mb-6 md:mb-[20px] mx-auto max-w-[200px] 2xl:max-w-[225px]"
                     src="{{ asset('images/logo-therien.svg') }}" alt="" width="275">
                <x-text as="h1" theme="h1" class="max-w-6xl mx-auto text-primary">Nos réalisations</x-text>
                <x-text class="mt-[1em] mb-[2em] text-white" theme="h6">Les images sont souvent plus parlantes que des
                    mots.
                    <br>
                    Ci-dessous, un étendu de notre savoir faire.
                </x-text>
            </div>


            <ul class="flex flex-wrap items-center justify-center gap-[25px] px-6">
                <li>
                    <x-button theme="small">Tous</x-button>
                </li>
                @foreach($services as $key => $service)
                    <li>
                        <x-button theme="small">{{$service['title']}}</x-button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="grid" class="mb-[63px]">
        <div class="grid-sizer"></div>
        <div class="grid-gutter"></div>
        <div class="grid-row-height"></div>
        @foreach($achievements as $key => $achievement)
            <div class="grid-item">
                <img class="h-full w-full object-cover rounded-[15px]"
                     src="{{$achievement->getMedia('achievements-images')[0]->getUrl()}}" alt="">
            </div>
        @endforeach
    </div>
</section>

@endsection

