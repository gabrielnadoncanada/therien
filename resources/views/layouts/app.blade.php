<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Entreprise de paysagement et déneigement | Thérien Inc.'  }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description"
          content="Nous créons des expériences captivantes pour vos espaces extérieurs. Chaque projet devient une toile où notre créativité audacieuse et notre expertise technique se conjuguent pour donner vie à des environnements uniques.">
    <meta name="keywords" content="Paysagement, Therien, Thérien">
    <meta property="og:title" content="Entreprise de paysagement et déneigement | Thérien Inc.">
    <meta property="og:description"
          content="Nous créons des expériences captivantes pour vos espaces extérieurs. Chaque projet devient une toile où notre créativité audacieuse et notre expertise technique se conjuguent pour donner vie à des environnements uniques..">
    <meta property="og:image" content="{{asset('bg-accueil.png')}}"/>
    <meta name="author" content="Devlense">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('js/lib/lightgallery/css/lightgallery-bundle.css') }}">
    <link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css">
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E30YJ4XG12"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-E30YJ4XG12');
</script>
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
</body>


</html>
