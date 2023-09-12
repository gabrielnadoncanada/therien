@extends('layouts.app')

@section('content')

    @php
        $images = [
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'w-[513px] h-[310px]'],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'w-[523px] h-[630px]'],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'w-[844px] h-[1000px]'],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-2 '],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-4 '],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-3'],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-7'],
    ];
    @endphp
    <section class="relative isolate flex items-center">
        <div class="mx-auto py-[10rem] 2xl:pt-[12rem] 2xl:pb-[5rem] relative">
            <div class="text-center px-6 mb-[100px]">
                <img class="mb-6 md:mb-[20px] mx-auto max-w-[200px] 2xl:max-w-[275px]"
                     src="{{ asset('images/logo-therien.svg') }}" alt="" width="275">
                <x-text as="h1" theme="h1" class="max-w-6xl mx-auto text-primary">Nos réalisations</x-text>
                <x-text class="mt-[1em] mb-[2em] text-white" theme="h6">Les images sont souvent plus parlantes que des
                    mots.
                    <br>
                    Ci-dessous, un étendu de notre savoir faire.
                </x-text>
            </div>


            <ul class="flex gap-x-[25px] ">
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
    </section>
    <div class="grid-isotope p-[10px]" >
        @foreach($achievements as $key => $achievement)
            <div class="{{$images[$key]['classes']}}">
                <img class="h-full w-full object-cover rounded-[15px]"
                     src="{{$achievement->getMedia('achievements-images')[0]->getUrl()}}" alt="">
            </div>
        @endforeach
    </div>
@endsection
