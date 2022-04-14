@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <div class="grid grid-cols-6 gap-4">
    <div class="hidden md:block"></div>
    <div class="col-span-6 md:col-span-5">
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
    </div>
  </div>
  @endwhile
@endsection
