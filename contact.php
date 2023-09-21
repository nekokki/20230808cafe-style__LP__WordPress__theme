<?php
/* Template Name: お問い合わせ */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Noto+Serif+JP:wght@400;700&family=Patua+One&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <title>お問い合わせ</title>
</head>
<body>
    <div class="drawer__menu__bg"></div>

    <section class="drawer menu__drawer">
        <div class="drawer__items">
            <div class="drawer__icon"><label for="menu-btn-check" class="menu-btn"><span></span></label></div>
        </div>
    </section>

    <div class="l-first-view">
        <div class="p-first-view">
          <h1 class="p-first-view__heading">
            <span class="p-first-view__heading-inline-en">CONTACT</span>
            <span class="p-first-view__heading-inline-ja">お問い合わせ</span>
          </h1>
          <picture class="p-first-view__img">
            <!-- <source media="(max-width: 767px)" srcset="https://cafe.web-developers.org/wp-content/themes/tokyo-cafe/assets/images/concept/sp/img_firstview.jpg"> -->
            <img src="<?php echo get_template_directory_uri() ?>/img/img_firstview_contact@2x.png" alt="news" loading="lazy" width="1280" height="320">
            <img class="mqspimg" src="<?php echo get_template_directory_uri() ?>/img/img_firstview_contact@2x.png" alt="news" loading="lazy" width="1280" height="320">
          </picture>
        </div>
        <!-- /.p-first-view -->
      </div>

    <section class="drawer__menu concept2__drawer__menu">
        <div class="drawer__menu__items">
            <div class="drawer__logo drawer__menu__logo"><img src="<?php echo get_template_directory_uri() ?>/img/top-sp/logo_light.svg" alt=""></div>
            <div class="drawer__menu__item">
                <div class="drawer__menu__leads">
                    <div class="drawer__menu__lead"><a href="<?php echo home_url('/'); ?>"><span class="span__en">TOP</span><span class="span__ja">/</span><span class="span__ja">トップ</span></a></div>
                    <div class="drawer__menu__lead"><a href="<?php echo get_permalink( get_page_by_path('concept') ); ?>"><span class="span__en">CONCEPT</span><span class="span__ja">/</span><span class="span__ja">コンセプト</span></a></div>
                    <div class="drawer__menu__lead"><a href="<?php echo get_permalink( get_page_by_path('menu') ); ?>"><span class="span__en">MENU</span><span class="span__ja">/</span><span class="span__ja">メニュー</span></a></div>
                    <div class="drawer__menu__lead"><a href="http://neko-tsuki.com/my-portfolio3/category/news/"><span class="span__en">NEWS</span><span class="span__ja">/</span><span class="span__ja">お知らせ</span></a></div>
                    <div class="drawer__menu__lead"><a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>"><span class="span__en">SHOP</span><span class="span__ja">/</span><span class="span__ja">店舗情報</span></a></div>
                    <div class="drawer__menu__lead"><a href="<?php echo get_permalink( get_page_by_path('gift') ); ?>"><span class="span__en">GIFT</span><span class="span__ja">/</span><span class="span__ja">ギフト・贈り物</span></a></div>
                    <div class="drawer__menu__lead"><a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>"><span class="span__en">CONTACT</span><span class="span__ja">/</span><span class="span__ja">お問い合わせ</span></a></div>
                </div>
                <div class="drawer__menu__sns">
                    <a href="#"><i class="fa-brands fa-twitter fa-2xl" style="color: #fff;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram fa-2xl" style="color: #fff;"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube fa-2xl" style="color: #fff;"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="breadcrumb news__breadcrumb">
        <?php bcn_display(); ?>
    </div>

    <section class="contact">
        <div class="contact-title">お問い合わせフォーム</div>
        <div class="first-lead">お問い合わせ内容に応じて、項目をご選択のうえ、お気軽にお問い合わせください。</div>
        <div class="contact-first-item flex">
            <div class="contact-item-left">
                <div class="first-title"><span class="contact-item-title">お問い合わせ項目</span></div>
            </div>
            <div class="first-item-right">
                <label class="radio checked"><input type="radio" checked="checked">お店のご利用・ご予約について</label>
                <label class="radio"><input type="radio">ギフト(贈り物)について</label>
                <label class="radio"><input type="radio">アルバイト応募について</label>
                <label class="radio"><input type="radio">その他</label>
            </div>
        </div>
        <!-- /.contact-first-item -->
        <div class="contact-second-item flex">
            <div class="second-title"><span class="contact-item-title">お名前</span></div>
            <input type="name" class="contact__form__name" placeholder="お名前を入力してください">
        </div>
        <!-- /.contact-second-item -->
        <div class="contact-thrid-item flex">
            <div class="thrid-title"><span class="contact-item-title">メールアドレス</span></div>
            <input type="email" class="contact__form__email" placeholder="example@mail.com">
        </div>
        <!-- /.contact-thrid-item -->
        <div class="contact-fourth-item flex">
            <div class="fourth-title"><span class="contact-item-title no-require">電話番号</span></div>
            <input type="number" class="contact__form__phone" placeholder="09012345678">
        </div>
        <!-- /.contact-fourth-item -->
        <div class="contact-fifth-item flex">
            <div class="fifth-title"><span class="contact-item-title">お問い合わせ内容</span></div>
            <textarea name="" id="" cols="30" rows="10" placeholder="お問い合わせ内容を入力してください" class="contact__textarea"></textarea>
        </div>
        <!-- /.contact-fifth-item -->
        <div class="contact-lead">当社は、お客様の個人情報の流出・漏洩の防止、その他個人情報の安全管理のために必要かつ適切な措置を講じるものとし、法令などに正当な理由がある場合を除き、お客様の同意なく目的外での利用および第三者への提供は行いません。</div>
        <div class="button contact-button"><a href="">送信</a></div>
    </section>
    <!-- /.contact -->

    <?php get_footer(); ?>