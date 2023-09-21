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
            <img src="<?php echo get_template_directory_uri() ?>/img/news/img_firstview_news@2x.png" alt="news" loading="lazy" width="1280" height="320">
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

    <section class="news__page__items">
        <div class="news__page__wrap">
            <div class="news__page__img"><?php the_post_thumbnail(array(688, 430)); ?></div>
            <?php the_content(); ?>
        </div>

        <div class="news__page__pagenation">
            <div class="news__page__pagenation__prev">
                <?php if(get_previous_post()) : ?>
                    <?php previous_post_link('%link', '<span class="prev__prev"><</span>前の記事'); ?>
                <?php else : ?>
                    <span class="prev__prev"><</span>前の記事
                <?php endif; ?>
            </div>
            <div class="news__page__pagenation__menu">
                <a href="<?php echo get_post_type_archive_link('post'); ?>">記事一覧</a>
            </div>
            <div class="news__page__pagination__next">
                <?php if(get_next_post()) : ?>
                    <?php next_post_link('%link', '次の記事<span class="next__next">></span>'); ?>
                <?php else : ?>
                    次の記事<span class="next__next">></span>
                <?php endif; ?>
            </div>
        </div>

        <?php
        if(has_category()) {
            $cats = get_the_category();
            $catkwds = array();
            foreach($cats as $cat) {
                $catkwds[] = $cat->term_id;
            }
        }
        ?>
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => '6',
                'post__not_in' => array($post->ID),
                'category__in' => $catkwds,
                'orderby' => 'rand'
            );
            $my_query = new WP_Query($args);
        ?>

        <h1 class="news__page__h1">関連記事</h1>
        <div class="news__page__bottom">
            <div class="news2__item">
                
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="news__items__right__item news2__related__item">
                    <div class="news__items__right__category"><?php my_the_post_category(false); ?></div>
                    <a href="<?php the_permalink(); ?>">
                        <div class="news__items__right__img news2__related__img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="news__items__right__title news2__items__right__title"><?php echo mb_substr(strip_tags(get_the_content()), 0, 40) . '...'; ?></div>
                        <time class="news__items__right__date news2__items__right__date news__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                    </a>
                </div>
                <!-- /.news__items__right__item -->
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div>
            <!-- /.news2__item -->
        </div>
        <!-- /.news__page__bottom -->
    </section>
    <!-- /.news__page__items -->

<?php get_footer(); ?>