<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );



/*====================================================
# CSSとJavaScriptの読み込み
=====================================================*/
/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
// css
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/dist/assets/css/style.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'swiper-css', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.0.0', 'all' );
	// 前回適用できたGoogleフォント
	// wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap', array(), '8.0.0', 'all' );
	// 今回適用したいGoogleフォント
	// wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@400;500;600;700&family=Noto+Serif+JP:wght@400;500;600;700&display=swap', array(), '8.0.0', 'all' );

  // js
	wp_enqueue_script( 'jquery','//code.jquery.com/jquery-3.6.0.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'swiper-js', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'jquery.inview.min.js', get_template_directory_uri() . '/dist/assets/js/jquery.inview.min.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/dist/assets/js/script.js', array( 'jquery' ), '1.0.1', true );

}
add_action('wp_enqueue_scripts', 'my_script_init');




/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


// /**
//  * アーカイブタイトル書き換え
//  *
//  * @param string $title 書き換え前のタイトル.
//  * @return string $title 書き換え後のタイトル.
//  */
// function my_archive_title( $title ) {

// 	if ( is_home() ) { /* ホームの場合 */
// 		$title = 'ブログ';
// 	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
// 		$title = '' . single_cat_title( '', false ) . '';
// 	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
// 		$title = '' . single_tag_title( '', false ) . '';
// 	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
// 		$title = '' . post_type_archive_title( '', false ) . '';
// 	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
// 		$title = '' . single_term_title( '', false );
// 	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
// 		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
// 	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
// 		$title = '' . get_the_author() . '';
// 	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
// 		$title = '';
// 		if ( get_query_var( 'year' ) ) {
// 			$title .= get_query_var( 'year' ) . '年';
// 		}
// 		if ( get_query_var( 'monthnum' ) ) {
// 			$title .= get_query_var( 'monthnum' ) . '月';
// 		}
// 		if ( get_query_var( 'day' ) ) {
// 			$title .= get_query_var( 'day' ) . '日';
// 		}
// 	}
// 	return $title;
// };
// add_filter( 'get_the_archive_title', 'my_archive_title' );


/*====================================================
# 管理画面、投稿の名称変更
=====================================================*/
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );


/*====================================================
# 抜粋文の文字数の変更
=====================================================*/
/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 89;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );

/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );


// /*====================================================
// # 表示件数変更（カスタム投稿一覧）
// =====================================================*/
// add_action( 'pre_get_posts', 'my_custom_query_vars' );
// function my_custom_query_vars( $query ) {
// 	/* @var $query WP_Query */
// 	if ( !is_admin() && $query->is_main_query()) {
// 		if ( is_post_type_archive('campaign') ) {
// 			$query->set( 'posts_per_page' , 3 );//表示したい数（全件表示は「-1」）
// 		}
// 	}
// 	return $query;
// }

// /*====================================================
// # カスタム投稿タイプのアーカイブページで表示する投稿数を変更（まさたさん）
// =====================================================*/
// function custom_posts_per_page($query)
// {
//     if (!is_admin() && $query->is_main_query()) {
//         // カスタム投稿のスラッグを記述
//         if (is_post_type_archive('campaign')) {
//             // 表示件数を指定
//             $query->set('posts_per_page', 2);
//         }
//     }
// }
// add_action('pre_get_posts', 'custom_posts_per_page');


/*====================================================
# smart custom field
=====================================================*/
/* --------------------------------------------
 /*///smart custom field
 /* -------------------------------------------- */
/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL（https://developer.wordpress.org/resource/dashicons/#admin-settings）
 * @param int $position メニューの位置
 */
SCF::add_options_page( '私達について','ギャラリー', 'manage_options', 'gallery_options', 'dashicons-images-alt', 10);
SCF::add_options_page( '料金一覧', '料金表', 'manage_options', 'price_options', 'dashicons-money-alt', 11 );
SCF::add_options_page( 'よくある質問', 'FAQ', 'manage_options', 'theme-options', 'dashicons-format-chat', 12 );
//---------------------------------------
// 【投稿記事の画像挿入時にwidthとheightを削除】
//---------------------------------------
function remove_width_attribute( $html ) {
  $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
  return $html;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );



