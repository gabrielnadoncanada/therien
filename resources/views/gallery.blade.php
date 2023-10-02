@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('js/lib/lightgallery/css/lightgallery-bundle.css') }}">
@endsection

@section('content')
    <section class="mb-[96px]">
        <div class="relative isolate flex items-center">
            <div class="mx-auto pt-[8rem] pb-[5rem] 2xl:pt-[12rem] 2xl:pb-[5rem] relative">
                <div class="text-center px-6 mb-[75px]">
                    <img class="mb-6 md:mb-[20px] mx-auto max-w-[200px] 2xl:max-w-[225px]"
                         src="{{ asset('images/logo-therien.svg') }}" alt="" width="275">
                    <x-text as="h1" theme="h1" class="max-w-6xl mx-auto text-primary">Nos réalisations</x-text>
                    <x-text class="mt-[1em] mb-[2em] text-white" theme="h6">
                        Les images sont souvent plus parlantes que des mots.<br>
                        Ci-dessous, un étendu de notre savoir faire.
                    </x-text>
                </div>


                <ul class="flex flex-wrap items-center justify-center gap-[25px] px-6 filters-button-group">
                    <li>
                        <x-button theme="outline.primary" class="is-checked " data-service="0" data-filter="*">Tous</x-button>
                    </li>
                    @foreach($services as $key => $service)
                        <li>
                            <x-button theme="outline.primary" class=""
                                      data-filter="[data-category*='{{$service['id']}}']">{{ e($service['title']) }}</x-button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div id="grid" class="mb-[63px]">
            <div class="grid-sizer"></div>
            <div class="grid-gutter"></div>
            <div class="grid-row-height"></div>
            @foreach($achievements as $achievement)
                @php
                    $serviceIds = [0];
                    foreach ($achievement['services'] as $item) {
                        $serviceIds[] = $item['id'];
                    }
                @endphp
                <div class="grid-item" data-category="[{{ implode(',', $serviceIds) }}]">
                    @foreach($achievement->getMedia('achievements-images') as $key => $image)
                        <a href="{{$image->getUrl()}}">
                            <img class="h-full w-full object-cover rounded-[15px]"
                                 src="{{$image->getUrl()}}" alt="">
                        </a>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection


@section('footer')
    <script src="{{ asset('js/lib/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('js/lib/packery-mode.pkgd.js') }}"></script>
    <script src="{{ asset('js/lib/masonry-grid.js') }}"></script>
    <script src="{{ asset('js/lib/lightgallery/lightgallery.min.js') }}"></script>
    <script src="{{ asset('js/lib/lightgallery/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>
    <script src="{{ asset('js/lib/lightgallery/plugins/zoom/lg-zoom.min.js') }}"></script>


    <script>
        lightGallery(document.getElementById('grid'), {
            plugins: [lgZoom, lgThumbnail],
            selector: '.grid-item a',
            thumbnail: true,
            animateThumb: false
        });
    </script>
@endsection

