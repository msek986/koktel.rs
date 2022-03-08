@extends('layouts.main')

@section('mainContent')
    <div class="privacy-container">
        <h1 class="privacy__heading">Politika privatnosti</h1>
        @foreach (trans('terms.privacy-policy') as $policy)
            <div class="privacy__content">
                <h2 class="privacy__title">{{ $policy['title'] }}</h2>
                <p class="privacy__lead">{!! $policy['lead'] !!}</p>
            </div>
        @endforeach
    </div>
@endsection