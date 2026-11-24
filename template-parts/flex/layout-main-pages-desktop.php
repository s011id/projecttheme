<?php
/**
 * Main Pages Desktop hero.
 */
$title = get_sub_field('title');
$image_id = get_sub_field('background_image');

$background_image = $image_id
  ? wp_get_attachment_image($image_id, 'full', false, [
    'class' => 'main-pages-desktop__image',
    'alt' => '',
    'aria-hidden' => 'true',
    'loading' => 'eager',
    'decoding' => 'async',
  ])
  : '';
?>
<div class="main-pages-desktop">
  <?php if ($background_image) : ?>
    <div class="main-pages-desktop__background" aria-hidden="true">
      <?php echo $background_image; ?>
    </div>
  <?php endif; ?>

  <?php if ($title) : ?>
    <div class="main-pages-desktop__content">
      <h1 class="main-pages-desktop__title"><?php echo esc_html($title); ?></h1>
    </div>
  <?php endif; ?>
</div>
