<?php
/**
 * About quote.
 */
$quote = get_sub_field('quote');
$attribution = get_sub_field('attribution');
?>
<div class="about-quote">
  <?php if ($quote) : ?>
    <blockquote class="about-quote__text">
      <?php echo nl2br(esc_html($quote)); ?>
    </blockquote>
  <?php endif; ?>

  <?php if ($attribution) : ?>
    <p class="about-quote__attribution"><?php echo esc_html($attribution); ?></p>
  <?php endif; ?>
</div>
