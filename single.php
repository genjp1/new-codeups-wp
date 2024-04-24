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

  <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

  <!-- page-blogDetail -->
  <section class="page-blogDetail top-page-blogDetail">
    <div class="page-blogDetail__inner inner">

      <div class="page-blogDetail__content">

        <div class="page-blogDetail__article blog-article">
          <div class="blog-article__info">
          <time class="blog-article__date" datetime="<?php the_time('c')?>"><?php the_time('Y.m.d')?></time>
            <p class="blog-article__title"><?php the_title();?></p>
            <hr class="blog-article__line">
          </div>

          <?php if (has_post_thumbnail()): ?>
            <div class="blog-article__img">
                <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                <?php the_post_thumbnail('full'); ?>
            </div>
          <?php endif; ?>

          <div class="blog-article__content">
             <?php the_content();?>
          </div>

        </div>

        <div class="page-blogDetail__pagenavi pagenavi">
        <!-- WP-PageNaviで出力される部分 ここから -->
          <?php 
          $prev = get_previous_post();
          $next = get_next_post();

          // 前の投稿が存在するか確認し、URLを取得
          if ($prev && is_a($prev, 'WP_Post')) {
              $prev_url = get_permalink($prev->ID);
          }

          // 次の投稿が存在するか確認し、URLを取得
          if ($next && is_a($next, 'WP_Post')) {
              $next_url = get_permalink($next->ID);
          }
          ?>
          <div class='wp-pagenavi' role='navigation'>
            <?php if(isset($next_url)):  ?>
            <a class="previouspostslink" rel="prev" href="<?php echo $next_url; ?>"></a>
            <?php endif; ?>
            <?php if(isset($prev_url)):  ?>
            <a class="nextpostslink nextpostslink--page-blogDetail" rel="next" href="<?php echo $prev_url; ?>"></a>
            <?php endif; ?>
          </div>
        <!-- WP-PageNaviで出力される部分 ここまで -->
        </div>


      </div>

      <!-- page-blog__sidebar -->
      <aside class="page-blog__sidebar sidebar">
        <?php get_sidebar(); ?>
      </aside>

    </div>

  </section>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>