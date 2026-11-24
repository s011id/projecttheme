<?php
/**
 * Sign In form.
 */
$title = get_sub_field('title') ?: 'LOGIN';
$email_label = get_sub_field('email_label') ?: 'Email';
$password_label = get_sub_field('password_label') ?: 'Password';
$submit_label = get_sub_field('submit_label') ?: 'Submit';
$redirect = is_user_logged_in() ? home_url('/') : '';
?>
<div class="sign-in">
  <div class="sign-in__form-wrap">
    <?php if ($title) : ?>
      <h1 class="sign-in__title"><?php echo esc_html($title); ?></h1>
    <?php endif; ?>

    <?php
    wp_login_form([
      'echo' => true,
      'redirect' => $redirect ?: home_url('/'),
      'label_username' => $email_label,
      'label_password' => $password_label,
      'label_remember' => '',
      'label_log_in' => $submit_label,
      'id_username' => 'sign-in-email',
      'id_password' => 'sign-in-password',
      'id_submit' => 'sign-in-submit',
      'remember' => false,
      'value_username' => '',
      'value_remember' => false,
    ]);
    ?>
  </div>
</div>
