<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?> - Export-Import Insights & Ads">
  <meta property="og:description" content="<?php echo esc_attr(get_bloginfo('description')); ?> - Book ads in Asia's largest EXIM magazine or subscribe for leads and trends.">
  <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
  <meta property="og:type" content="website">
</head>
<body <?php body_class(); ?>>
<header role="banner">
  <div class="header-container">
    <!-- Logo on the left -->
    <div class="logo" style="color: #2036f5;">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration: none;">BMN</a>
    </div>
    <!-- Hamburger (mobile) -->
    <button class="hamburger" aria-expanded="false" aria-controls="primary-menu" aria-label="Toggle navigation menu">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>
    <!-- Primary nav (hard-coded) -->
    <nav aria-label="Primary Navigation">
      <ul id="primary-menu" class="nav-menu">
        <li><a href="#">Marketplace</a></li>
        <li><a href="#">Export Leads</a></li>
        <li><a href="https://businessmarket.network/advertise-with-us/">Advertise with Us</a></li>
        <li><a href="https://businessmarket.network/advertise-with-us/">Magazine</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#pricing">Pricing</a></li>
        <li><a href="#">Sign In</a></li>
        <li><a href="#">Add Product</a></li>
      </ul>
    </nav>
  </div>
  <!-- Underline accent -->
  <div class="logo-line"></div>
</header>