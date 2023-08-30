@php
	$caseStudies = [
			['#', 'logo', 'client', '1993', '1993-06-30', 'title', 'description'],
			['#', 'logo', 'client', '1993', '1993-06-30', 'title', 'description'],
			['#', 'logo', 'client', '1993', '1993-06-30', 'title', 'description'],
	];
@endphp


<x-section-intro
		title="Harnessing technology for a brighter future"
		class="mt-24 sm:mt-32 lg:mt-40"
>
  <p>
    We believe technology is the answer to the world’s greatest
    challenges. It’s also the cause, so we find ourselves in bit of a
    catch 22 situation.
  </p>
</x-section-intro>


<x-container class="mt-16">
	<div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
		  @foreach ($caseStudies as $caseStudie)
			@php [$href, $logo, $client, $year, $date, $title, $description] = $caseStudie;
			@endphp
			<div class="flex">
		  <article
				  class="relative flex w-full flex-col rounded-3xl p-6 ring-1 ring-neutral-950/5 transition hover:bg-neutral-50 sm:p-8">
			<h3>
			  <Link href="{{$href}}">
				<span class="absolute inset-0 rounded-3xl"></span>
				<img src="{{$logo}}" alt="{{$client}}" class="h-16 w-16">
				</Link>
			</h3>
			<p class="mt-6 flex gap-x-2 text-sm text-neutral-950">
			  <time dateTime="{{$year}}" class="font-semibold">
				{{$date}}
			  </time>
			  <span class="text-neutral-300" aria-hidden="true">
				/
			  </span>
			  <span>Case study</span>
			</p>
			<p class="mt-6 font-display text-2xl font-semibold text-neutral-950">
			  {{$title}}
			</p>
			<p class="mt-4 text-base text-neutral-600">
			  {{$description}}
			</p>
		  </article>
		</div>
		@endforeach
	</div>
</x-container>