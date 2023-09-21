<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>news</title>
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
            <span class="p-first-view__heading-inline-en">NEWS</span>
            <span class="p-first-view__heading-inline-ja">お知らせ</span>
          </h1>
          <picture class="p-first-view__img">
            <!-- <source media="(max-width: 767px)" srcset="https://cafe.web-developers.org/wp-content/themes/tokyo-cafe/assets/images/concept/sp/img_firstview.jpg"> -->
            <img src="
            <?php
                if (is_page('concept')) {
                    $header_image = '<?php echo get_template_directory_uri() ?>/img/first-view/img_firstview_concept@2x.png';
                } elseif (is_page('contact-complete')) {
                    $header_image = '<?php echo get_template_directory_uri() ?>/img/first-view/img_firstview_contact@2x.png';
                } elseif (is_page('contact')) {
                    $header_image = '<?php echo get_template_directory_uri() ?>/img/first-view/img_firstview_contact@2x.png';
                } elseif (is_page('gift')) {
                    $header_image = '<?php echo get_template_directory_uri() ?>/img/first-view/img_firstview_gift@2x.png';
                } elseif (is_page('menu-drink')) {
                    $header_image = '<?php echo get_template_directory_uri() ?>/img/first-view/img_firstview_menu@2x.png';
                } elseif (is_page('menu-pasta')) {
                    $header_image = '<?php echo get_template_directory_uri() ?>/img/first-view/img_firstview_menu@2x.png';
                } elseif (is_page('menu-salad')) {
                    $header_image = '<?php echo get_template_directory_uri() ?>/img/first-view/img_firstview_menu@2x.png';
                } elseif (is_page('menu')) {
                    $header_image = '<?php echo get_template_directory_uri() ?>/img/first-view/img_firstview_menu@2x.png';
                } elseif (is_page('shop')) {
                    $header_image = '<?php echo get_template_directory_uri() ?>/img/first-view/img_firstview_shop@2x.png';
                } else {
                    $header_image = '<?php echo get_template_directory_uri() ?>/img/first-view/img_firstview_news@2x.png';
                }
            ?>
            " alt="news" loading="lazy" width="1280" height="320">
            <img class="mqspimg" src="<?php echo get_template_directory_uri() ?>/img/news/img_firstview_news_sp@2x.png" alt="news" loading="lazy" width="1280" height="320">
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
                    <div class="drawer__menu__lead"><a href="<?php echo get_permalink( get_page_by_path('news') ); ?>"><span class="span__en">NEWS</span><span class="span__ja">/</span><span class="span__ja">お知らせ</span></a></div>
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