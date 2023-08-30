@extends('layouts.app')

@section('content')
	<x-page-intro title="Les derniers articles et actualités">
		<p>
			Explorez notre blog pour découvrir les dernières tendances en matière d'aménagement paysager, apprendre à créer un jardin écologique, obtenir des conseils sur l'entretien du jardin et bien plus encore.
		</p>
	</x-page-intro>

	<x-container class="mt-24 sm:mt-32 lg:mt-40">
        <div class="space-y-24 lg:space-y-32">
  			@while(have_posts())
				@php(the_post())
				@includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
			@endwhile
		</div>
  	</x-container>

@endsection
