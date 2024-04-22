<?php get_header(); ?>

  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">Blog</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-blog.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-blog-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php echo get_template_part('/template/breadcrumb')?>

  <!-- サブループ対象のセクション上部（セクションとセクションの間）に配置する -->
  <?php
    $args = array( 
    //カスタム投稿のスラッグ名を記述
    'post_type' => 'post',
    //表示する記事の件数を指定
    'posts_per_page' => 10,
    );
    $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>

  <!-- page-blog -->
  <section class="page-blog top-page-blog">
    <div class="page-blog__inner inner">

      <div class="page-blog__content">

        <div class="page-blog__cards blog-cards blog-cards--page-blog">

            <!-- ループ処理開始の場所に持っていく -->
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="blog-cards__card card">
                <?php if (has_post_thumbnail()): ?>
                    <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                    <div class="card__img">
                    <?php the_post_thumbnail(); ?>
                    </div>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="" class="card__img">
                <?php endif; ?>

                <div class="card__body-pageBlog">
                <time class="card__date" datetime="<?php the_time('c')?>"><?php the_time('Y.m/d')?></time>
                <h3 class="card__title"><?php the_title();?></h3>
                <hr class="card__line-pageBlog">
                <p class="card__text"><?php the_excerpt();?></p>
                </div>
            </a>
            
            <!-- ループ終了の場所に持っていく -->
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
            <?php else : ?>
                <p>記事が投稿されていません</p>
            <?php endif; ?>

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