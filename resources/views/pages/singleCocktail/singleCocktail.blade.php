@extends('layouts.main')
@section('mainContent')
  <div class="single-section">
    <div class="single-container">
      @if (empty($cocktail->name))
        <h2 class="error-margin">Ups, stranica ne postoji.</h2>
      @else
        <h1 class="single-cocktail__title">{{ $cocktail->name }}</h1>
        <div class="single-cocktail">
          <div class="single-cocktail__image">
            <img src="{{ asset('images/' . $cocktail->image_path) }}" alt="{{ $cocktail->name }}">
          </div>
          <div class="single-cocktail__details">
            <div class="single-cocktail__ingredients">
              <h3 class="single-cocktail__ingredients-title">Sastojci:</h3>
              <ul class="single-cocktail__ingredients-list">
                @foreach ($cocktail->drinkIngredient as $ingredient)
                  <li class="single-cocktail__ingredients-list-item">{{ $ingredient->name }}</li>
                @endforeach
              </ul>
            </div>
            <div class="single-cocktail__preparation">
              <h3 class="single-cocktail__preparation-title">Priprema:</h3>
              <p class="single-cocktail__preparation-lead">{{ $cocktail->preparation }}</p>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
@endsection
