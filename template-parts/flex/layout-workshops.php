<?php
/**
 * Workshops hero.
 */
$title = get_sub_field('title');
$image_id = get_sub_field('background_image');
?>
<div class="workshops-hero">
  <?php if ($image_id) : ?>
    <div class="workshops__background" aria-hidden="true">
      <?php
      echo wp_get_attachment_image($image_id, 'full', false, [
        'class' => 'workshops__image',
        'alt' => '',
        'loading' => 'eager',
        'decoding' => 'async',
      ]);
      ?>
    </div>
  <?php endif; ?>

  <?php if ($title) : ?>
    <div class="workshops__content">
      <h1 class="workshops__title"><?php echo nl2br(esc_html($title)); ?></h1>
    </div>
  <?php endif; ?>
</div>
