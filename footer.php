<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 footer-contact">
          <h3>DoraymonIT<span>.</span></h3>
          <p>
            At Home <br />
            Online Work ,Marrakech .<br />
            Morocco <br /><br />
            <strong>Phone : </strong>
            <a href="tel:+212629613964">+2126-29-61-39-64</a><br />
            <strong>Email : </strong>
            <a href="mailto:bendrimou@gmail.com">bendrimou@gmail.com</a>
            <br />
          </p>
        </div>

        <!-- <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li>
              <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
            </li>
         <li>
              <i class="bx bx-chevron-right"></i>
              <a href="#">Terms of service</a>
            </li>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="#">Privacy policy</a>
            </li>
          </ul>
        </div> -->

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>My Services</h4>
          <ul>
            <li>
              <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
            </li>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="#">Web Development Apps</a>
            </li>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="#">Wordpress + WooCommerce</a>
            </li>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="#">Desktop Apps</a>
            </li>
            <li>
              <i class="bx bx-chevron-right"></i>
              <a href="#">Content writer</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Join My Newsletter</h4>
          <p>To receive advices , blogs and lasts works and others ..</p>
          <form action="forms/contact.php" method="post" role="form">
            <input type="email" name="email" placeholder="Your email here ..." /><input type="submit" value="Subscribe" name="subscribe" />
          </form>
          <br>
          <?php if (isset($_SESSION['subscribe'])) : ?>
            <div class="alert alert-success" role="alert" style="text-align: center;">
              <?php echo $_SESSION['subscribe'] ?> </div>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">
    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>DoraymonIT</span></strong>. All Rights Reserved <?php echo date('Y') ?>
      </div>
      <div class="credits">
        Designed by <a href="#">DoraymonIT .</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
      <a href="https://www.facebook.com/mario.a.gotze.5" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="https://www.instagram.com/doraymonit/" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="https://github.com/DoraymonIT/" class="github"><i class="bx bxl-github"></i></a>
      <a href="https://www.linkedin.com/in/ayoub-bendrimou" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer>