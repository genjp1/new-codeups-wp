<?php get_header(); ?>

  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__title-wrap">
        <h1 class="sub-mv__main-title">Price</h1>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-price.jpg" class="sub-mv__img-pc">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-price-sp.jpg" class="sub-m__img-sp" alt="5人のダイバーが水面に浮かんでいる様子">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず あとでプラグイン化する。-->
  <?php echo get_template_part('/template/breadcrumb')?>

  <!-- page-price -->
  <div class="page-price top-page-price">
    <div class="page-price__inner inner">

      <!-- ライセンス講習 -->
      <div id="licence" class="page-price__table">
          <table class="price-list">
              <thead class="price-list__head u-mobile">
                  <tr>
                      <th colspan="3" class="price-list__titleSp">ライセンス講習</th>
                  </tr>
              </thead>
              <tbody>
              <?php
                  $license_fields = SCF::get_option_meta('price_options', 'license_lists');
                  $row_count = 0;
                  // 最初に全ての有効な行を数える
                  foreach ($license_fields as $license_field_name => $license_value) {
                      $license_content = esc_html($license_value['license_content']);
                      $license_subContent = esc_html($license_value['license_subContent']);
                      $license_price = esc_html($license_value['license_price']);
                      if ($license_content && $license_subContent && $license_price) {
                          $row_count++;
                      }
                  }

                  $first = true; // 最初の行で「ライセンス講習」を表示するためのフラグ
                  foreach ($license_fields as $license_field_name => $license_value) {
                      $license_content = esc_html($license_value['license_content']);
                      $license_subContent = esc_html($license_value['license_subContent']);
                      $license_price = esc_html($license_value['license_price']);
                      if ($license_content && $license_subContent && $license_price) {
                          if ($first) {
                              // 最初の行に「ライセンス講習」を表示し、全行分の高さを持たせる
                              echo '<tr><td rowspan="' . $row_count . '" class="price-list__titlePc u-desktopTable-cell">ライセンス講習</td>';
                              $first = false;
                          } else {
                              echo '<tr>';
                          }
                          echo '<td class="price-list__data">' . $license_content . '<br class="u-mobile">' . $license_subContent . '</td>';
                          echo '<td class="price-list__cost">&yen;' . number_format($license_price) . '</td>';
                          echo '</tr>';
                      }
                  }
              ?>
              </tbody>
          </table>
      </div>
      <!-- end of ライセンス講習 -->

      <!-- 体験ダイビング -->
      <div id="trial-diving" class="page-price__table">
          <table class="price-list">
              <thead class="price-list__head u-mobile">
                  <tr>
                      <th colspan="3" class="price-list__titleSp">体験ダイビング</th>
                  </tr>
              </thead>
              <tbody>
              <?php
                  $experience_fields = SCF::get_option_meta('price_options', 'experience_lists');
                  $row_count = 0;
                  // Count valid rows first
                  foreach ($experience_fields as $experience_field) {
                      $experience_content = esc_html($experience_field['experience_content']);
                      $experience_subContent = esc_html($experience_field['experience_subContent']);
                      $experience_price = esc_html($experience_field['experience_price']);
                      if ($experience_content && $experience_subContent && $experience_price) {
                          $row_count++; // Increase row count for each valid row
                      }
                  }

                  $first = true; // Flag to indicate the first row
                  foreach ($experience_fields as $experience_field) {
                      $experience_content = esc_html($experience_field['experience_content']);
                      $experience_subContent = esc_html($experience_field['experience_subContent']);
                      $experience_price = esc_html($experience_field['experience_price']);
                      if ($experience_content && $experience_subContent && $experience_price) {
                          if ($first) {
                              // Display '体験ダイビング' in the first row with dynamic rowspan
                              echo '<tr><td rowspan="' . $row_count . '" class="price-list__titlePc u-desktopTable-cell">体験ダイビング</td>';
                              $first = false;
                          } else {
                              // Start new row for other entries
                              echo '<tr>';
                          }
                          echo '<td class="price-list__data">' . $experience_content . '<br class="u-mobile">' . $experience_subContent . '</td>';
                          echo '<td class="price-list__cost">&yen;' . number_format($experience_price) . '</td>';
                          echo '</tr>';
                      }
                  }
              ?>
              </tbody>
          </table>
      </div>
      <!-- end of 体験ダイビング -->

      <!-- ファンダイビング -->
      <div id="fundiving" class="page-price__table">
          <table class="price-list">
              <thead class="price-list__head u-mobile">
                  <tr>
                      <th colspan="3" class="price-list__titleSp price-list__titleSp--medium">ファンダイビング</th>
                  </tr>
              </thead>
              <tbody>
              <?php
                  $fun_fields = SCF::get_option_meta('price_options', 'fun_lists');
                  $row_count = 0; // Initialize row count
                  // First count all valid rows
                  foreach ($fun_fields as $fun_field) {
                      $fun_content = esc_html($fun_field['fun_content']);
                      $fun_subContent = esc_html($fun_field['fun_subContent']);
                      $fun_price = esc_html($fun_field['fun_price']);
                      if ($fun_content && $fun_subContent && $fun_price) {
                          $row_count++; // Increment for each valid entry
                      }
                  }

                  $first = true; // Flag for the first row
                  foreach ($fun_fields as $fun_field) {
                      $fun_content = esc_html($fun_field['fun_content']);
                      $fun_subContent = esc_html($fun_field['fun_subContent']);
                      $fun_price = esc_html($fun_field['fun_price']);
                      if ($fun_content && $fun_subContent && $fun_price) {
                          if ($first) {
                              // Use the counted rows for the rowspan value
                              echo '<tr><td rowspan="' . $row_count . '" class="price-list__titlePc u-desktopTable-cell">ファンダイビング</td>';
                              $first = false;
                          } else {
                              // No need to insert 'ファンダイビング' cell after the first
                              echo '<tr>';
                          }
                          echo '<td class="price-list__data">' . $fun_content . '<br class="u-mobile">' . $fun_subContent . '</td>';
                          echo '<td class="price-list__cost">&yen;' . number_format($fun_price) . '</td>';
                          echo '</tr>';
                      }
                  }
              ?>
              </tbody>
          </table>
      </div>
      <!--  end of ファンダイビング -->

      <!-- スペシャルダイビング -->
      <div id="specialdiving" class="page-price__table">
          <table class="price-list">
              <thead class="price-list__head u-mobile">
                  <tr>
                      <th colspan="3" class="price-list__titleSp price-list__titleSp--long">スペシャルダイビング</th>
                  </tr>
              </thead>
              <tbody>
              <?php
                  $special_fields = SCF::get_option_meta('price_options', 'special_lists');
                  $row_count = 0; // Initialize row count
                  // First, count all valid rows
                  foreach ($special_fields as $special_field) {
                      $special_content = esc_html($special_field['special_content']);
                      $special_subContent = esc_html($special_field['special_subContent']);
                      $special_price = esc_html($special_field['special_price']);
                      if ($special_content && $special_subContent && $special_price) {
                          $row_count++; // Increase row count for each valid entry
                      }
                  }

                  $first = true; // Flag to indicate the first row
                  foreach ($special_fields as $special_field) {
                      $special_content = esc_html($special_field['special_content']);
                      $special_subContent = esc_html($special_field['special_subContent']);
                      $special_price = esc_html($special_field['special_price']);
                      if ($special_content && $special_subContent && $special_price) {
                          if ($first) {
                              // Use the counted rows for the rowspan value
                              echo '<tr><td rowspan="' . $row_count . '" class="price-list__titlePc u-desktopTable-cell">スペシャルダイビング</td>';
                              $first = false;
                          } else {
                              // No need to insert 'スペシャルダイビング' cell after the first
                              echo '<tr>';
                          }
                          echo '<td class="price-list__data">' . $special_content . '<br class="u-mobile">' . $special_subContent . '</td>';
                          echo '<td class="price-list__cost">&yen;' . number_format($special_price) . '</td>';
                          echo '</tr>';
                      }
                  }
              ?>
              </tbody>
          </table>
      </div>
      <!-- end of スペシャルダイビング -->

    </div>
  </div>

<?php get_footer(); ?>