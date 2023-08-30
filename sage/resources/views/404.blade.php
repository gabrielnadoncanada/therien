@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())

    {!! get_search_form(false) !!}
  @endif
@endsection
