<?php get_header(); ?>

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
              <li class="footer-nav__item footer-nav__item--black"><span><a href="page-campaign.html">キャンペーン</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a href="#">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a href="#">貸切体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="#">ナイトダイビング</a></li>
                </ul>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="page-about.html">私たちについて</a></span>
              </li>
            </ul>
            <ul class="footer-nav__items-column">
              <li class="footer-nav__item footer-nav__item--black"><span><a href="page-information.html">ダイビング情報</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">ライセンス取得</a></li>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a class="tab-link" href="#">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="page-blog.html">ブログ</a></span>
              </li>
            </ul>
          </div>
          <div class="footer-nav__sitemapContent">
            <ul class="footer-nav__items-column">
              <li class="footer-nav__item footer-nav__item--black"><span><a href="page-voice.html">お客様の声</a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="page-price.html">料金一覧</a></span>
                <ul>
                  <li class="footer-nav__item-child"><a href="">ライセンス講習</a></li>
                  <li class="footer-nav__item-child"><a href="#">体験ダイビング</a></li>
                  <li class="footer-nav__item-child"><a href="#">ファンダイビング</a></li>
                </ul>
              </li>
            </ul>
            <ul class="footer-nav__items-columnEnd">
              <li class="footer-nav__item footer-nav__item--black"><span><a href="page-faq.html">よくある質問</a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="page-policy.html"><span>プライバシー<br
                        class="u-mobile">ポリシー</span></a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="page-terms.html">利用規約</a></span>
              </li>
              <li class="footer-nav__item footer-nav__item--black"><span><a href="page-contact.html">お問い合わせ</a></span>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>

<?php get_footer(); ?>