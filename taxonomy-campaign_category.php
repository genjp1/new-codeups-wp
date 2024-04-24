<?php get_header(); ?>

<?php
$contact = esc_url( home_url( '/contact/' ) );
?>

  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h1 class="sub-mv__main-title">Campaign</h1>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" 
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-campaign.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-campaign-sp.jpg" class="sub-m__img-sp" 
          alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

<!-- パンくず あとでプラグイン化する。-->
<?php echo get_template_part('/template/breadcrumb')?>


  <!-- page-campaign -->
  <div class="page-campaign top-page-campaign">
    <div class="page-campaign__inner inner">

    
      <!-- カテゴリータブ -->
      <!-- <div class="page-campaign__tab tab-category">
        <div class="tab-category__lists">
          <a href="page-campaign.html" class="tab-category__list is-active">ALL</a>
          <a href="page-campaign_category-licence.html" class="tab-category__list">ライセンス講習</a>
          <a href="page-campaign_category-fundiving.html" class="tab-category__list">ファンダイビング</a>
          <a href="page-campaign_category-trial-diving.html" class="tab-category__list">体験ダイビング</a>
        </div>
      </div> -->
      
      <!-- カテゴリータブ -->
      <div class="page-campaign__tab tab-category">
        <div class="tab-category__lists">
            <?php
              // カレントタームIDを取得（taxonomy-campaign_category.php用）
              $current_term_id = get_queried_object()->term_id;
              //ここまで（カレントタームIDを取得）

              $terms = get_terms(array(
                  // 表示するタクソノミースラッグを記述
                  'taxonomy' => 'campaign_category',
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
                  esc_url(home_url('/campaign')),
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


      <!-- キャンペーンカード -->
      <ul class="page-campaign__cards page-campaign-cards">

      <?php if (have_posts()): ?>
	      <?php while (have_posts()) : the_post(); ?>

        <!-- ALL -->
        <li class="page-campaign-cards__card">
          <div class="page-campaign-card">
            <div class="page-campaign-card__item">
              <div class="page-campaign-card__img">
                <?php if (has_post_thumbnail()): ?>
                    <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                    <?php the_post_thumbnail(); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="">
                <?php endif; ?>
              </div>
              <div class="page-campaign-card__body">
                <div class="page-campaign-card__head">

                <!-- タクソノミー取得 -->
                <?php $terms = get_the_terms( get_the_ID(), 'campaign_category' ); ?>
                  <p class="page-campaign-card__tag">
                    <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                        $term = array_shift( $terms ); // 配列から最初の項目を取り出す
                        echo $term->name;}?>
                  </p>

                  <!-- タイトル取得 -->
                  <h3 class="page-campaign-card__title"><?php the_title();?></h3>
                </div>

                <!-- ACF変数化 -->
                <?php
                $campaignPrice = get_field('campaign_price');
                $campaignDetail= get_field('campaign_detail');
                $campaignPeriod = $campaignDetail['campaign-period'];
                ?>

                <div class="page-campaign-card__text-blok">
                  <hr class="page-campaign-card__line">

                  <?php if( !empty($campaignPrice['text']) ): ?>
                  <p class="page-campaign-card__text"><?php echo esc_html($campaignPrice['text']); ?></p>
                  <?php endif; ?>

                  <div class="page-campaign-card__price">
                    <?php if( !empty($campaignPrice['list-price']) ): ?>
                    <p class="page-campaign-card__price-before">&yen;<?php echo number_format($campaignPrice['list-price']); ?></p>
                    <?php endif; ?>

                    <?php if( !empty($campaignPrice['discount-price']) ): ?>
                    <p class="page-campaign-card__price-discount">&yen;<?php echo number_format($campaignPrice['discount-price']); ?></p>
                    <?php endif; ?>
                  </div>

                </div>

                <?php if( !empty($campaignDetail['campaign-main-text']) ): ?>
                <p class="page-campaign-card__description u-desktop"><?php echo esc_html($campaignDetail['campaign-main-text']); ?></p>
                <?php endif; ?>

                <?php if( !empty($campaignPeriod['campaign-period-start']) ): ?>
                <p class="page-campaign-card__schedule u-desktop"><?php echo $campaignPeriod['campaign-period-start']; ?>&thinsp;-&thinsp;<?php echo $campaignPeriod['campaign-period-done']; ?></p>
                <?php endif; ?>

                <?php if( !empty($campaignDetail['campaign-sub-text']) ): ?>
                <p class="page-campaign-card__reserve u-desktop"><?php echo esc_html($campaignDetail['campaign-sub-text']); ?></p>
                <?php endif; ?>

                <div class="page-campaign-card__button u-desktop">
                  <a href="<?php echo $contact; ?>" class="btn"><span>Contact us</span></a>
                </div>
              </div>
            </div>
          </div>
        </li>
        
        <!-- ループ終了の場所に持っていく -->
        <?php endwhile; ?>
        
        </ul>
        <?php else : ?>
            <p>記事が投稿されていません</p>
        <?php endif; ?>

      <!-- ページネーション -->
      <div class="page-voice__pagenavi pagenavi">
        <!-- WP-PageNaviで出力される部分 ここから -->
        <?php wp_pagenavi(); ?>
        <!-- WP-PageNaviで出力される部分 ここまで -->
      </div>

    </div>
  </div>

<?php get_footer(); ?>