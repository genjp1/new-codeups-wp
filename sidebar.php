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
?>


<div class="sidebar__inner">
    <div class="sidebar__popular">
    <h2 class="sidebar__title">人気記事</h2>
    <div class="sidebar__cards popular-cards">
        <a href="page-blogDetail.html" class="popular-cards__card popular-card">
        <div class="popular-card__content">
            <div class="popular-card__img colorbox">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog4.jpg" alt="水中で多くの魚が泳いている様子" class="popular-card__img-img">
            </div>
            <div class="popular-card__info">
            <time class="popular-card__date" datetime="2023-11-17">2023.11/17</time>
            <p class="popular-card__title">ライセンス取得</p>
            </div>
        </div>
        </a>
        <a href="page-blogDetail.html" class="sidebar-cards__card popular-card">
        <div class="popular-card__content">
            <div class="popular-card__img colorbox">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog2.jpg" alt="水中で多くの魚が泳いている様子" class="popular-card__img-img">
            </div>
            <div class="popular-card__info">
            <time class="popular-card__date" datetime="2023-11-17">2023.11/17</time>
            <p class="popular-card__title">ウミガメと泳ぐ</p>
            </div>
        </div>
        </a>
        <a href="page-blogDetail.html" class="sidebar-cards__card popular-card">
        <div class="popular-card__content">
            <div class="popular-card__img colorbox">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog3.jpg" alt="水中で多くの魚が泳いている様子" class="popular-card__img-img">
            </div>
            <div class="popular-card__info">
            <time class="popular-card__date" datetime="2023-11-17">2023.11/17</time>
            <p class="popular-card__title">カクレクマノミ</p>
            </div>
        </div>
        </a>
    </div>
    </div>
    <div class="sidebar__review">
    <h2 class="sidebar__title">口コミ</h2>
    <ul class="sidebar__cards review-cards">
        <li class="review-cards__card review-card">
        <div class="review-card__content">
            <div class="review-card__img colorbox">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog7.jpg" alt="カップルが笑顔で寄り添ってソファに座っている様子"
                class="review-card__img-img">
            </div>
            <div class="review-card__info">
            <p class="review-card__age">30代(カップル)</p>
            <p class="review-card__title">ここにタイトルが入ります。ここにタイトル</p>
            </div>
        </div>
        </li>
    </ul>
    <div class="sidebar__review-cardBtn">
        <a href="page-voice.html" class="btn"><span>View more</span></a>
    </div>
    </div>
    <div class="sidebar__campaign">
    <h2 class="sidebar__title">キャンペーン</h2>
    <ul class="sidebar__cards sidebar-campaignCards">
        <li class="sidebar-campaignCards__card">
        <div class="sidebar-campaignCard">
            <div class="sidebar-campaignCard__item">
            <div class="sidebar-campaignCard__img">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign1.jpg" alt="水中に複数の魚がいる様子">
            </div>
            <div class="sidebar-campaignCard__body">
                <div class="sidebar-campaignCard__head">
                <p class="sidebar-campaignCard__title">ライセンス取得</p>
                </div>
                <div class="sidebar-campaignCard__text-blok">
                <hr class="sidebar-campaignCard__line">
                <p class="sidebar-campaignCard__text">全部コミコミ(お一人様)</p>
                <div class="sidebar-campaignCard__price">
                    <p class="sidebar-campaignCard__price-before">¥56,000</p>
                    <p class="sidebar-campaignCard__price-discount">¥46,000</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </li>
        <li class="sidebar-cards__card">
        <div class="sidebar-campaignCard">
            <div class="sidebar-campaignCard__item">
            <div class="sidebar-campaignCard__img">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign2.jpg" alt="水面にボートが浮かんでいる様子">
            </div>
            <div class="sidebar-campaignCard__body">
                <div class="sidebar-campaignCard__head">
                <p class="sidebar-campaignCard__title">貸切体験ダイビング</p>
                </div>
                <div class="sidebar-campaignCard__text-blok">
                <hr class="sidebar-campaignCard__line">
                <p class="sidebar-campaignCard__text">全部コミコミ(お一人様)</p>
                <div class="sidebar-campaignCard__price">
                    <p class="sidebar-campaignCard__price-before">¥24,000</p>
                    <p class="sidebar-campaignCard__price-discount">¥18,000</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </li>
    </ul>
    <div class="sidebar__campaign-cardBtn">
        <a href="page-campaign.html" class="btn"><span>View more</span></a>
    </div>
    </div>
    <div class="sidebar__archive">
    <h2 class="sidebar__title">アーカイブ</h2>

    <div class="sidebar__container toggl">
        <div class="toggl__container">

        <details open="open">
            <summary><span class="toggl__age">2023</span></summary>
            <div class="folder">
            <details>
                <summary><span class="toggl__month">3月</span></summary>
                <div class="folder">
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ライセンス取得</p>
                </a>
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ウミガメと泳ぐ</p>
                </a>
                </div>
            </details>
            <details>
                <summary><span class="toggl__month">2月</span></summary>
                <div class="folder">
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ライセンス取得</p>
                </a>
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ウミガメと泳ぐ</p>
                </a>
                </div>
            </details>
            <details>
                <summary><span class="toggl__month">1月</span></summary>
                <div class="folder">
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ライセンス取得</p>
                </a>
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ウミガメと泳ぐ</p>
                </a>
                </div>
            </details>
            </div>
        </details>
        <details>
            <summary><span class="toggl__age">2022</span></summary>
            <div class="folder">
            <details>
                <summary><span class="toggl__month">3月</span></summary>
                <div class="folder">
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ライセンス取得</p>
                </a>
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ウミガメと泳ぐ</p>
                </a>
                </div>
            </details>
            <details>
                <summary><span class="toggl__month">2月</span></summary>
                <div class="folder">
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ライセンス取得</p>
                </a>
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ウミガメと泳ぐ</p>
                </a>
                </div>
            </details>
            <details>
                <summary><span class="toggl__month">1月</span></summary>
                <div class="folder">
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ライセンス取得</p>
                </a>
                <a href="page-blogDetail.html">
                    <p>2023.11/17 ウミガメと泳ぐ</p>
                </a>
                </div>
            </details>
            </div>
        </details>

        </div>

    </div>
    </div>
</div>