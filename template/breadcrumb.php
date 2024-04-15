<!--パンくず条件分岐 -->
<?php if (is_404()): ?>
  <div class="breadcrumb breadcrumb--white">
    <div class="inner">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>
<?php else: ?>
  <div class="breadcrumb">
    <div class="inner">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>
<?php endif; ?>
