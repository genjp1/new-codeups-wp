<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />

  <?php wp_head(); ?>
</head>

<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
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
?> 

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="index.html" class="logo">
          <img src="./assets/images/common/logo.svg" alt="CodeUps">
        </a>
      </h1>
      <button class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- ul.global-nav__items>li.global-nav__item*6>a -->

      <!-- スマホメニュー -->
      <!-- .sp-nav>ul.sp-nav__items>li.sp-nav__item*6>a -->
      <div class="header__sp-nav sp-nav js-drawer-menu">
        <nav class="sp-nav__items">
          <div class="sp-nav__scroll-container">
            <ul class="sp-nav__items-column">
              <li class="sp-nav__item"><span><a href="page-campaign.html">キャンペーン</a></span>
                <ul>
                  <li class="sp-nav__item-child"><a href="page-campaign_category-licence.html">ライセンス取得</a></li>
                  <li class="sp-nav__item-child"><a href="page-campaign_category-fundiving.html">貸切体験ダイビング</a></li>
                  <li class="sp-nav__item-child"><a href="page-campaign_category-trial-diving.html">ナイトダイビング</a></li>
                </ul>
              </li>
              <li class="sp-nav__item"><span><a href="page-about.html">私たちについて</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="page-information.html">ダイビング情報</a></span>
                <ul>
                  <li class="sp-nav__item-child"><a class="tab-link" href="">ライセンス取得</a></li>
                  <li class="sp-nav__item-child"><a class="tab-link" href="">体験ダイビング</a></li>
                  <li class="sp-nav__item-child"><a class="tab-link" href="">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="sp-nav__item"><span><a href="page-blog.html">ブログ</a></span>
              </li>
            </ul>
            <ul class="sp-nav__items-column">
              <li class="sp-nav__item"><span><a href="page-voice.html">お客様の声</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="page-price.html">料金一覧</a></span>
                <ul>
                  <li class="sp-nav__item-child"><a href="page-voice_category-licence.html">ライセンス講習</a></li>
                  <li class="sp-nav__item-child"><a href="page-voice_category-trial-diving.html">体験ダイビング</a></li>
                  <li class="sp-nav__item-child"><a href="page-voice_category-fundiving.html">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="sp-nav__item"><span><a href="page-faq.html">よくある質問</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="page-policy.html">プライバシー<br>ポリシー</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="page-terms.html">利用規約</a></span>
              </li>
              <li class="sp-nav__item"><span><a href="page-contact.html">お問い合わせ</a></span>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!-- pcメニュー -->
      <nav class="header__pc-nav pc-nav js-drawer-menu">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="page-campaign.html">Campaign<span>キャンペーン</span></a></li>
          <li class="pc-nav__item"><a href="page-about.html">About us<span>私たちについて</span></a></li>
          <li class="pc-nav__item"><a href="page-information.html">Information<span>ダイビング情報</span></a></li>
          <li class="pc-nav__item"><a href="page-blog.html">Blog<span>ブログ</span></a></li>
          <li class="pc-nav__item"><a href="page-voice.html">Voice<span>お客様の声</span></a></li>
          <li class="pc-nav__item"><a href="page-price.html">Price<span>料金一覧</span></a></li>
          <li class="pc-nav__item"><a href="page-faq.html">FAQ<span>よくある質問</span></a></li>
          <li class="pc-nav__item"><a href="page-contact.html">Contact<span>お問い合わせ</span></a></li>
        </ul>
      </nav>
    </div>
  </header>