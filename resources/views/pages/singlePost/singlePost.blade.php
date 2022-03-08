@extends('layouts.main')

@section('mainContent')
  <div class="blog-section">
    <div class="blog-section-container">
      <div class="blog-section__center">
        <h1 class="blog-section__single-title">{{ $singlePost->title }}</h1>
        <div class="blog-section__single-lead">
          {{-- @foreach ($singlePost->postImages as $images)
            @if ($images->position == 1)
              <img src="{{ asset('images/blog-posts/' . $images->image) }}" alt="">
            @elseif ($images->position == 2)
              <img src="{{ asset('images/blog-posts/' . $images->image) }}" alt="">
            @elseif ($images->position == 3)
              <img src="{{ asset('images/blog-posts/' . $images->image) }}" alt="">
            @endif
          @endforeach --}}
          {!! $singlePost->text !!}
        </div>
      </div>
      @include('partials.sideNavigation.sideNavigation')
    </div>
  </div>
@endsection
