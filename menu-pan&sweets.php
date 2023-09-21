<?php
/* Template Name: パン & スイーツ */
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
    <title>メニュー</title>
</head>
<body>
    <div class="drawer__menu__bg"></div>

    <section class="drawer menu__drawer">
        <div class="drawer__items">
            <div class="drawer__logo concept2__drawer__logo menu__drawer__icon"><img src="<?php echo get_template_directory_uri() ?>/img/top-sp/logo_light.svg" alt=""></div>
            <div class="drawer__icon"><label for="menu-btn-check" class="menu-btn"><span></span></label></div>
        </div>
    </section>

    <section class="drawer__menu concept2__drawer__menu">
        <div class="drawer__menu__items">
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

    <section class="concept concept2__bg menu2_bg">
        <div class="concept__outlines">
            <div class="section__title__item concept2__item">
                <div class="section__title concept2__title">MENU</div>
                <div class="section__title__lead concept2__title__lead">メニュー</div>
            </div>
        </div>
    </section>
    <!-- /.concept -->

    <div class="breadcrumb news__breadcrumb">
        <?php bcn_display(); ?>
    </div>

    <section class="menu__category">
        <div class="category__items">
            <div class="category__product btn category__btn"><a href="<?php echo get_permalink( get_page_by_path('menu/pasta') ); ?>">パスタ</a></div>
            <div class="category__product btn category__btn"><a href="<?php echo get_permalink( get_page_by_path('menu/salad') ); ?>">サラダ</a></div>
            <div class="category__product btn category__btn" style="background:#382620;"><a href="<?php echo get_permalink( get_page_by_path('menu/pans-sweets') ); ?>">パン&<br>スイーツ</a></div>
            <div class="category__product btn category__btn"><a href="<?php echo get_permalink( get_page_by_path('menu/drink') ); ?>">ドリンク</a></div>
        </div>
        <!-- /.category__items -->
    </section>
    <!-- /.menu__category -->

    <section class="menu__items">
        <div class="menu__item">
            <div class="grand__menu__set menu__set">
                <div class="grand__menu__item__img menu__set__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_sweets1@2x.png" alt=""></div>
                <div class="grand__menu__item__title menu__set__title">○○○○風スイーツ</div>
                <div class="grand__menu__item__price menu__set__price">780 yen</div>
            </div>
            <!-- /.grand__menu__set -->
            <div class="grand__menu__set menu__set">
                <div class="grand__menu__item__img menu__set__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_sweets2@2x.png" alt=""></div>
                <div class="grand__menu__item__title menu__set__title">○○○○風スイーツ</div>
                <div class="grand__menu__item__price menu__set__price">780 yen</div>
            </div>
            <!-- /.grand__menu__set -->
            <div class="grand__menu__set menu__set">
                <div class="grand__menu__item__img menu__set__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_sweets3@2x.png" alt=""></div>
                <div class="grand__menu__item__title menu__set__title">○○○○風スイーツ</div>
                <div class="grand__menu__item__price menu__set__price">780 yen</div>
            </div>
            <!-- /.grand__menu__set -->
            <div class="grand__menu__set menu__set">
                <div class="grand__menu__item__img menu__set__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_sweets4@2x.png" alt=""></div>
                <div class="grand__menu__item__title menu__set__title">○○○○風スイーツ</div>
                <div class="grand__menu__item__price menu__set__price">780 yen</div>
            </div>
            <!-- /.grand__menu__set -->
            <div class="grand__menu__set menu__set">
                <div class="grand__menu__item__img menu__set__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_sweets5@2x.png" alt=""></div>
                <div class="grand__menu__item__title menu__set__title">○○○○風スイーツ</div>
                <div class="grand__menu__item__price menu__set__price">780 yen</div>
            </div>
            <!-- /.grand__menu__set -->

        </div>
        <!-- /.menu__item -->
    </section>
    <!-- /.menu__items -->

    <?php get_footer(); ?>