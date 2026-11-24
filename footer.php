<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-brand">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
       <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        <span class="footer-wordmark">RATELIER</span>
      </a>
    </div>

    <div class="footer-hours">
      <p>Mon - Thu: 9:00 - 18:00</p>
      <p>Fri - Sat: 10:00 - 21:00</p>
    </div>

    <div class="footer-nav">
     <?php
      wp_nav_menu( array(
      'menu'      => 'Footer Menu 1',
      'menu_id'   => 'menu-footer',
      'container' => false,
      ) );
      ?>
    </div>

    <div class="footer-contact">
      <p><a href="mailto:max@mustermann.at">max@mustermann.at</a><br>
      <a href="mailto:maxina@musterfrau.at">maxina@musterfrau.at</a></p>
      <p><a href="tel:0123456789">0123456789</a></p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>An academic design project for &ldquo;Web Design &amp; Development&rdquo; at FH JOANNEUM. Ratelier is a fictional studio, no actual bookings or payments are processed.</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>