<div>
  	<ul {{$attributes->merge(['class' => 'grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3'],['role' => 'list'])}}>
		{{ $slot }}
	</ul>
</div>
