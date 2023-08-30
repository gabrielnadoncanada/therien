@extends('layouts.app')

@section('content')




	<x-container class="">
        <div class="max-w-3xl">
          <h1 class="font-display text-5xl font-medium tracking-tight text-neutral-950 [text-wrap:balance] sm:text-7xl">
            Award winning developer studio based in Denmark.
          </h1>
          <p class="mt-6 text-xl text-neutral-600">
            We are developer studio working at the intersection of design and
            technology. It’s a really busy intersection though — a lot of our
            staff have been involved in hit and runs.
          </p>
        </div>
      </x-container>

{{--	<x-partners />--}}

{{--	<x-case-studies />--}}

{{--	<x-testimonial--}}
{{--			class="mt-24 sm:mt-32 lg:mt-40"--}}
{{--			:client="['name' => 'Phobia', 'logo' => 'logo']"--}}
{{--	>--}}
{{--        The team at Studio went above and beyond with our onboarding, even--}}
{{--        finding a way to access the user’s microphone without triggering one of--}}
{{--        those annoying permission dialogs.--}}
{{--      </x-testimonial>--}}

	<x-services />


@endsection
