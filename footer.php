<?php
/**
 * Footer for BlankSlate Child Theme
 */
?>
<footer role="contentinfo">
  <div class="footer-links">
    <a href="https://businessmarket.network/help-desk/">Help Desk</a>
    <a href="https://businessmarket.network/contact-us/">Contact Us</a>
    <a href="https://businessmarket.network/advertise-with-us/">Advertise with Us</a>
    <a href="https://businessmarket.network/magazine/">Magazine</a>
    <a href="https://businessmarket.network/terms-and-conditions/">Terms and Conditions</a>
    <a href="https://businessmarket.network/privacy-policy/">Privacy Policy</a>
    <a href="https://businessmarket.network/refund-policy/">Refund Policy</a>
    <a href="https://businessmarket.network/product-listing-policy/">Product Listing Policy</a>
  </div>
  <p>&copy; <?php echo esc_html( date('Y') ); ?> <?php echo esc_html( get_bloginfo('name') ); ?>. <?php esc_html_e( 'All rights reserved.', 'blankslate-child' ); ?></p>
  <p class="footer-care"><?php esc_html_e( 'Invictus International Consulting (USA–INDIA)', 'blankslate-child' ); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>