<?php
  include('partials/db.php');
  include('partials/head.php');
  include('partials/header.php');


?> 


<section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">
 
        <div class="section-header mt-3">
          <h2>gallery</h2> 
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <?php
  $sel = mysqli_query($connect,"select * from gallery");
  while($data = mysqli_fetch_assoc($sel))
  {
    $img = $data['image']; 
    ?>
            <div class="swiper-slide">
              <a class="glightbox" data-gallery="images-gallery" href="assets/img/<?php echo $img?>">
                <img src="assets/img/<?php echo $img;?>" class="img-fluid" alt="">
              </a>
            </div>

  <?php
  }
  ?>    

           
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->



<?php
 
  include('partials/footer.php');


?> 
