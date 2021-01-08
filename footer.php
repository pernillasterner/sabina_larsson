<div class="awards">
    <img src="<?php echo wp_get_attachment_image_url(305); ?>">
    <img src="<?php echo wp_get_attachment_image_url(306); ?>">
  </div>
  <footer class="site-footer">
    <div class="container">
      <div class="site-footer__info group">
        <div class="main-info">
          <div id="contact" class="contact-info">
            <h3>kontakt</h3>
            <a class="mailto" href = "mailto: sabina@kontakt.se">sabina@kontakt.se</a>
            <ul class="social-icons">
              <li><a href="https://www.yogaalliance.org/TeacherPublicProfile?tid=265555" target="_blank"><i class="fas fa-infinity"></i></a></li>
              <li><a href="https://www.instagram.com/sabinalarssonyoga" target="_blank"><i class="fab fa-instagram"></i></i></a></li>
              <li><a href="https://www.facebook.com/SabinaLarssonYoga/" target="_blank"><i class="fab fa-facebook"></i></i></a></li>
             </ul>
          </div>
          <div class="logo-sabina-larsson">
            <a href="<?php echo home_url(); ?>"><img src="https://cdn.freebiesupply.com/logos/large/2x/50x50-logo-black-and-white.png" alt=""></a>
          </div>
          <div class="newsletter">
            <form action="">
              <h3>nyhetsbrev</h3>
              <input type="text" placeholder="Din e-post adress" name="mail" required>
              <input type="submit" value="SIGNA UPP">
          </form>
          </div>
        </div>
      </div>
      <div class="site-footer__copyrights">
        <p class="copyrights">© <?php echo date('Y')?> Sabina Larsson. All rights reserved</p>
        <!-- <p class="made-by">by Pernilla Sterner</p> -->
      </div>
    </div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>