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

    <title>DemoCafe</title>
</head>
<body>
    <div class="drawer__menu__bg"></div>

    <section class="drawer menu__drawer" id="index-drawer">
        <div class="drawer__items">
            <div class="drawer__logo concept2__drawer__logo menu__drawer__icon" ><img src="<?php echo get_template_directory_uri() ?>/img/top-sp/logo_light.svg" alt=""></div>
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

    <header>
        <div class="header__left">
            <div class="header__items">
                <div class="header__logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/top/logo_dark@2x.png" alt="logo"></a></div>
                <div class="header__item">
                    <div class="header__menu">
                        <a href="<?php echo home_url('/'); ?>" class="header__menu__item">
                            <p class="header__menu__title__en">TOP</p>
                            <p class="header__menu__title__ja">トップ</p>
                        </a>
                    </div>
                    <!-- /.header__menu -->
                    <div class="header__menu">
                        <a href="<?php echo get_permalink( get_page_by_path('concept') ); ?>" class="header__menu__item">
                            <p class="header__menu__title__en">CONCEPT</p>
                            <p class="header__menu__title__ja">コンセプト</p>
                        </a>
                    </div>
                    <!-- /.header__menu -->
                    <div class="header__menu">
                        <a href="<?php echo get_permalink( get_page_by_path('menu') ); ?>" class="header__menu__item">
                            <p class="header__menu__title__en">MENU</p>
                            <p class="header__menu__title__ja">メニュー</p>
                        </a>
                    </div>
                    <!-- /.header__menu -->
                    <div class="header__menu">
                        <a href="http://neko-tsuki.com/my-portfolio3/category/news/" class="header__menu__item">
                            <p class="header__menu__title__en">NEWS</p>
                            <p class="header__menu__title__ja">ニュース</p>
                        </a>
                    </div>
                    <!-- /.header__menu -->
                    <div class="header__menu">
                        <a href="<?php echo get_permalink( get_page_by_path('shop') ); ?>" class="header__menu__item">
                            <p class="header__menu__title__en">SHOP</p>
                            <p class="header__menu__title__ja">店舗情報</p>
                        </a>
                    </div>
                    <!-- /.header__menu -->
                    <div class="header__menu">
                        <a href="<?php echo get_permalink( get_page_by_path('gift') ); ?>" class="header__menu__item">
                            <p class="header__menu__title__en">GIFT</p>
                            <p class="header__menu__title__ja">ギフト・贈り物</p>
                        </a>
                    </div>
                    <!-- /.header__menu -->
                    <div class="header__menu">
                        <a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>" class="header__menu__item">
                            <p class="header__menu__title__en">CONTACT</p>
                            <p class="header__menu__title__ja">お問い合わせ</p>
                        </a>
                    </div>
                    <!-- /.header__menu -->
                </div>
                <!-- /.header__item -->
                <div class="header__sns__items">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <!-- /.header__sns__items -->
            </div>
            <!-- /.header__items -->
        </div>
        <!-- /.header__left -->

        <div class="header__right">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_mainvisual1@2x.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_mainvisual2@2x.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_mainvisual3@2x.png" alt=""></div>
                </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
            <div class="header__right__bottom">
                <div class="header__right__bottom__items">
                    <div class="header__right__bottom__lead">パスタとコーヒーが<br class="mqsp">とってもおいしい、<br>ほっと落ち着くのんびり空間。</div>
                    <div class="header__right__bottom__pickup">
                        <div class="pickup__title"><?php my_the_post_category(false); ?></div>
                        <div class="pickup__balloon"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_balloon-pickup@2x.png" alt="pickup"></div>
                        <div class="pickup__items">
                            <a href="<?php the_permalink(); ?>" style="display:flex;">
                                <div class="pickup__img"><img src="<?php the_post_thumbnail_url(array(120, 120)); ?>" alt=""></div>
                                <div class="pickup__items__text">
                                    <time class="pickup__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                    <div class="pick__up__lead"><?php echo mb_substr(strip_tags(get_the_content()), 0, 40) . '...'; ?></div>
                                </div>
                            </a>
                        </div>
                        <!-- /.pickup__items -->
                    </div>
                    <!-- /.header__right__bottom__pickup -->
                </div>
                <!-- /.header__right__bottom__items -->
                <div class="header__bg"></div>
                <div class="header__coffee__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/bg_coffee-beans@2x.png" alt=""></div>
            </div>
            <!-- /.header__right__bottom -->
        </div>
        <!-- /.header__right -->
    </header>

    <section class="concept">
        <div class="concept__items">
            <div class="concept__right">
                <div class="concept__right__items">
                    <div class="section__title__item">
                        <div class="section__title">CONCEPT</div>
                        <div class="section__title__lead">当店のこだわり</div>
                    </div>
                    <div class="concept__right__message">最高のコーヒーと、 <br>時の流れを味わうことができる<br>手作りカフェ</div>
                    <div class="concept__right__lead">ダミー_国内外から賞賛を<br>受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</div>
                    <div class="concept__right__lead"><br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</div>
                    <div class="concept__right__button button"><a href="<?php echo get_permalink( get_page_by_path('concept') ); ?>">詳しくはこちら</a></div>
                </div>
            </div>
            <!-- /.concept__right -->
            <div class="concept__left"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_concept@2x.png" alt="concept"></div>
            <div class="concept__color"></div>
        </div>
        <!-- /.concept__items -->
    </section>
    <!-- /.concept -->

    <section class="special__set">
        <div class="special__set__leaves"><img src="<?php echo get_template_directory_uri() ?>/img/top/bg_coffee-leaves@2x.png" alt=""></div>
        <div class="special__set__items">
            <div class="section__title__item special__set__title">
                <div class="section__title">SPECIAL LUNCH SET</div>
                <div class="section__title__lead">今月のスペシャルランチセット</div>
            </div>
            <div class="special__set__item">
                <div class="special__set__ribbon"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_ribbon-text@2x.png" alt="special__set__ribbon"></div>
                <div class="special__set__balloon"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_balloon-special-lunch-set@2x.png" alt=""></div>
                <div class="special__set__foods">
                    <div class="special__set__card">
                        <div class="special__set__card__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_special_pasta1@2x.png" alt="special_pasta1"></div>
                        <div class="special__set__card__titles">
                            <div class="special__set__card__id">A</div>
                            <div class="special__set__card__title">テキストテキストの○○風パスタ</div>
                        </div>
                    </div>
                    <!-- /.special__set__card -->
                    <div class="special__set__card">
                        <div class="special__set__card__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_special_pasta2@2x.png" alt="special_pasta2"></div>
                        <div class="special__set__card__titles">
                            <div class="special__set__card__id">B</div>
                            <div class="special__set__card__title">テキストテキストの○○風パスタ</div>
                        </div>
                    </div>
                    <!-- /.special__set__card -->
                    <div class="special__set__card">
                        <div class="special__set__card__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_special_pasta3@2x.png" alt="special_pasta3"></div>
                        <div class="special__set__card__titles">
                            <div class="special__set__card__id">C</div>
                            <div class="special__set__card__title">テキストテキストの○○風パスタ</div>
                        </div>
                    </div>
                    <!-- /.special__set__card -->
                    <div class="special__set__card">
                        <div class="special__set__card__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_special_pasta4@2x.png" alt="special_pasta4"></div>
                        <div class="special__set__card__titles">
                            <div class="special__set__card__id">D</div>
                            <div class="special__set__card__title">テキストテキストの○○風パスタ</div>
                        </div>
                    </div>
                    <!-- /.special__set__card -->
                </div>
                <!-- /.special__set__foods -->
                <div class="special__set__set">
                    <div class="special__set__set__items">
                        <div class="special__set__set__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_lunch-detail@2x.png" alt="special_lunch_detail"></div>
                        <div class="special__set__set__right">
                            <div class="special__set__set__title">スペシャルランチセット<br>【選べる3品】</div>
                            <div class="special__set__set__price">1,280 yen</div>
                            <div class="special__set__set__time">(11:00 AM〜14:00 PMまで)</div>
                        </div>
                        <!-- /.special__set__set__right -->
                    </div>
                </div>
                <!-- /.special__set__set -->
            </div>
            <!-- /.special__set__item -->
        </div>
        <!-- /.special__set__items -->
    </section>
    <!-- /.special__set -->

    <section class="grand__menu">
        <div class="grand__menu__leaves"><img src="<?php echo get_template_directory_uri() ?>/img/top/bg_coffee-leaves2@2x.png" alt=""></div>
        <div class="section__title__item grand__menu__title">
            <div class="section__title">GRAND MENU</div>
            <div class="section__title__lead">グランドメニュー</div>
        </div>
        <div class="grand__menu__items">
            <div class="grand__menu__product">パスタ</div>
            <div class="grand__menu__item">
                <div class="grand__menu__set">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_pasta1@2x.png" alt="menu__pasta1"></div>
                    <div class="grand__menu__item__title">テキストテキストテキストの○○○○風パスタ</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
                <div class="grand__menu__set">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_pasta2@2x.png" alt="menu__pasta2"></div>
                    <div class="grand__menu__item__title">テキストテキストの○○風パスタ</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
                <div class="grand__menu__set">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_salad3-1@2x.png" alt="menu__pasta3"></div>
                    <div class="grand__menu__item__title">テキストテキストの○○風パスタ</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
            </div>
            <!-- /.grand__menu__item -->
            <div class="grand__menu__product">サラダ</div>
            <div class="grand__menu__item">
                <div class="grand__menu__set">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_salad1@2x.png" alt=""></div>
                    <div class="grand__menu__item__title">○○○○風サラダ</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
                <div class="grand__menu__set">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_salad2@2x.png" alt=""></div>
                    <div class="grand__menu__item__title">○○○○風サラダ</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
                <div class="grand__menu__set">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_salad3@2x.png" alt=""></div>
                    <div class="grand__menu__item__title">○○○○風サラダ</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
            </div>
            <!-- /.grand__menu__item -->
            <div class="grand__menu__product">パン & スイーツ</div>
            <div class="grand__menu__item">
                <div class="grand__menu__set__pans">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_sweets1@2x.png" alt=""></div>
                    <div class="grand__menu__item__title">○○○○サンド</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
                <div class="grand__menu__set__pans">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_sweets2@2x.png" alt=""></div>
                    <div class="grand__menu__item__title">○○○○サンド</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
                <div class="grand__menu__set__pans">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_sweets3@2x.png" alt=""></div>
                    <div class="grand__menu__item__title">○○○○サンド</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
                <div class="grand__menu__set__pans">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_sweets4@2x.png" alt=""></div>
                    <div class="grand__menu__item__title">○○○○サンド</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
                <div class="grand__menu__set__pans">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_sweets5@2x.png" alt=""></div>
                    <div class="grand__menu__item__title">○○○○サンド</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
                <div class="grand__menu__set__pans">
                    <div class="grand__menu__item__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_drink@2x.png" alt=""></div>
                    <div class="grand__menu__item__title">○○○○サンド</div>
                    <div class="grand__menu__item__price">780 yen</div>
                </div>
                <!-- /.grand__menu__set -->
            </div>
            <!-- /.grand__menu__item -->
            <div class="grand__menu__product">ドリンク</div>
            <div class="grand__menu__item">
                <div class="grand__menu__drink__items">
                    <div class="grand__menu__drink__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_drink1@2x.png" alt=""></div>
                    <div class="grand__menu__drink__item">
                        <div class="grand__menu__drink__category">コーヒー</div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">ブレンド</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">カフェラテ</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">豆乳ラテ</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">カフェモカ</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">キャラメルラテ</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">バニララテ</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                    </div>
                    <!-- /.grand__menu__drink__item -->
                    <div class="grand__menu__drink__item">
                        <div class="grand__menu__drink__category">紅茶</div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">ストレート</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">ミルク</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">アップル</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                    </div>
                    <!-- /.grand__menu__drink__item -->
                    <div class="grand__menu__drink__item">
                        <div class="grand__menu__drink__category">ソフトドリンク</div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">バナナ</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">オレンジ</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">アップル</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">マンゴー</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <div class="grand__menu__drink__set">
                            <div class="grand__menu__drink__title">ミックス</div>
                            <div class="grand__menu__drink__price">500 yen</div>
                        </div>
                        <!-- /.grand__menu__drink__item -->
                    </div>
                    <!-- /.grand__menu__drink__item -->
                </div>
                <!-- /.grand__menu__drink__items -->
            </div>
            <!-- /.grand__menu__item -->
            <div class="grand__menu__button button"><a href="<?php echo get_permalink( get_page_by_path('menu') ); ?>">その他のメニュー</a></div>
        </div>
        <!-- /.grand__menu__items -->
        <div class="grand__menu__coffee__beans"><img src="<?php echo get_template_directory_uri() ?>/img/top/bg_coffee-beans2@2x.png" alt="coffee__img"></div>
        <div class="grand__menu__bg"></div>
    </section>
    <!-- /.grand__menu -->

    <section class="gallery">
        <div class="section__title__item gallery__title">
            <div class="section__title">GALLERY</div>
            <div class="section__title__lead">ギャラリー</div>
            <div class="gallery__balloon"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_balloon-gallery@2x.png" alt=""></div>
        </div>
        <div class="gallery__items">
            <div class="gallery__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_gallery1@2x.png" alt=""></div>
            <div class="gallery__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_gallery2@2x.png" alt=""></div>
            <div class="gallery__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_gallery3@2x.png" alt=""></div>
            <div class="gallery__img"><img src="<?php echo get_template_directory_uri() ?>/img/top/img_gallery4@2x.png" alt=""></div>
        </div>
        <!-- /.gallery__items -->
        <div class="gallery__button button"><a href="">インスタグラムを見る</a></div>
        <div class="gallery__bg__plate"><img src="<?php echo get_template_directory_uri() ?>/img/top/bg_plate@2x.png" alt=""></div>
    </section>
    <!-- /.gallery -->

    <section class="news">
        <div class="section__title__item news__title">
            <div class="section__title">NEWS</div>
            <div class="section__title__lead">お知らせ</div>
        </div>

        <div class="news__items">
        <?php
        $args = array(
            'posts_per_page' => 5, // 取得する投稿数を5に設定
            'orderby' => 'date', // 日付で並べ替え
            'order' => 'DESC' // 降順で最新の記事から取得
        );
        $query = new WP_Query($args);
        $counter = 0;
        if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
            <?php if ($counter == 0): ?>
                <div class="news__items__left">
                    <div class="news__items__left__category"><?php my_the_post_category(false) ?></div>
                    <a href="<?php the_permalink(); ?>">
                        <div class="news__items__left__img"><?php the_post_thumbnail(array(510, 319)); ?></div>
                        <div class="news__items__left__title"><?php the_title(); ?></div>
                        <div class="news__items__left__lead"><?php the_excerpt(); ?></div>
                        <time class="news__items__left__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                    </a>
                </div>
                <!-- /.news__items__left -->
            <?php else: ?>
                <?php if ($counter == 1): ?>
                    <div class="news__items__right">
                        <div class="news__items__right__items">
                <?php endif; ?>
                            <div class="news__items__right__item">
                                <div class="news__items__right__category"><?php my_the_post_category(false) ?></div>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="news__items__right__img"><?php the_post_thumbnail(array(255, 160)); ?></div>
                                    <div class="news__items__right__title"><?php echo mb_substr(strip_tags(get_the_content()), 0, 45) . '...'; ?></div>
                                    <time class="news__items__left__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                </a>
                            </div>
                <?php if ($counter == 4): ?>
                        </div>
                        <!-- /.news__items__right__items -->
                    </div>
                    <!-- /.news__items__right -->
                <?php endif; ?>
            <?php endif; ?>
            <?php $counter++; ?>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
    <!-- /.news__items -->

        <div class="news__button button"><a href="http://demo-cafe.local/category/news/">過去のお知らせ</a></div>
    </section>
    <!-- /.news -->

<?php get_footer(); ?>