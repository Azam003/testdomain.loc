export default {
  init() {
    // JavaScript to be fired on all pages
    o_c_menu();

    send_form();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

function o_c_menu() {
  $('.o_xs_menu').click(function () {
    $('.xs_menu').addClass('active');
  });

  $('.c_xs_menu').click(function () {
    $('.xs_menu').removeClass('active');
  })
}

function send_form() {

  $('.form-container').submit(function (form) {

    var this_form = $(this);

    location.hash = 'ok';

    alert('Успешно');
    $.ajax({
      url: this_form.attr('action'),
      type: this_form.attr('method'),
      data: $(form).serialize(),
    });
    $('input[type=text]').val('');
    $('input[type=tel]').val('');
    $('input[type=email]').val('');
    $('textarea').val('');
    // window.location.href = "thanks.html";
    return false;
  });
}
