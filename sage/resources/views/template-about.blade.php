{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
	<x-page-intro
            eyebrow="About us" title="Our strength is collaboration">
        <p>
          We believe that our strength lies in our collaborative approach, which
          puts our clients at the center of everything we do.
        </p>
        <div class="mt-10 max-w-2xl space-y-6 text-base">
          <p>
            Studio was started by three friends who noticed that developer
            studios were charging clients double what an in-house team would
            cost. Since the beginning, we have been committed to doing things
            differently by charging triple instead.
          </p>
          <p>
            At Studio, we’re more than just colleagues — we’re a family. This
            means we pay very little and expect people to work late. We want our
            employees to bring their whole selves to work. In return, we just
            ask that they keep themselves there until at least 6:30pm.
          </p>
        </div>
      </x-page-intro>

	<x-container class="mt-16">
        <x-stat-list>
          <x-stat-list-item value="35" label="Underpaid employees"/>
          <x-stat-list-item value="52" label="Placated clients"/>
          <x-stat-list-item value="$25M" label="Invoices billed"/>
        </x-stat-list>
      </x-container>

    <x-culture />

    <x-members />

@endsection