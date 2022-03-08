@extends('layouts.main')


@section('mainContent')
  <div class="blog-section">
    <h1 class="blog-section__title">Blog</h1>
    <div class="blog-section-container">
      <div class="blog-section__center">
        <div class="blog-section__center-nav">
          <ul class="blog-section__center-nav-list">
            @foreach (trans('postTags.postTags') as $item)
              <li class="blog-section__center-nav-list-item">
                <a href="{{ url('/') }}/blog/pretraga/{{ $item['slug'] }}"
                  class="blog-section__center-nav-list-item-link">{{ $item['name'] }}</a>
              </li>
            @endforeach
          </ul>
        </div>
        <div class="blog-section__article-container">
          @if ($posts->isEmpty())
            <h2 class="blog-section__article-error">Nažalost trenutno nema postova</h2>
          @else
            @foreach ($posts as $post)
              <div class="blog-section__article">
                <div class="blog-section__article-image">
                  <a href="{{ url('/') }}/blog/{{ $post->slug }}" class="blog-section__article-image-link">
                    <img src="{{ asset('images/blog-posts/' . $post->image) }}" alt="{{ $post->title }}">
                  </a>
                </div>
                <div class="blog-section__article-content">
                  <h2 class="blog-section__article-title">{{ $post->title }}</h2>
                  <p class="blog-section__article-lead">
                    {{ \Illuminate\Support\Str::words(strip_tags($post->text), 18) }}
                  </p>
                  <a href="{{ url('/') }}/blog/{{ $post->slug }}" class="blog-section__article-btn">Pročitaj</a>
                </div>
              </div>
            @endforeach
          @endif
        </div>
        {{ $posts->links() }}
      </div>
      @include('partials.sideNavigation.sideNavigation')
    </div>
  </div>
@endsection
