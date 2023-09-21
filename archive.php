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
    <title>news-archive</title>
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

    <section class="concept concept2__bg news2_bg">
        <div class="concept__outlines">
            <div class="section__title__item concept2__item">
                <div class="section__title concept2__title">NEWS</div>
                <div class="section__title__lead concept2__title__lead">お知らせ</div>
            </div>
        </div>
    </section>
    <!-- /.concept -->

    <div class="breadcrumb news__breadcrumb">
        <?php bcn_display(); ?>
    </div>

    <section class="news2__wrap">
        <div class="news2__items">
            <div class="news2__items__title"><?php my_the_post_category(false); ?></div>
            <div class="news2__item">

            <?php if (have_posts()): ?>
                <?php while (have_posts()): ?>
                    <?php the_post(); ?>

                <div class="news__items__right__item">
                    <div class="news__items__right__category"><?php my_the_post_category(false); ?></div>
                    <a href="<?php the_permalink(); ?>">
                        <div class="news__items__right__img"><img src="<?php the_post_thumbnail(); ?>" alt=""></div>
                        <div class="news__items__right__title news2__items__right__title"><?php echo mb_substr(strip_tags(get_the_content()), 0, 50) . '...'; ?></div>
                        <time class="news__items__right__date news2__items__right__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                    </a>
                </div>
                <!-- /.news__items__right__item -->

                <?php endwhile; ?>
            <?php endif; ?>

            </div>
            <!-- /.news2__item -->
            <?php if (paginate_links()): ?>
            <section class="pagenation">
                    <?php
                        echo paginate_links(
                            array (
                                'end_size' => 1,
                                'mid_size' => 2,
                                'prev_next' => true,
                                'prev_text' => '<',
                                'next_text' => '>'
                            )
                        );
                    ?>
            </section>
            <?php endif; ?>
        </div>
        <!-- /.news2__items -->
        <div class="secondary">
            <div class="secondary__top">
            <?php
            $recent_posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC',
            ));

            if ($recent_posts->have_posts()) :
            ?>
                <div class="secondary_top__items">
                    <div class="secondary__title">最近の記事</div>

                    <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                        <div class="secondary__wrap">
                            <a href="<?php the_permalink(); ?>" style="width: 100%; height: 100%;">
                                <div class="secondary__items">
                                    <div class="secondary__item">
                                        <div class="secondary__img">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/img/news/img_news1@2x.png" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="secondary__lead__wrap">
                                            <div class="secondary__lead"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></div>
                                            <div class="secondary__date"><?php the_time('Y.m.d'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>

                </div>
                <!-- /.secondary_top__items -->
            <?php
                wp_reset_postdata();
            endif;
            ?>

                <div class="secondary__bottom">
                    <div class="secondary__wrap">
                        <div class="secondary__title">カテゴリ</div>
                        <div class="secondary__item">
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) :
                            ?>
                                <div class="secondary__category">
                                    <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /.secondary__bottom -->

            </div>
            <!-- /.secondary__top -->
        </div>
        <!-- /.secondary -->
    </section>
    <!-- /.news__wrap -->

<?php get_footer(); ?>