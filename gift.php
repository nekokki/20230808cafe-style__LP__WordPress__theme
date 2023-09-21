<?php
/* Template Name: ギフト・贈り物 */
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
    <title>ギフト・贈り物</title>
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
            <span class="p-first-view__heading-inline-en">GIFT</span>
            <span class="p-first-view__heading-inline-ja">ギフト・贈り物</span>
          </h1>
          <picture class="p-first-view__img">
            <!-- <source media="(max-width: 767px)" srcset="https://cafe.web-developers.org/wp-content/themes/tokyo-cafe/assets/images/concept/sp/img_firstview.jpg"> -->
            <img src="<?php echo get_template_directory_uri() ?>/img/gift/img_firstview_gift@2x.png" alt="news" loading="lazy" width="1280" height="320">
            <img class="mqspimg" src="<?php echo get_template_directory_uri() ?>/img/gift/img_firstview_gift@2x.png" alt="news" loading="lazy" width="1280" height="320">
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

    <section class="main">
        <div class="first__block">
            <div class="first__block__left">
                <div class="gift__items left__items">
                    <div class="left__img"><img src="<?php echo get_template_directory_uri() ?>/img/gift/img_item1@2x.png" alt=""></div>
                    <div class="gift__title left__title">○○○○の詰め合わせギフト</div>
                    <div class="gift__price left__price">3000 yen</div>
                    <div class="gift__button🇰left__button"><a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>">ショップで確認する</a></div>
                </div>
                <!-- /.left__items -->
            </div>
            <!-- /.first__block__left -->
            <div class="first__block__right">
                <div class="gift__items right__items">
                    <div class="right__item">
                        <div class="gift__img right__img"><img src="<?php echo get_template_directory_uri() ?>/img/gift/img_item2@2x.png" alt=""></div>
                        <div class="gift__title right__title">○○○○の詰め合わせギフト</div>
                        <div class="gift__price right__price">3000 yen</div>
                        <div class="gift__button right__button"><a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>">ショップで確認する</a></div>
                    </div>
                    <!-- /.right__item -->
                    <div class="right__item">
                        <div class="gift__img right__img"><img src="<?php echo get_template_directory_uri() ?>/img/gift/img_item3-1@2x.png" alt=""></div>
                        <div class="gift__title right__title">○○○○の詰め合わせギフト</div>
                        <div class="gift__price right__price">3000 yen</div>
                        <div class="gift__button right__button"><a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>">ショップで確認する</a></div>
                    </div>
                    <!-- /.right__item -->
                    <div class="right__item">
                        <div class="gift__img right__img"><img src="<?php echo get_template_directory_uri() ?>/img/gift/img_item3@2x.png" alt=""></div>
                        <div class="gift__title right__title">○○○○の詰め合わせギフト</div>
                        <div class="gift__price right__price">3000 yen</div>
                        <div class="gift__button right__button"><a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>">ショップで確認する</a></div>
                    </div>
                    <!-- /.right__item -->
                    <div class="gift__items right__item">
                        <div class="gift__img right__img"><img src="<?php echo get_template_directory_uri() ?>/img/gift/img_item4@2x.png" alt=""></div>
                        <div class="gift__title right__title">○○○○の詰め合わせギフト</div>
                        <div class="gift__price right__price">3000 yen</div>
                        <div class="gift__button right__button"><a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>">ショップで確認する</a></div>
                    </div>
                    <!-- /.gift__items .right__item -->
                </div>
                <!-- /.gift__items right__items -->
            </div>
            <!-- /.first__block__right -->
        </div>
        <!-- /.first__block -->
        <div class="first__block__bottom">
            <div class="first__block__bottom__items">
                <div class="gift__items bottom__item">
                    <div class="gift__img bottom__img"><img src="<?php echo get_template_directory_uri() ?>/img/gift/img_item5@2x.png" alt=""></div>
                    <div class="gift__title bottom__title">○○○○の詰め合わせギフト</div>
                    <div class="gift__price bottom__price">3000 yen</div>
                    <div class="gift__button bottom__button"><a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>">ショップで確認する</a></div>
                </div>
                <!-- /.gift__items .right__item -->
                <div class="gift__items bottom__item">
                    <div class="gift__img bottom__img"><img src="<?php echo get_template_directory_uri() ?>/img/gift/img_item6@2x.png" alt=""></div>
                    <div class="gift__title bottom__title">○○○○の詰め合わせギフト</div>
                    <div class="gift__price bottom__price">3000 yen</div>
                    <div class="gift__button bottom__button"><a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>">ショップで確認する</a></div>
                </div>
                <!-- /.gift__items .right__item -->
                <div class="gift__items bottom__item">
                    <div class="gift__img bottom__img"><img src="<?php echo get_template_directory_uri() ?>/img/gift/img_item7@2x.png" alt=""></div>
                    <div class="gift__title bottom__title">○○○○の詰め合わせギフト</div>
                    <div class="gift__price bottom__price">3000 yen</div>
                    <div class="gift__button bottom__button"><a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>">ショップで確認する</a></div>
                </div>
                <!-- /.gift__items .right__item -->
                <div class="gift__items bottom__item">
                    <div class="gift__img bottom__img"><img src="<?php echo get_template_directory_uri() ?>/img/gift/img_item8@2x.png" alt=""></div>
                    <div class="gift__title bottom__title">○○○○の詰め合わせギフト</div>
                    <div class="gift__price bottom__price">3000 yen</div>
                    <div class="gift__button bottom__button"><a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>">ショップで確認する</a></div>
                </div>
                <!-- /.gift__items .right__item -->
            </div>
            <!-- /.first__block__bottom__items -->
        </div>
        <!-- /.first__block__bottom -->
        <div class="second__block">
            <div class="second__items">
                <div class="second__left">
                    <div class="second__left__title">ラッピングは無料でお付けいたします。<br class="brmqsp">お気軽にご相談ください。</div>
                    <div class="second__left__lead">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</div>
                </div>
                <!-- /.second__left -->
                <div class="second__right">
                    <img src="<?php echo get_template_directory_uri() ?>/img/gift/img_wrapping@2x.png" alt="">
                </div>
                <!-- /.second__right -->
            </div>
            <!-- /.second__items -->
        </div>
        <!-- /.second__block -->
    </section>
    <!-- /.main -->

    <?php get_footer(); ?>