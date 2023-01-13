  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
<?php
  $set = mysqli_query($connect,"select * from info");
  while($data = mysqli_fetch_assoc($set))
  {
    $address =  $data['address'];
    $phone =  $data['phone'];
    $email =  $data['email'];
    $name =  $data['name'];
    $open =  $data['opening'];
    $design =  $data['Designed'];
  
?>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              
               <?php echo $address; ?>
              <br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> <?php echo $phone; ?><br>
              <strong>Email:</strong> <?php echo $email; ?><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <?php echo $open;?>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/Mashaal-welfare-trust-101351422447359/?__cft__[0]=AZWLtaP2f5a8Nbpx6MHrXluaE5ZTn9GO6JlmMtWzs9D6FGXugKyfl1YHCb_Ie_1tLuiXsGHgztak6ZFfApSQH2TAMhyebpMG0MPemfSFvoVk4MJ3R3LaojzfP3hQNdUrb-g1HpI7CEhcCFP9tTunWvRrQe_sHabuaMuwZx7PswoSPIxBfFrPPi0IiQ1514aJmyI&amp;__tn__=-UC%2CP-R" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/mashaalwelfaretrust.7?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
<?php
  }
?>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo $design;   ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a><?php echo $design;?></a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>