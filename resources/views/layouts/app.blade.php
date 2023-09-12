<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="/css/lib/swiper-bundle.css"> --}}
    <link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css">
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <script src="//unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="//unpkg.com/isotope-packery@2/packery-mode.pkgd.js"></script>
</head>

<body x-data="{
    modals: {},
    toggle(id) {
        console.log(this.modals);
        for (const modalId in this.modals) {
            if (modalId !== id) {
                this.modals[modalId] = false;
            }
        }
        this.modals[id] = !this.modals[id];
    }
}" class="bg-foreground">
    <div class="max-w-[100%] pointer-events-none absolute w-[1062px] h-[1062px] -translate-x-1/2 -translate-y-1/2 z-[-1]"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(116, 182, 33, 0.50) 0%, rgba(116, 182, 33, 0.40) 16.67%, rgba(116, 182, 33, 0.30) 33.85%, rgba(116, 182, 33, 0.20) 51.56%, rgba(116, 182, 33, 0.10) 67.71%, rgba(116, 182, 33, 0.00) 88.54%);height: 100%;aspect-ratio: 1;opacity: .6;top: 0;">
    </div>
    @include('sections.header')
    <main id="main" class="overflow-hidden">
        {{ $slot ?? '' }}
        @yield('content')
    </main>
    @include('sections.footer')

    <script>
        var pckry = new Packery( '.grid-isotope', {
            // options
        });
     
    </script>
</body>



</html>
