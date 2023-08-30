@props(['name', 'invert' => false])

<address {{ $attributes->class(['text-sm not-italic','text-neutral-300' => $invert,'text-neutral-600' => ! $invert]) }}>
    <strong>{{ $name }}</strong><br/>
	{{ $slot }}
</address>