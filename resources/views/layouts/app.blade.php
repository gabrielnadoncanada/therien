<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-foreground">
    @include('sections.header')
    <main id="main" class="overflow-hidden">{{ $slot }}</main>
    @include('sections.footer')
    @vite('resources/js/app.js')
</body>
</html>