// /* ==========================================================================
// ブログ - 人気記事 - カスタムフィールドの「post_views_count」にアクセス数を保存する
// ========================================================================== */
// function setPostViews($post_id) {
//     $count_key = 'post_views_count';
//     $count = get_post_meta($post_id, $count_key, true);
//     if($count==''){
//         $count = 0;
//         delete_post_meta($post_id, $count_key);
//         add_post_meta($post_id, $count_key, '0');
//     }else{
//         $count++;
//         update_post_meta($post_id, $count_key, $count);
//     }
// }
// //カスタムフィールドに保存されているアクセス数を取得する
// function getPostViews($post_id){
//     $count_key = 'post_views_count';
//     $count = get_post_meta($post_id, $count_key, true);
//     if($count==''){
//         delete_post_meta($post_id, $count_key);
//         add_post_meta($post_id, $count_key, '0');
//         return "0 View";
//     }
//         return $count.' Views';
// }

// //クローラーのアクセス判別
// function is_bot() {
// 	$ua = $_SERVER['HTTP_USER_AGENT'];
   
// 	$bot = array(
// 		  "googlebot",
// 		  "msnbot",
// 		  "yahoo"
// 	);
// 	foreach( $bot as $bot ) {
// 	  if (stripos( $ua, $bot ) !== false){
// 		return true;
// 	  }
// 	}
// 	return false;
//   }

/* ==========================================================================
Contact Form 7 送信後にそれぞれの完了ページへ遷移 ※本番環境にてページIDの調整必要
========================================================================== */
function add_origin_thanks_page() {
    $contact = home_url('/contact-thanks/');

    echo <<< EOC
        <script>
        var thanksPage = {
            37: '{$contact}',
        };
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = thanksPage[event.detail.contactFormId];
        }, false );
        </script>
    EOC;
}
add_action( 'wp_footer', 'add_origin_thanks_page' );

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 


/*====================================================
# ブログ人気ランキング
=====================================================*/

//記事のアクセス数を表示
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0 View";
    }
    return $count.' Views';
}

//記事のアクセス数を保存
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
    }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/* ここまで、ブログ人気ランキング
=====================================================*/



/* ==========================================================================
   Archiveページ月別選択
========================================================================== */
/**
 * 指定された年の各月にリンクを表示するコールバック関数
 */
function blog_get_archives_callback($item, $index, $currYear) {
    global $wp_locale;

    if ($item['year'] == $currYear) {
        $url = get_month_link($item['year'], $item['month']);
        // 月名と年の表示
        $text = $wp_locale->get_month($item['month']);
        echo '<li class="archive__sub-item archive__sub-item--layout"><a href="' . esc_url($url) . '">' . esc_html($text) . '</a></li>';
    }
}

/**
 * 年ごとに投稿された月を表示する関数
 */
function blog_get_archives() {
    global $wpdb;

    // 年度についてのクエリを取得
    $query = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE `post_type` = 'post' AND `post_status` = 'publish' GROUP BY `year` ORDER BY `year` DESC";
    $arcResults = $wpdb->get_results($query);
    $years = array();

    if ($arcResults) {
        foreach ((array)$arcResults as $arcResult) {
            array_push($years, $arcResult->year);
        }
    }

    // 月についてのクエリを更新し、降順に設定
    $query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month` FROM $wpdb->posts WHERE `post_type` = 'post' AND `post_status` = 'publish' GROUP BY `year`, `month` ORDER BY `year` DESC, `month` DESC";
    $arcResults = $wpdb->get_results($query, ARRAY_A);
    $months = array();

    if ($arcResults) {
        foreach ($years as $year) {
            echo '<li class="sidebar__archive-title js-toggle-title">';
            echo $year;
            echo '</li>';
            echo '<ul class="sidebar__archive-item js-toggle-item">';
            array_walk($arcResults, "blog_get_archives_callback", $year);
            echo '</ul>';
        }
    }
}


