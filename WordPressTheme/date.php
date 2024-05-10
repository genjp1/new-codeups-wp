<?php get_header(); ?>

  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <?php
          add_filter( 'get_the_archive_title', function ($title) {
              if (is_category()) {
                  $title = single_cat_title('', false);
              } elseif (is_tag()) {
                  $title = single_tag_title('', false);
              } elseif (is_tax()) {
                  $title = single_term_title('', false);
              } elseif (is_post_type_archive()) {
                  $title = post_type_archive_title('', false);
              } elseif (is_date()) {
                  if (get_query_var('monthnum')) {
                      // 年月が指定されている場合
                      $title = get_the_time('Y年n月' . 'の記事一覧');
                  } else {
                      // 年のみが指定されている場合
                      $title = get_the_time('Y年' . 'の記事一覧');
                  }
              } elseif (is_search()) {
                  $title = '検索結果：' . esc_html(get_search_query(false));
              } elseif (is_404()) {
                  $title = 'ページが見つかりません';
              }
              return $title;
          });
          the_archive_title( '<h1 class="sub-mv__main-title">', '</h1>' );
        ?>
        <!-- <h1 class="sub-mv__main-title">Blog</h1> -->
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-blog.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-blog-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php echo get_template_part('/template/breadcrumb')?>

  <!-- page-blog -->
  <section class="page-blog top-page-blog">
    <div class="page-blog__inner inner">

      <div class="page-blog__content">

        <div class="page-blog__cards blog-cards blog-cards--page-blog">

            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="blog-cards__card card">
                <?php if (has_post_thumbnail()): ?>
                    <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                    <div class="card__img">
                    <img src="<?php the_post_thumbnail_url(''); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    </div>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/noimage.jpg" alt="" class="card__img">
                <?php endif; ?>

                <div class="card__body-pageBlog">
                <time class="card__date" datetime="<?php the_time('c')?>"><?php the_time('Y.m/d')?></time>
                <h3 class="card__title"><?php the_title();?></h3>
                <hr class="card__line-pageBlog">
                <p class="card__text"><?php the_excerpt();?></p>
                </div>
            </a>
            
            <?php endwhile; endif; ?>
        </div>

        <div class="page-blog__pagenavi pagenavi">
          <!-- WP-PageNaviで出力される部分 ここから -->
          <?php wp_pagenavi(); ?>
          <!-- WP-PageNaviで出力される部分 ここまで -->
        </div>

      </div>

      <!-- page-blog__sidebar -->
      <aside class="page-blog__sidebar sidebar">
      <?php get_sidebar(); ?>
      </aside>
      
    </div>

  </section>

<?php get_footer(); ?>