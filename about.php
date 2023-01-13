<?php
  include('partials/db.php');
  include('partials/head.php');
  include('partials/header.php');


?> 

<section id="hero" class="hero d-flex align-items-center section-bg">
           <!-- About Start -->
           <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
<?php
    $data = mysqli_query($connect,"select * from about");
    while($row = mysqli_fetch_assoc($data))
    {
        $about = $row['aboutname'];
        $title = $row['abouttitle'];
        $desc = $row['aboutdesc'];
        $image1 = $row['aboutimage1'];
        $image2 = $row['aboutimage2'];
        $image3 = $row['aboutimage3'];
        $image4 = $row['aboutimage4'];
        $volunteer = $row['volunteer'];
        $regis = $row['registered'];
    


?>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="assets/img/<?php echo $image1; ?>">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="assets/img/<?php echo $image2; ?>" style="margin-top: 20%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75  wow zoomIn" data-wow-delay="0.5s" src="assets/img/<?php echo $image3; ?>" >
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-150 wow zoomIn" data-wow-delay="0.7s" src="assets/img/<?php echo $image4; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-danger text-start text-danger fw-bold"><?php echo $about; ?></h5>
                        <h1 class="mb-4"><?php echo $title; ?></h1>
                        <p class="mb-4">Welcome to <strong>Mashal welfare turst</strong> <?php echo $desc; ?></p>
                        <p class="mb-4">we have also top chefs in website. Users can take tips regarding recipes and give its own recipe to add in website.</p>
                        <p>Thank you All  </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-danger px-3">
                                    <h1 class="flex-shrink-0 display-5 text-danger mb-0" data-toggle="counter-up"><?php echo $volunteer; ?></h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Our Volunteer </p>
                                        <h6 class="text-uppercase mb-0">Members</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
<?php
    $member = mysqli_query($connect,"select * from member");
        $row2 = mysqli_fetch_assoc($member);
      $count =  mysqli_num_rows($member);
?>
                                <div class="d-flex align-items-center border-start border-5 border-danger px-3">
                                    <h1 class="flex-shrink-0 display-5 text-danger mb-0" data-toggle="counter-up"><?php echo $count; ?></h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Our Registered</p>
                                        <h6 class="text-uppercase mb-0">Members</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-danger py-3 px-5 mt-2" href="index.php#accordionExample">Read More</a>
                        <!-- <a class="btn btn-danger py-3 px-5 mt-2" href="assets/img/haseeb_final.pdf">Read More</a> -->
                    </div>
<?php

    }

?>
                </div>
            </div>
        </div>
                            <!-- About End -->

  </section><!-- End Hero Section -->

<?php
  include('partials/footer.php');
?> 
