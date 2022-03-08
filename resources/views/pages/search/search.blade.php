@extends('layouts.main')


@section('mainContent')
  <img src="{{ asset('images/background.jpg') }}" class="search-background" alt="cocktail">
  <div class="search-section">
    @foreach ($banners as $banner)
      @if ($banner->position == 1)
        <div class="search-banner__top">
          <a href="{{ $banner->url }}" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('images/banners/' . $banner->image) }}" alt="" class="search-banner__top-image">
          </a>
        </div>
      @endif
    @endforeach
    <p class="search-section__paragraph">Pretraži našu bazu koktela po nazivu, vrsti pića ili drugim sastojcima i uživaj!
    </p>
    <form class="search__form" action="/pretraga">
      @csrf
      <input type="search" class="search__form-input" name="query" autocomplete="off" name="search" id="search"
        placeholder='Pretraži koktele'>
      <button type="submit" class="search__form-btn">
        <i class="fas fa-search search__form-btn-icon"></i>
      </button>
    </form>
    <div class="cocktail-list">
      <div class="cocktail-list-container">
        @if ($drinks->isEmpty())
          <h2>Ups, probaj da ukucaš neko drugo ime ili sastojak.</h2>
        @else
          @foreach ($drinks as $cocktail)
            <div class="cocktail-list__item">
              <a href="/koktel/{{ $cocktail->id }}-{{ \Illuminate\Support\Str::slug($cocktail->name, '-') }}">
                <img src="{{ asset('images/' . $cocktail->image_path) }}" alt="{{ $cocktail->name }}"
                  class="cocktail-list__image">
              </a>
              <div class="cocktail-list__info">
                <h3 class="cocktail-list__info-title">{{ $cocktail->name }}</h3>
                <h4 class="cocktail-list__info-glass">{{ $cocktail->glass }}</h4>
                <a href="/koktel/{{ $cocktail->id }}-{{ \Illuminate\Support\Str::slug($cocktail->name, '-') }}"
                  class="cocktail-list__info-btn">Detalji</a>
              </div>
            </div>
          @endforeach

        @endif
      </div>
      {{ $drinks->links() }}
    </div>
  </div>
  <div class="banner">
    @foreach ($banners as $banner)
      @if ($banner->position == 3)
        <div class="search-banner__bottom">
          <a href="{{ $banner->url }}" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('images/banners/' . $banner->image) }}" class="search-banner__bottom-image" alt="">
          </a>
        </div>
      @endif
    @endforeach
  </div>
@endsection
