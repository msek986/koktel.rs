@extends('layouts.main')


@section('mainContent')
  <div class="bars-section">
    <h1 class="bars-section__title">Koktel barovi</h1>
    <div class="bars-container">
      @foreach ($bars as $bar)
        <div class="bars-body">
          <div class="bars-body__image">
            <img src="{{ asset('images/' . $bar->image_path) }}" alt="{{ $bar->name }}">
          </div>
          <div class="bars-body__details">
            <h1 class="bars-body__title">{!! $bar->name !!}</h1>
            <div class="bars-body__ingredients">
              <h3 class="bars-body__ingredients-title">Adresa:</h3>
              <p class="bars-body__ingredients-lead">{{ $bar->address }}</p>
            </div>
            <div class="bars-body__preparation">
              <h3 class="bars-body__preparation-title">Telefon:</h3>
              <p class="bars-body__preparation-lead">{{ $bar->telephone }}</p>
            </div>
            <ul class="bars-body__social">
              @foreach ($bar->barSocial as $item)
                <li class="bars-body__social-item">
                  <a href="{{ $item->slug }}" class="bars-body__social-icon"><i class="{{ $item->icon }}"></i></a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  </div>
@endsection
