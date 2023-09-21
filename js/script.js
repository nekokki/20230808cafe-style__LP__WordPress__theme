const swiper = new Swiper('.swiper', {
    loop: true,
    effect: "fade", // フェード切り替え
    // 自動再生
    autoplay: {
      delay: 6000,
      disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
    },
    speed: 4000,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

jQuery(window).on('scroll', function(){
    if(100 < jQuery(this).scrollTop()){
        jQuery('.to__top').addClass('is-show');
    } else {
        jQuery('.to__top').removeClass('is-show');
    }
});

jQuery('a[href^="#"]').on('click', function() {
    var id = jQuery(this).attr('href')
    var position = 0;

    if ( id != "#") {
        position = jQuery(id).offset().top
    }

    jQuery("html, body").animate({
        scrollTop: position
    },
    300);
});

jQuery('.drawer__icon').on('click', function(e) {
    e.preventDefault();

    jQuery('.drawer__menu').toggleClass('is-active');
    jQuery('.menu-btn').toggleClass('is-active');
    jQuery('.drawer__icon').toggleClass('is-active');
    jQuery('.concept2__drawer__logo').toggleClass('is-active');
    jQuery('.drawer__menu__bg').toggleClass('is-active');
    
    return false;
});

jQuery('.drawer__menu').on('click', function(){
    jQuery('.drawer__menu').removeClass('is-active');
    jQuery('.menu-btn').removeClass('is-active');
    jQuery('.drawer__icon').removeClass('is-active');
    jQuery('.concept2__drawer__logo').removeClass('is-active');
    jQuery('.drawer__menu__bg').removeClass('is-active');

});

$(document).ready(function() {
    $('.first-item-right .radio').click(function() {
      // すべてのラジオボタンからcheckedクラスを削除
      $('.first-item-right .radio').removeClass('checked');

      // クリックされたラベルにcheckedクラスを付与
      $(this).addClass('checked');

      // すべてのラジオボタンからchecked属性を削除
      $('.first-item-right .radio input[type="radio"]').prop('checked', false);

      // クリックされたラベルのラジオボタンにchecked属性を付与
      $(this).find('input[type="radio"]').prop('checked', true);
    });
});
