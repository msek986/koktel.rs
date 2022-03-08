@extends('app')

@section('content')
  @include('components.loader')
  @include('partials.header')
  @yield('video')
  <div class="main-container">
    @yield('mainContent')
  </div>
  @include('components.backToTop')
  @include('partials.footer')
@endsection
