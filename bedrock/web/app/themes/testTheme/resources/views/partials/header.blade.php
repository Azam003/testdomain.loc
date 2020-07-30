<header class="header">
  <div class="top_header">
    <div class="container">
      <div class="top_header_left_side">
        <a href="{{ home_url('/') }}" class="top_header_logo">
          <img src="@asset('images/images.png')">
        </a>

        <div class="top_header_address">
          <p>
            г. Казань, ул. Серова, 48
          </p>
        </div>

        <div class="top_header_download_price">
          <a href="">
            Скачать прайс
          </a>
        </div>
      </div>

      <div class="top_header_right_side">
        <button class="top_header_order_btn">
          Записаться на прием
        </button>
      </div>
    </div>
  </div>

  <div class="bottom_header">
    <div class="container">
      <div class="bottom_header_left_side">
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>

      <div class="bottom_header_right_side">
        <a href="tel:+79297256114" class="bottom_header_phone">
          +7 929 725 61 14
        </a>
      </div>

      <div class="o_xs_menu">
        <img src="@asset('images/open-menu.svg')" alt="open menu">
      </div>
    </div>

{{--    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}

  </div>
</header>

<div class="xs_menu">
  <div class="overlay c_xs_menu"></div>

  <div class="xs_cont">
    <div class="c_xs_menu">
      <img class="close_btn" src="@asset('images/close.svg')" alt="Close">
    </div>

    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </div>
</div>
