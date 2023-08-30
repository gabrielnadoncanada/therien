@props(['as' => 'div'])

<{{ $as }} {{ $attributes->class(['mx-auto max-w-7xl w-full']) }}>
    <div class="mx-auto max-w-2xl lg:max-w-none">
        {{ $slot }}
    </div>
</{{ $as }}>
