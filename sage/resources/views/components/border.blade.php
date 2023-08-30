@props(['position' => 'top', 'invert' => false])

<{{ $as ?? 'div' }} {{ $attributes->class([
	'relative', 'before:absolute', 'after:absolute',
	'before:bg-white after:bg-white/10' => $invert,
	'before:bg-neutral-950 after:bg-neutral-950/10' => ! $invert,
	'before:left-0 before:top-0 before:h-px before:w-6 after:left-8 after:right-0 after:top-0 after:h-px' => $position === 'top',
	'before:left-0 before:top-0 before:h-6 before:w-px after:bottom-0 after:left-0 after:top-8 after:w-px' => $position === 'left',
	]) }}>
{{ $slot }}
</{{ $as ?? 'div' }}>