@extends('layouts.main')


@section('mainContent')

  <div class="popular-section">
    <h1 class="popular-section__title">Popularni kokteli</h1>
    @foreach ($popular as $cocktail)
      <div class="popular-cocktail-container">
        <h1 class="popular-cocktail__title">{{ $cocktail->name }}</h1>
        <div class="popular-cocktail__history">
          <h3 class="popular-cocktail__history-title">Istorija koktela</h3>
          <p class="popular-cocktail__history-lead">{{ $cocktail->history }}</p>
        </div>
        <div class="popular-cocktail__body">
          <div class="popular-cocktail__body-image">
            <img src="{{ asset('images/' . $cocktail->image_path) }}" alt="{{ $cocktail->name }}">
          </div>
          <div class="popular-cocktail__body-details">
            <div class="popular-cocktail__body-ingredients">
              <h3 class="popular-cocktail__body-ingredients-title">Sastojci:</h3>
              <ul class="popular-cocktail__body-ingredients-list">
                @foreach ($cocktail->drinkIngredient as $ingredient)
                  <li class="popular-cocktail__body-ingredients-list-item">{{ $ingredient->name }}</li>
                @endforeach
              </ul>
            </div>
            <div class="popular-cocktail__body-preparation">
              <h3 class="popular-cocktail__body-preparation-title">Priprema:</h3>
              <p class="popular-cocktail__body-preparation-lead">{{ $cocktail->preparation }}</p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
