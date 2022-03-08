@extends('layouts.main')
@section('video')
  @include('components.video')
@endsection
@section('mainContent')
  <div class="video__cta">
    <div><span>TVOJ IZBOR</span></div>
    <div><span>ZA TRENUTKE</span></div>
    <div><span>UŽIVANJA</span></div>
    <a href="/pretraga" class="video__cta-btn">PRONAĐI SVOJ KOKTEL</a>
  </div>
  @foreach ($banners as $banner)
    @if ($banner->position == 1)
      <div class="banner__top">
        <a href="{{ $banner->url }}" target="_blank" rel="noopener noreferrer">
          <img src="{{ asset('images/banners/' . $banner->image) }}" alt="">
        </a>
      </div>
    @endif
  @endforeach
  <div class="search-drinks">
    <h2 class="search-drinks__title">Izaberi svoje omiljeno piće</h2>
    <div class="search-drinks-container">
      @foreach ($search_options as $item)
        <div class="search-drinks__item">
          <a href="pretraga/{{ $item->slug }}">
            <img src="{{ asset('images/' . $item->image_path) }}" class="search-drinks__image" alt="image">
            <h4 class="search-drinks__label">{{ $item->name }}</h4>
          </a>
        </div>
      @endforeach
    </div>
  </div>
  <div class="banner">
    @foreach ($banners as $banner)
      @if ($banner->position == 2)
        <div class="banner__middle">
          <a href="{{ $banner->url }}" target="_blank" rel="noopener noreferrer">
            <img class="banner__middle-image" src="{{ asset('images/banners/' . $banner->image) }}" alt="">
          </a>
        </div>
      @endif
    @endforeach
  </div>
  <div class="cta">
    @foreach (trans('home.cta') as $cta)
      <div class="cta-section">
        <img src="{{ asset('images/' . $cta['image_url']) }}" class="cta-section__image" alt='{{ $cta['name'] }}'>
        <div class="cta-section__content">
          <h4 class="cta-section__title">{{ $cta['name'] }}</h4>
          <p class="cta-section__lead">{{ $cta['text'] }}</p>
          <a href="{{ $cta['slug'] }}" class="cta-section__btn">{{ $cta['btn'] }}</a>
        </div>
      </div>
    @endforeach
  </div>
  <div class="banner">
    @foreach ($banners as $banner)
      @if ($banner->position == 3)
        <div class="banner__bottom">
          <a href="{{ $banner->url }}" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('images/banners/' . $banner->image) }}" class="banner__bottom-image" alt="">
          </a>
        </div>
      @endif
    @endforeach
  </div>
@endsection
