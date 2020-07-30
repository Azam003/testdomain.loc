@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="main_form">
      <h3 class="h3">
        Записаться на прием к стоматологу в Казани
      </h3>

      <form class="form-container" action="<?php echo get_template_directory_uri() ?>/send.php" method="POST">
        <input type="hidden" name="what" value="Записаться на прием к стоматологу в Казани">

        <div class="l_side">
          <div class="inp inp_name">
            <input type="text" name="name" required placeholder="Имя*">
          </div>

          <div class="inp inp_phone">
            <input type="text" name="phone" required placeholder="Мобильный телефон*">
          </div>

          <div class="inp inp_email">
            <input type="text" name="email" required placeholder="Электронная почта*">
          </div>

          <div class="inp inp_date">
            <input type="date" name="date" placeholder="Дата">
          </div>

          <div class="inp inp_time">
            <input type="time" name="time" placeholder="Время">
          </div>
        </div>

        <div class="r_side">
          <div class="inp inp_message">
            <textarea name="message" placeholder="Расскажите о своей проблеме"></textarea>
          </div>
        </div>

        <div class="line">
          <p>
            Отправляя форму я соглашаюсь с <a href="">условиями передачи информации</a>
          </p>

          <button type="submit" class="btn_send">
            Записаться на прием
          </button>
        </div>
      </form>
  </div>
{{--  @if (!have_posts())--}}
{{--    <div class="alert alert-warning">--}}
{{--      {{ __('Sorry, no results were found.', 'sage') }}--}}
{{--    </div>--}}
{{--    {!! get_search_form(false) !!}--}}
{{--  @endif--}}

{{--  @while (have_posts()) @php the_post() @endphp--}}
{{--    @include('partials.content-'.get_post_type())--}}
{{--  @endwhile--}}

{{--  {!! get_the_posts_navigation() !!}--}}
@endsection


