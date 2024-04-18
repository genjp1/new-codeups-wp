<?php get_header(); ?>

<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$blogDetail = esc_url( home_url( '/blogDetail/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$privacypolicy = esc_url( home_url( '/privacypolicy/' ) );
$terms = esc_url( home_url( '/terms/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>

<!-- mv -->
<section class="mv">
    <div class="mv__inner">
      <div class="mv__title-wrap">
        <h2 class="mv__main-title">DIVING</h2>
        <p class="mv__sub-title">into the ocean</p>
      </div>
      <div class="mv__swiper swiper js-mv-swiper">
        <div class="swiper-wrapper">

        <!-- メインビューのスライダーACF設置（管理画面から編集可能） -->
          <?php
          $mvPC = get_field('mvPC', 148); // PCの画像配列
          $mvSP = get_field('mvSP', 148); // SPの画像491配列
          $i = 1;
          foreach($mvPC as $image):
            // echo ($mvPC['mvPC'.$i].$i);
            if ($mvPC['mvPC'.$i] && $mvSP['mvSP'.$i]) :
          ?>

          <div class="swiper-slide">
            <div class="mv__swiper-img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo esc_url($mvPC['mvPC'.$i]); ?>" class="mv">
                <img src="<?php echo esc_url($mvSP['mvSP'.$i]); ?>" class="mv" alt="水中のウミガメの様子">
              </picture>
            </div>
          </div>

          <?php endif; $i += 1; endforeach; ?>

        </div>
      </div>
    </div>
  </section>

  <!-- サブループ対象のセクション上部（セクションとセクションの間）に配置する -->
  <?php
    $args = array( 
      //カスタム投稿のスラッグ名を記述
      'post_type' => 'campaign',
      //表示する記事の件数を指定
      'posts_per_page' => -1,
    );
    $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>

  <!-- campaign -->
  <section id="campaign" class="campaign top-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__content">

        <div class="campaign-swiper__button-wrap">
          <div class="swiper-button-prev js-campaign-arrow"></div>
          <div class="swiper-button-next js-campaign-arrow"></div>
        </div>
        <div class="campaign__title title">
          <p class="title__main">Campaign</p>
          <h2 class="title__sub">キャンペーン</h2>
        </div>
        <div class="campaign__swiper campaign-swiper">
          <div class="swiper js-campaign-swiper">
            <ul class="swiper-wrapper">

              <!-- ループ処理開始の場所に持っていく -->
              <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

              <li class="campaign-swiper__card swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__item">
                    <div class="campaign-card__img">

                    <?php if (has_post_thumbnail()): ?>
                        <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="">
                    <?php endif; ?>

                    </div>
                    <div class="campaign-card__body">
                      <div class="campaign-card__head">

                        <!-- タクソノミー取得 -->
                        <?php $terms = get_the_terms( get_the_ID(), 'campaign_category' ); ?>
                        <p class="campaign-card__tag">
                          <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                              $term = array_shift( $terms ); // 配列から最初の項目を取り出す
                              echo $term->name;}?>
                          </p>
                        <!-- タイトル取得 -->
                        <h3 class="campaign-card__title"><?php the_title();?></h3>

                      </div>

                      <!-- ACF変数化 -->
                      <?php 
                       $campaignPrice = get_field('campaign_price');
                       $campaignDetail= get_field('campaign_detail');
                       $campaignPeriod = $campaignDetail['campaign-period'];
                      ?>

                      <div class="campaign-card__text-blok">
                        <hr class="campaign-card__line">

                        <?php if( !empty($campaignPrice['text']) ): ?>
                          <p class="campaign-card__text"><?php echo esc_html($campaignPrice['text']); ?></p>
                        <?php endif; ?>

                        <div class="campaign-card__price">
                          <?php if( !empty($campaignPrice['list-price']) ): ?>
                            <p class="campaign-card__price-before">&yen;<?php echo number_format($campaignPrice['list-price']); ?></p>
                          <?php endif; ?>

                          <?php if( !empty($campaignPrice['discount-price']) ): ?>
                            <p class="campaign-card__price-discount">&yen;<?php echo number_format($campaignPrice['discount-price']); ?></p>
                          <?php endif; ?>

                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- ループ終了の場所に持っていく -->
              <?php endwhile; wp_reset_postdata(); ?>
            </ul>
            <?php else : ?>
                <p>記事が投稿されていません</p>
            <?php endif; ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="campaign__btn">
          <a href="<?php echo $campaign; ?>" class="btn"><span>View more</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- aboutUs -->
  <section id="about" class="about top-about">
    <div class="about__inner inner">
      <div class="about__title title">
        <p class="title__main">About us</p>
        <h2 class="title__sub">私たちについて</h2>
      </div>
      <div class="about__img-wrap">
        <div class="about__img-small">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-us1.jpg" alt="水中にいるダイバーの様子">
        </div>
        <div class="about__img-big">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-us2.jpg" alt="水中にいるダイバーの様子">
        </div>
      </div>
      <div class="about__content-wrap">
        <h3 class="about__title">Dive into<br>the Ocean</h3>
        <div class="about__text-wrap">
          <p class="about__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
          <div class="about__button">
            <a href="<?php echo $about; ?>" class="btn"><span>View more</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- information -->
  <section id="information" class="information top-information">
    <div class="information__inner inner">
      <div class="information__title title">
        <p class="title__main">Information</p>
        <h2 class="title__sub">ダイビング情報</h2>
      </div>
      <div class="information__content">
        <div class="information__img colorbox">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/information.jpg" class="information__img-img" alt="複数の魚が水中でサンゴの近くを泳いでいる様子">
        </div>
        <div class="information__course">
          <h3 class="information__course-title">ライセンス講習</h3>
          <hr class="information__line">
          <p class="information__course-text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information__btn">
            <a href="<?php echo $information; ?>" class="btn"><span>View more</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- サブループ対象のセクション上部（セクションとセクションの間）に配置する -->
<?php
  $args = array( 
    //カスタム投稿のスラッグ名を記述
    'post_type' => 'post',
    //表示する記事の件数を指定
    'posts_per_page' => 3,
  );
  $the_query = new WP_Query($args); if($the_query->have_posts()):
?>

  <!-- blog -->
  <section id="blog" class="blog blog-bg top-blog">
    <div class="blog__inner inner">
      <div class="blog__title title">
        <p class="title__main title__main--white">Blog</p>
        <h2 class="title__sub title__sub--white">ブログ</h2>
      </div>
      <div class="blog__cards blog-cards">

      <!-- ループ処理開始の場所に持っていく -->
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

        <a href="<?php echo $blogDetail; ?>" class="blog-cards__card card">

          <?php if (has_post_thumbnail()): ?>
              <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
              <div class="card__img">
                <?php the_post_thumbnail(); ?>
              </div>
          <?php else: ?>
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="" class="review-card__img-img">
          <?php endif; ?>

          <div class="card__body">
            <time class="card__date" datetime="<?php the_time('c')?>"><?php the_time('Y.m.d')?></time>
            <h3 class="card__title"><?php the_title();?></h3>
            <hr class="card__line">
            <p class="card__text"><?php the_excerpt();?></p>
          </div>
        </a>

        <!-- ループ終了の場所に持っていく -->
        <?php endwhile; wp_reset_postdata(); ?>
          </div>
        <?php else : ?>
            <p>記事が投稿されていません</p>
        <?php endif; ?>

      <div class="blog__btn">
        <a href="<?php echo $blog; ?>" class="btn"><span>View more</span></a>
      </div>
    </div>
  </section>

  <!-- サブループ対象のセクション上部（セクションとセクションの間）に配置する -->
  <?php
    $args = array( 
      //カスタム投稿のスラッグ名を記述
      'post_type' => 'voice',
      //表示する記事の件数を指定
      'posts_per_page' => 2,
    );
    $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>

  <!-- voice -->
  <section id="voice" class="voice top-voice">
    <div class="voice__inner inner">
      <div class="voice__title title">
        <p class="title__main">Voice</p>
        <h2 class="title__sub">お客様の声</h2>
      </div>
      <ul class="voice__voice-cards voice-cards">

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
                      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.jpg" alt="" class="review-card__img-img">
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

      <div class="voice__btn">
        <a href="<?php echo $voice; ?>" class="btn"><span>View more</span></a>
      </div>
    </div>
  </section>

  <!-- price -->
  <section id="price" class="price top-price">
    <div class="price__inner inner">
      <div class="price__title title">
        <p class="title__main">Price</p>
        <h2 class="title__sub">料金一覧</h2>
      </div>
      <div class="price__imgTop">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price1.jpg" alt="水中のウミガメの様子">
      </div>
      <div class="price__content">
        <div class="price__items">

          <!-- license_lists -->
          <h3 class="price__title">ライセンス講習</h3>
          <hr class="price__line">
            <?php
              $license_fields = SCF::get_option_meta('price_options', 'license_lists');
              foreach ($license_fields as $license_field_name => $license_value) {
                  $license_content = esc_html($license_value['license_content']);
                  $license_subContent = esc_html($license_value['license_subContent']);
                  $license_price = esc_html($license_value['license_price']);

                  if ($license_content && $license_subContent && $license_price) {
                      ?>
                      <dl class="price__item">
                          <div class="price__course">
                              <dt class="price__name"><?php echo $license_content; ?> <?php echo $license_subContent; ?></dt>
                              <dd class="price__cost">&yen;<?php echo number_format($license_price); ?></dd>
                          </div>
                      </dl>
                      <?php
                  }
              }
            ?>

          <!-- experience_lists -->
          <h3 class="price__title">体験ダイビング</h3>
          <hr class="price__line">
            <?php
                $experience_fields = SCF::get_option_meta('price_options', 'experience_lists');
                foreach ($experience_fields as $experience_field_name => $experience_value) {
                    $experience_content = esc_html($experience_value['experience_content']);
                    $experience_subContent = esc_html($experience_value['experience_subContent']);
                    $experience_price = esc_html($experience_value['experience_price']);

                    if ($experience_content && $experience_subContent && $experience_price) {
                        ?>
                        <dl class="price__item">
                            <div class="price__course">
                                <dt class="price__name"><?php echo $experience_content; ?> <?php echo $experience_subContent; ?></dt>
                                <dd class="price__cost">&yen;<?php echo number_format($experience_price); ?></dd>
                            </div>
                        </dl>
                        <?php
                    }
                }
              ?>
         
         <!-- fun_lists -->
          <h3 class="price__title">ファンダイビング</h3>
          <hr class="price__line">
            <?php
                $fun_fields = SCF::get_option_meta('price_options', 'fun_lists');
                foreach ($fun_fields as $fun_field_name => $fun_value) {
                    $fun_content = esc_html($fun_value['fun_content']);
                    $fun_subContent = esc_html($fun_value['fun_subContent']);
                    $fun_price = esc_html($fun_value['fun_price']);

                    if ($fun_content && $fun_subContent && $fun_price) {
                        ?>
                        <dl class="price__item">
                            <div class="price__course">
                                <dt class="price__name"><?php echo $fun_content; ?> <?php echo $fun_subContent; ?></dt>
                                <dd class="price__cost">&yen;<?php echo number_format($fun_price); ?></dd>
                            </div>
                        </dl>
                        <?php
                    }
                }
              ?>

          <!-- special_lists -->
          <h3 class="price__title">スペシャルダイビング</h3>
          <hr class="price__line">
            <?php
                $special_fields = SCF::get_option_meta('price_options', 'special_lists');
                foreach ($special_fields as $special_field_name => $special_value) {
                    $special_content = esc_html($special_value['special_content']);
                    $special_subContent = esc_html($special_value['special_subContent']);
                    $special_price = esc_html($special_value['special_price']);

                    if ($special_content && $special_subContent && $special_price) {
                        ?>
                        <dl class="price__item">
                            <div class="price__course">
                                <dt class="price__name"><?php echo $special_content; ?> <?php echo $special_subContent; ?></dt>
                                <dd class="price__cost">&yen;<?php echo number_format($special_price); ?></dd>
                            </div>
                        </dl>
                        <?php
                    }
                }
              ?>

        </div> <!-- price__items -->

        <div class="price__imageCenter colorbox">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price2.jpg" class="price__imageCenter-img" alt="水中のサンゴと複数の小魚の様子">
        </div>
      </div><!-- price__content -->
      <div class="price__btn">
        <a href="<?php echo $price; ?>" class="btn"><span>View more</span></a>
      </div>
    </div> <!-- price__head inner -->
  </section>

<?php get_footer(); ?>