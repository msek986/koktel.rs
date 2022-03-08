<footer>
  <div class="footer-container">
    <div class="footer__content">

      {{-- Footer Links --}}

      <div class="footer__content-items">
        @foreach (trans('footer.footer') as $col)
          <div class="footer__list">
            <h3>{!! $col['title'] !!}</h3>
            @if ($col['content'] != 0)
              <ul>
                @foreach ($col['content'] as $item)
                  <li @if ($item['external']) class="footer__social-icons" @endif>
                    @if (empty($item['slug']) && $item['name'])
                      <i class="{{ $item['icon'] }}"></i> {{ $item['name'] }}
                  </li>
                @else
                  <a href="
                @if (empty($item['external'])) {{ $item['slug'] }} @else {{ $item['external'] }} @endif"
                    class="footer__link" @if ($item['external']) target="_blank"
                  rel="noopener noreferrer"><i class="{{ $item['icon'] }}"></i></a> @else
                  >
                  @if ($item['name'] && $item['icon'])
                    <i class="footer__info-icon {{ $item['icon'] }}"></i>{{ $item['name'] }}</a>
                  @else
                    {{ $item['name'] }}</a>
                  @endif
                @endif
                </li>
            @endif
        @endforeach
        </ul>
        @endif
      </div>
      @endforeach
    </div>

    {{-- Privacy --}}

    <div class="footer__terms">
      <div class="footer__privacy">
        @foreach (trans('footer.legal') as $item)
          <a href="{{ $item['slug'] }}" class="footer__link">{{ $item['title'] }}</a>
        @endforeach
      </div>
      <p class="footer__lead">{!! trans('footer.rights') !!}</p>
    </div>
  </div>
</footer>
