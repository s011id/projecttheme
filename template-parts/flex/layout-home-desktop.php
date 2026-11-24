<?php
/**
 * Home Desktop hero.
 */
$title = get_sub_field('title');
$image_id = get_sub_field('background_image');
?>
<div class="home-desktop">
  <?php if ($image_id) : ?>
    <div class="home-desktop__background" aria-hidden="true">
      <?php
      echo wp_get_attachment_image($image_id, 'full', false, [
        'class' => 'home-desktop__image',
        'alt' => '',
        'loading' => 'eager',
        'decoding' => 'async',
      ]);
      ?>
    </div>
  <?php endif; ?>

  <?php if ($title) : ?>
    <div class="home-desktop__content">
      <h1 class="home-desktop__title"><?php echo nl2br(esc_html($title)); ?></h1>
    </div>
  <?php endif; ?>
</div>
