<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>
<body class="bg-foreground ">
<x-sections.site.header class="absolute z-10 w-full"></x-sections.site.header>
<main id="main" class="overflow-hidden">{{ $slot }}</main>
<x-sections.site.contact class="mt-[229px] max-w-[1280px] flex-wrap bg-primary py-[96px] px-[122px] rounded-[500px] mx-auto  flex justify-between gap-x-[140px]"></x-sections.site.contact>
<x-sections.site.footer class="mt-[286px] border-t border-primary"></x-sections.site.footer>
@vite('resources/js/app.js')
</body>
</html>
