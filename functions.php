<?php
    function my_setup() {
        add_theme_support("post-thumbnails");
        add_theme_support("automatic-feed-links");
        add_theme_support("title-tag");
        add_theme_support("html5", array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));

    }
    add_action("after_setup_theme", "my_setup");

    function my_menu_init() {
        register_nav_menus(
            array(
                'global' => 'ヘッダーメニュー',
                'drawer' => 'ドロワーメニュー',
                'footer' => 'フッターメニュー'
            )
        );
    }
    add_action('init', 'my_menu_init');

    function my_widget_init() {
        register_sidebar(
            array(
                'name' => 'サイドバー',
                'id' => 'sidebar',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<div class="widget-title">',
                'after_title' => '</div>',
            )
        );
    }
    add_action("widgets_init", "my_widget_init");

    // アーカイブタイトル書き換え
    function my_archive_title($title) {

        if (is_category()) {
            $title = single_cat_title('', false);
        } elseif (is_tag()) {
            $title = single_tag_title('', false);
        } elseif (is_post_type_archive()) {
            $title = post_type_archive_title('', false);
        } elseif (is_tax()) {
            $title = single_term_title('', false);
        } elseif (is_author()) {
            $title = get_the_author();
        } elseif (is_date()) {
            $title = '';
            if (get_query_var('year')) {
                $title = get_query_var('year') . '年';
            }
            if (get_query_var('monthnum')) {
                $title = get_query_var('monthnum') . '月';
            }
            if (get_query_var('day')) {
                $title = get_query_var('day') . '日';
            }
        }
        return $title;
    };
    add_filter('get_the_archive_title', 'my_archive_title');

    function my_the_post_category($anchor = true) {
        $category = get_the_category();
        if (!empty($category) && isset($category[0])) {
            if ($anchor) {
                echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
            } else {
                echo $category[0]->cat_name;
            }
        }
    };
    

    function my_posts_search($search, $wp_query) {
        if($wp_query->is_search() && $wp_query->is_main_query() && !is_admin()) {
            $search .= " AND post_type = 'post' ";

            return $search;
        }

        return $search;
    }
    add_filter('posts_search', 'my_posts_search', 10, 2);

    function my_shortcode($attrs, $content = '') {
        return '<div class="entry-btn"><a class="btn" href="' . $attrs['link'] . '">' . $content . '</a></div>';
    }
    add_shortcode('btn', 'my_shortcode');

    function my_searchform_shortcode($attrs, $content = '') {
        return get_search_form(false);
    }
    add_shortcode('search-form', 'my_searchform_shortcode');

    function show_post_info_shortcode() {
        $date = get_the_date('Y.m.d');
        $categories = get_the_category();
        $category_name = !empty($categories) ? $categories[0]->name : '';

        return '<div class="news__page__date__item"><span class="news__page__date__item__date">' . $date . '</span> <span class="news__page__date__item__signal">|</span> <span class="news__page__date__item__category">' . $category_name . '</span></div>'; // クラス名をそれぞれに追加
    }
    add_shortcode('post_info', 'show_post_info_shortcode');

?>