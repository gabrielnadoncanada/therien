@props(['label', 'value'])

<x-border position="left" class="flex flex-col-reverse pl-8">
  <dt class="mt-2 text-base text-neutral-600">{{$label}}</dt>
  <dd class="font-display text-3xl font-semibold text-neutral-950 sm:text-4xl">
    {{$value}}
  </dd>
</x-border>