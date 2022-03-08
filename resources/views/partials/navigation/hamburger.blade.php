<nav class="nav-wrap">
  <div class="nav-btn">
    <div class="nav-btn__burger"></div>
  </div>
  <ul class="nav__links">
    @foreach (trans('header.navigation') as $item)
      <li class="header__list">
        <a href="{{ $item['slug'] }}" class="header__link">{{ $item['name'] }}</a>
      </li>
    @endforeach
  </ul>
  {{-- <div class="nav__overlay"></div> --}}
</nav>
