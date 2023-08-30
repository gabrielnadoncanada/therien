@props(['invert' => false])

@php
    $offices = get_field('address', 'option');
@endphp

@if(isset($offices) && count($offices))
    <ul role="list" {{ $attributes }}>
        @foreach ($offices as $office)
            <li>
                  <x-office name="{{$office['country']}}" invert="{{$invert}}">
            {!!  $office['street'] . ', ' .  $office['city'] . ',<br>' . $office['state'] . ',  ' . $office['postal_code']!!}
                <br>
                <br>
                <a href="tel:{{$office['phone']}}">{{$office['phone']}}</a>
                <a href="mailto:{{$office['email']}}">{{$office['email']}}</a>
        </x-office>

        </li>
        @endforeach

</ul>

@endif



