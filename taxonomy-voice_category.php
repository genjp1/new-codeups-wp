<?php get_header(); ?>

  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">Voice</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-voice.jpg" class="sub-m__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-voice-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php echo get_template_part('/template/breadcrumb')?>

    <!-- サブループ対象のセクション上部（セクションとセクションの間）に配置する -->
    <?php
    // タクソノミーのスラッグを指定
    $voice_category_slug = get_query_var('voice_category');
    $args = array(
        // カスタム投稿のスラッグを指定
        "post_type" => "voice",
        'tax_query' => array(
            array(
                // タクソノミーのスラッグを指定
                'taxonomy' => 'voice_category',
                'field'    => 'slug',
                'terms'    => $voice_category_slug,
            ),
        ),
    );
    $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>

  <!-- page-voice -->
  <div class="page-voice top-page-voice">
    <div class="page-voice__inner inner">

      <!-- カテゴリータブ -->
      <div class="page-voice__tab tab-category">
        <div class="tab-category__lists">

        <?php
              $queried_object = get_queried_object();
              // カレントタームIDを取得（taxonomy-voice_category.phpp用）
                  $current_term_id = $queried_object->term_id;
              //ここまで（カレントタームIDを取得）
            
            $terms = get_terms(array(
                // 表示するタクソノミースラッグを記述
                'taxonomy' => 'voice_category',
                'orderby' => 'ID',
                'order'   => 'ASC',
                // 表示するタームの数を指定
                'number'  => 5
            ));

            // カスタム投稿一覧ページへのURL
            $home_class = (is_post_type_archive()) ? 'is-active' : '';
            $home_link = sprintf(
                //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
                '<a class="tab-category__list %s" href="%s" alt="%s">ALL</a>',
                $home_class,
                // カスタム投稿一覧ページのスラッグを指定
                esc_url(home_url('/voice')),
                esc_attr(__('View all posts', 'textdomain'))
            );
            echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

            // タームのリンク
            if ($terms) {
                foreach ($terms as $term) {
                    // カレントクラスに付与するクラスを指定できる
                    $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
                    $term_link = sprintf(
                        // 各タームに付与するクラスを指定できる
                        '<a class="tab-category__list %s" href="%s" alt="%s">%s</a>',
                        $term_class,
                        esc_url(get_term_link($term->term_id)),
                        esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                        esc_html($term->name)
                    );
                    echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                }
            }
        ?>

        </div>
      </div>

      <!-- ALL -->
      <ul class="page-voice__cards voice-cards">

        <!-- ループ処理開始の場所に持っていく -->
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        
        <li class="voice-cards__card voice-card">
          <div class="voice-card__content">
            <div class="voice-card__info">
              <div class="voice-card__meta">

                <!-- ACF条件分岐 -->
                <?php if (get_field('age')) : ?>
                <p class="voice-card__age"><?php the_field('age'); ?></p>
                <?php endif; ?>

                <!-- タクソノミー取得 -->
                <?php $terms = get_the_terms( get_the_ID(), 'voice_category' ); ?>
                <p class="voice-card__tag">
                <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                $term = array_shift( $terms ); // 配列から最初の項目を取り出す
                echo $term->name;}?>
                </p>

              </div>
              <h3 class="voice-card__title"><?php the_title();?></h3>
              <hr class="voice-card__line">
            </div>
            <div class="voice-card__img colorbox">

                <?php if (has_post_thumbnail()): ?>
                <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                <?php the_post_thumbnail(); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="">
                <?php endif; ?>

            </div>
          </div>
          <p class="voice-card__text"><?php the_content();?></p>
        </li>
        
         <!-- ループ終了の場所に持っていく -->
         <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <?php else : ?>
            <p>記事が投稿されていません</p>
        <?php endif; ?>

      <!-- ページネーション -->
      <div class="page-blogDetail__pagenavi pagenavi">
          <!-- WP-PageNaviで出力される部分 ここから -->
          <?php wp_pagenavi(); ?>
          <!-- WP-PageNaviで出力される部分 ここまで -->
      </div>

    </div>
  </div>

<?php get_footer(); ?>