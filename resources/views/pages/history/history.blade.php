@extends('layouts.main')


@section('mainContent')
<div class="history-section">
  @foreach (trans('history.history') as $item)
    <div class="history-container">
      <h1 class="history-section__title">{{ $item['title'] }}</h1>
      <img src="{{ asset('images/' . $item['image_url']) }}" class="history-section__image" alt="{{ $item['title'] }}">
      <div class="history-section__body">{!!$item['text'] !!}</div>
    </div>
  @endforeach
</div>
@endsection
