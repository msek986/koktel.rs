<aside class="blog-section__aside">
  <div class="blog-section__aside-content">
    <h3 class="blog-section__aside-content-title">Najčitaniji postovi</h3>
    @foreach ($popularPosts as $post)
      <div class="blog-section__aside-post">
        <a href="{{ url('/') }}/blog/{{ $post->slug }}" class="blog-section__aside-post-link">
          <img src="{{ asset('images/blog-posts/' . $post->image) }}" alt="{{ $post->title }}"
            class="blog-section__aside-post-image">
          <h5 class="blog-section__aside-post-title">{{ $post->title }}</h5>
        </a>
      </div>
    @endforeach
  </div>
  <div class="banner banner--col">
    @foreach ($banners as $banner)
      @if ($banner->position == 3)
        <div class="banner__bottom">
          <a href="{{ $banner->url }}" target="_blank" rel="noopener noreferrer">
            <img class="banner__bottom-image" src="{{ asset('images/banners/' . $banner->image) }}" alt="">
          </a>
        </div>
      @endif
    @endforeach
  </div>
</aside>
