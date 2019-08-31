<div id="footer">
  <div class="white">
    <div class="left">
      <h2>Contact Us</h2>
      <p class="number">(717) 442-4184</p>
      <p>info@eecontracting.com</p>
      <p>3435 Compass Rd., Gap, PA 17527</p>
      <p class="hours">Hours: Monday-Friday 7am-5pm</p>
    </div>
    <div class="right">
      <?php echo do_shortcode("[ninja_form id=1]"); ?>
    </div>
  </div>
  <div class="blue">
    <div class="top">
      <img class="logo" />
      <div class="contact">
        <span class="numbers">
          (717) 442-4814 | PAHIC# 017608
        </span>
        <?php wp_nav_menu(array('theme_location' => 'social', 'container' => '', 'menu_class' => 'social-menu')) ?>
      </div>
    </div>
    <div class="bottom">
      <?php wp_nav_menu(array('theme_location' => 'menu-1', 'container' => '', 'menu_class' => 'footer-menu')) ?>
      <span>Request a Complimentary Estimate</span>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>

</html>