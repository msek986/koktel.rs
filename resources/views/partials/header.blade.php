<header class="header {{ Request::is('/', 'pretraga', 'pretraga/*') ? '' : 'header--white' }}">
  <div class="header-container {{ Request::is('/', 'pretraga', 'pretraga/*') ? '' : 'header--white' }}">
    <a href="/" class="header__logo">
      <img src="{{ asset('images/logo1.svg') }}" alt="logo" class="header__logo-image">
    </a>
    <ul class="header__links">
      @foreach (trans('header.navigation') as $item)
        <li class="header__list">
          <a href="{{ $item['slug'] }}"
            class="{{ Request::is('/', 'pretraga', 'pretraga/*') ? 'header__link' : 'header__link--black' }}">{{ $item['name'] }}</a>
        </li>
      @endforeach
    </ul>
    @include('partials.navigation.hamburger')
  </div>
</header>
