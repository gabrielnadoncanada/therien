<li {{ $attributes->merge(['class' => $theme()]) }}>
    @if (isset($link))
        <a class="flex items-center" href="{{ $link }}">
            {{ $slot }}
        </a>
    @else
        {{ $slot }}
    @endif
</li>
