<div id="opener__menu">

<?php
wp_nav_menu(
  array(
    'theme_location'  => 'primary',
    'container_class' => 'navbar-collapse',
    'container_id'    => 'navbar-mobile',
    'menu_class'      => 'navbar-nav ml-auto',
    'fallback_cb'     => '',
    'menu_id'         => 'main-menu',
    'depth'           => 2,
    'walker'          => '',
  )
);
?>

<?php if ( is_active_sidebar( 'lang-switcher-mobile' ) ) : ?>
  <div id="lang-switcher" class="lang-switcher-mobile">
    <?php dynamic_sidebar( 'lang-switcher-mobile' ); ?>
  </div>
<?php endif; ?>
<div class="container">
  <div class="row">
    <div class="col-6 col-sm-6 col-md-6 col-lg-6 button__tel--wrapper">
      <a href="tel:0041313299595" class="main-block__btn button__menumob"><?php esc_html_e( 'Telefon', 'kreuz-bern' ); ?></a>
    </div>
    <div class="col-6 col-sm-6 col-md-6 col-lg-6 button__email--wrapper">
      <a href="mailto:info@kreuzbern.ch" class="main-block__btn button__menumob"><?php esc_html_e( 'E-mail senden', 'kreuz-bern' ); ?></a>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 px-15 button__booking--wrapper">
      <button data-fancybox="dialog" data-src="#bookingbar-content" class="main-block__btn main-block__btn--dark button__menumob"><?php esc_html_e( 'BUCHEN', 'kreuz-bern' ); ?></button>
    </div>
  </div>
</div>
</div>
