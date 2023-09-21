<?php
/* Template Name: 店舗一覧 */
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
    <title>店舗一覧</title>
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
            <span class="p-first-view__heading-inline-en">SHOP</span>
            <span class="p-first-view__heading-inline-ja">店舗一覧</span>
          </h1>
          <picture class="p-first-view__img">
            <!-- <source media="(max-width: 767px)" srcset="https://cafe.web-developers.org/wp-content/themes/tokyo-cafe/assets/images/concept/sp/img_firstview.jpg"> -->
            <img src="<?php echo get_template_directory_uri() ?>/img/top/img_firstview_shop@2x.png" alt="news" loading="lazy" width="1280" height="320">
            <img class="mqspimg" src="<?php echo get_template_directory_uri() ?>/img/top/img_firstview_shop_sp@2x.png" alt="news" loading="lazy" width="1280" height="320">
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

    <div class="shop-wrap">
        <div class="section__access menu__access shop__aceess">
            <div class="section__title__item access__title shop_title">
                <h2 class="h2 news__page__h2 shop__h2">OPEN CAFE　吉祥寺店</h2>
            </div>
            <div class="iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0370291727304!2d139.57763767574764!3d35.70070637890396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ee39b555205f%3A0xabb26a0a2fbda595!2z44CSMTgwLTAwMDMg5p2x5Lqs6YO95q2m6JS16YeO5biC5ZCJ56Wl5a-65Y2X55S677yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1691642985606!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="access__items shop__items">
                <div class="access__items__left">
                    <div class="access__items__left__item">
                        <div class="access__items__left__title access__font__left">住所</div>
                        <div class="access__items__left__lead access__font__right">〒000-0000<br>東京都武蔵野市吉祥寺南町一丁目</div>
                    </div>
                    <!-- /.access__items__left__item -->
                    <div class="access__items__left__item">
                        <div class="access__items__left__title access__font__left">TEL</div>
                        <div class="access__items__left__lead access__font__right">0123-456-789</div>
                    </div>
                    <!-- /.access__items__left__item -->
                    <div class="access__items__left__item">
                        <div class="access__items__left__title access__font__left">Mail</div>
                        <div class="access__items__left__lead access__font__right">example@mail.com</div>
                    </div>
                    <!-- /.access__items__left__item -->
                </div>
                <!-- /.access__items__left -->
                <div class="access__items__right">
                    <div class="access__items__right__item">
                        <div class="access__items__right__title access__font__left">営業時間</div>
                        <div class="access__items__right__lead access__font__right">7:00〜21:00<br>※ラストオーダー 20:30</div>
                    </div>
                    <!-- /.access__items__right__item -->
                    <div class="access__items__right__item">
                        <div class="access__items__right__title access__font__left">定休日</div>
                        <div class="access__items__right__lead  access__font__right">水曜日</div>
                    </div>
                    <!-- /.access__items__right__item -->
                    <div class="access__items__right__item">
                        <div class="access__items__right__title access__font__left">座席</div>
                        <div class="access__items__right__lead access__font__right">テーブル20席 ／ カウンター席6席</div>
                    </div>
                    <!-- /.access__items__right__item -->
                </div>
                <!-- /.access__items__right -->
            </div>
            <!-- /.access__items -->
        </div>
        <!-- /.section__access -->
        <div class="section__access menu__access shop__aceess">
            <div class="section__title__item access__title shop_title">
                <h2 class="h2 news__page__h2 shop2__h2">OPEN CAFE　阿佐ヶ谷店</h2>
            </div>
            <div class="iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0370291727304!2d139.57763767574764!3d35.70070637890396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ee39b555205f%3A0xabb26a0a2fbda595!2z44CSMTgwLTAwMDMg5p2x5Lqs6YO95q2m6JS16YeO5biC5ZCJ56Wl5a-65Y2X55S677yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1691642985606!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="access__items shop__items">
                <div class="access__items__left">
                    <div class="access__items__left__item">
                        <div class="access__items__left__title access__font__left">住所</div>
                        <div class="access__items__left__lead access__font__right">〒000-0000<br>東京都武蔵野市吉祥寺南町一丁目</div>
                    </div>
                    <!-- /.access__items__left__item -->
                    <div class="access__items__left__item">
                        <div class="access__items__left__title access__font__left">TEL</div>
                        <div class="access__items__left__lead access__font__right">0123-456-789</div>
                    </div>
                    <!-- /.access__items__left__item -->
                    <div class="access__items__left__item">
                        <div class="access__items__left__title access__font__left">Mail</div>
                        <div class="access__items__left__lead access__font__right">example@mail.com</div>
                    </div>
                    <!-- /.access__items__left__item -->
                </div>
                <!-- /.access__items__left -->
                <div class="access__items__right">
                    <div class="access__items__right__item">
                        <div class="access__items__right__title access__font__left">営業時間</div>
                        <div class="access__items__right__lead access__font__right">7:00〜21:00<br>※ラストオーダー 20:30</div>
                    </div>
                    <!-- /.access__items__right__item -->
                    <div class="access__items__right__item">
                        <div class="access__items__right__title access__font__left">定休日</div>
                        <div class="access__items__right__lead  access__font__right">水曜日</div>
                    </div>
                    <!-- /.access__items__right__item -->
                    <div class="access__items__right__item">
                        <div class="access__items__right__title access__font__left">座席</div>
                        <div class="access__items__right__lead access__font__right">テーブル20席 ／ カウンター席6席</div>
                    </div>
                    <!-- /.access__items__right__item -->
                </div>
                <!-- /.access__items__right -->
            </div>
            <!-- /.access__items -->
        </div>
        <!-- /.section__access -->
        <div class="section__access menu__access shop__aceess">
            <div class="section__title__item access__title shop_title">
                <h2 class="h2 news__page__h2 shop2__h2">OPEN CAFE　中野店</h2>
            </div>
            <div class="iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0370291727304!2d139.57763767574764!3d35.70070637890396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ee39b555205f%3A0xabb26a0a2fbda595!2z44CSMTgwLTAwMDMg5p2x5Lqs6YO95q2m6JS16YeO5biC5ZCJ56Wl5a-65Y2X55S677yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1691642985606!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="access__items shop__items">
                <div class="access__items__left">
                    <div class="access__items__left__item">
                        <div class="access__items__left__title access__font__left">住所</div>
                        <div class="access__items__left__lead access__font__right">〒000-0000<br>東京都武蔵野市吉祥寺南町一丁目</div>
                    </div>
                    <!-- /.access__items__left__item -->
                    <div class="access__items__left__item">
                        <div class="access__items__left__title access__font__left">TEL</div>
                        <div class="access__items__left__lead access__font__right">0123-456-789</div>
                    </div>
                    <!-- /.access__items__left__item -->
                    <div class="access__items__left__item">
                        <div class="access__items__left__title access__font__left">Mail</div>
                        <div class="access__items__left__lead access__font__right">example@mail.com</div>
                    </div>
                    <!-- /.access__items__left__item -->
                </div>
                <!-- /.access__items__left -->
                <div class="access__items__right">
                    <div class="access__items__right__item">
                        <div class="access__items__right__title access__font__left">営業時間</div>
                        <div class="access__items__right__lead access__font__right">7:00〜21:00<br>※ラストオーダー 20:30</div>
                    </div>
                    <!-- /.access__items__right__item -->
                    <div class="access__items__right__item">
                        <div class="access__items__right__title access__font__left">定休日</div>
                        <div class="access__items__right__lead  access__font__right">水曜日</div>
                    </div>
                    <!-- /.access__items__right__item -->
                    <div class="access__items__right__item">
                        <div class="access__items__right__title access__font__left">座席</div>
                        <div class="access__items__right__lead access__font__right">テーブル20席 ／ カウンター席6席</div>
                    </div>
                    <!-- /.access__items__right__item -->
                </div>
                <!-- /.access__items__right -->
            </div>
            <!-- /.access__items -->
        </div>
        <!-- /.section__access -->
    </div>
    <!-- /.shop-wrap -->
<?php get_footer(); ?>