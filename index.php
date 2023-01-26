<?php
  include('partials/db.php');
  include('partials/head.php');
  include('partials/header.php');


?>  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
<?php
  $hero =  mysqli_query($connect,"select * from herosection");
  while($sec = mysqli_fetch_assoc($hero))
  {
    $title = $sec['title'];
    $desc = $sec['description'];
    $image = $sec['image']; 
   
?>
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">MASHAAL <br> Welfare Trust</h2>
          <p data-aos="fade-up" data-aos-delay="100"><?php echo $desc; ?></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="" class="btn-book-a-table">Donate Now</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/<?php echo $image; ?>" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
<?php
  }
?>        
      </div>
    </div>
  </section><!-- End Hero Section -->
  <!-- <span class="d-flex  section-bg   border-bottom border-3 border-danger px-3">
    <h3 hidden>ddd</h3></span> -->
  
  <div class="container-fluid  section-bg ">
    <div class="row">
      <div class="col-lg-8 col-sm-8 offset-2">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="assets/img/gallery-1.JPG" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-danger">First slide label</h5>
        <p class="text-danger">Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/gallery-2.JPG" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-danger">Second slide label</h5>
        <p class="text-danger">Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/gallery-3.JPG" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-danger">Third slide label</h5>
        <p class="text-danger">Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon text-danger" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>     
      </div>
    </div>
  </div>

  

<!-- overview start -->
  
<div class="d-grid gap-1 mt-3 col-6 mx-auto">
  <!-- <button class="btn btn-danger" type="button">Button</button> -->
    <a class="btn  btn-danger" href="assets/img/haseeb_final.pdf">Overview</a>
  <!-- <button class="btn btn-primary" type="button">Button</button> -->
</div>

  <!-- <a class="btn btn-danger mt-5   py-3 px-5 mt-2" style="margin-left: 650px;" href="assets/img/haseeb_final.pdf">Overview</a> -->
  <div class="accordion mt-3 " id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Programmatic Areas
      </button>
    </h2>
    
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, enim. <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Objectives
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, enim. <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header " id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Future Strategic Plan
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, enim. <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
          <!-- overview ends -->
<?php
  include('partials/footer.php');
?>