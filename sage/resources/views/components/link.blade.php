@props(['href', 'target' => '_self', 'rel' => 'noopener noreferrer'])

<a href="{{ $href }}" target="{{ $target }}" rel="{{ $rel }}" {{ $attributes }}>
    {{ $slot }}
</a>