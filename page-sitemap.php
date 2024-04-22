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
$c_licence = esc_url( home_url( '/campaign_category/licence/' ) );
$c_fundiving = esc_url( home_url( '/campaign_category/fundiving/' ) );
$c_trial_diving = esc_url( home_url( '/campaign_category/trial-diving/' ) );
$p_licence = esc_url( home_url( '/price#licence' ) );
$p_fundiving = esc_url( home_url( '/price#fundiving' ) );
$p_trial_diving = esc_url( home_url( '/price#trial-diving' ) );
// $i_licence = esc_url( home_url( '/information/?tab=license' ) );
// $i_fundiving = esc_url( home_url( '/information/?tab=fan-diving' ) );
// $i_experience_diving = esc_url( home_url( '/information/?tab=experience-diving' ) );
?> 

  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">Site MAP</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-others.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-others-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <div class="breadcrumb">
    <div class="inner">
      <div><a href="index.html">TOP</a> > サイトマップ</div>
    </div>
  </div>

  <!-- page-sitemap -->
  <div class="page-sitemap top-page-sitemap">
    <div class="page-sitemap__inner inner">

      <div class="page-sitemap__nav footer-nav">
        <div class="footer-nav__sitemapContents">

          <div class="footer-nav__sitemapContent">

            <ul class="footer-nav__items-column">
              <li class="footer-nav__item footer-nav__item--black"><span><a href="<?php echo $campaign; ?>">キャンペーン</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a href="<?php echo $c_licence; ?>">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a href="<?php echo $c_fundiving; ?>">貸切体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="<?php echo $c_trial_diving; ?>">ナイトダイビング</a></li>
                </ul>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="<?php echo $about; ?>">私たちについて</a></span>
              </li>
            </ul>
            <ul class="footer-nav__items-column">
              <li class="footer-nav__item footer-nav__item--black"><span><a href="<?php echo $information; ?>">ダイビング情報</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a class="tab-link">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a class="tab-link">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a class="tab-link">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="<?php echo $blog; ?>">ブログ</a></span>
              </li>
            </ul>
          </div>
          <div class="footer-nav__sitemapContent">
            <ul class="footer-nav__items-column">
              <li class="footer-nav__item footer-nav__item--black"><span><a href="<?php echo $voice; ?>">お客様の声</a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="<?php echo $price; ?>">料金一覧</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a href="<?php echo $p_licence; ?>">ライセンス講習</a></li>
                  <li class="footer-nav__item-child"><a href="<?php echo $p_trial_diving; ?>">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="<?php echo $p_fundiving; ?>">ファンダイビング</a></li>
                </ul>
              </li>
            </ul>
            <ul class="footer-nav__items-columnEnd">
              <li class="footer-nav__item footer-nav__item--black"><span><a href="<?php echo $faq; ?>">よくある質問</a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="<?php echo $privacypolicy; ?>"><span>プライバシー<br
                        class="u-mobile">ポリシー</span></a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="<?php echo $terms; ?>">利用規約</a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="<?php echo $contact; ?>">お問い合わせ</a></span>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>

<?php get_footer(); ?>