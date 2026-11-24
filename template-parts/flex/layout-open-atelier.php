<?php
/**
 * Open Atelier hero.
 */
$title = get_sub_field('title');
$image_id = get_sub_field('background_image');
?>
<div class="open-atelier">
  <?php if ($image_id) : ?>
    <div class="open-atelier__background" aria-hidden="true">
      <?php
      echo wp_get_attachment_image($image_id, 'full', false, [
        'class' => 'open-atelier__image',
        'alt' => '',
        'loading' => 'eager',
        'decoding' => 'async',
      ]);
      ?>
    </div>
  <?php endif; ?>

  <?php if ($title) : ?>
    <div class="open-atelier__content">
      <h1 class="open-atelier__title"><?php echo nl2br(esc_html($title)); ?></h1>
    </div>
  <?php endif; ?>
</div>
