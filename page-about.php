<?php get_header(); ?>

  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h2 class="sub-mv__main-title">About us</h2>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-about.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-about-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php echo get_template_part('/template/breadcrumb')?>

  <!-- page-aboutUs -->
  <section class="page-about top-page-about">
    <div class="page-about__inner inner">
      <div class="page-about__about">
        <div class="page-about__img-wrap">
          <div class="page-about__img-small u-desktop">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-us1.jpg" alt="水中にいるダイバーの様子">
          </div>
          <div class="page-about__img-big">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-us2.jpg" alt="水中にいるダイバーの様子">
          </div>
        </div>
        <div class="page-about__content-wrap">
          <h2 class="page-about__title">Dive into<br>the Ocean</h2>
          <div class="page-about__text-wrap">
            <p class="page-about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- gallery -->
  <section class="gallery top-gallery">
    <div class="gallery__inner inner">
      <div class="gallery__title title">
        <p class="title__main">Gallery</p>
        <h2 class="title__sub">フォト</h2>
      </div>

      <?php
        $repeat_item = SCF::get_option_meta('gallery_options', 'gallery_lists');
        foreach ($repeat_item as $index => $fields) {
          $image_url = wp_get_attachment_image_src($fields['gallery_item'], 'full');
        ?>
      <div class="gallery__modal modal js-modal" id="js-modal<?php echo $index + 1; ?>" aria-hidden="true">
        <div class="modal__body" tabindex="-1" data-micromodal-close>
          <div class="modal__content js-modal__content" role="dialog" aria-modal="true">
            <img src="<?php echo $image_url[0]; ?>" alt="" data-micromodal-close />
          </div>
        </div>
      </div>
      <?php
        }
        ?>

      <div class="gallery__list gallery-list">
        <?php
        $repeat_item = SCF::get_option_meta('gallery_options', 'gallery_lists');
        foreach ($repeat_item as $index => $fields) {
          $image_url = wp_get_attachment_image_src($fields['gallery_item'], 'full');
        ?>
        <figure class="gallery-list__item js-modal-open" data-micromodal-trigger="js-modal<?php echo $index + 1; ?>">
          <img src="<?php echo $image_url[0]; ?>" alt="ギャラリーの画像" />
        </figure>
        <?php
        }
        ?>
      </div>

    </div>
  </section>

<?php get_footer(); ?>