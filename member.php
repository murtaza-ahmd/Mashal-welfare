<?php
include('partials/db.php');
include('partials/head.php');
include('partials/header.php');


?>
<main id="main">
  <section id="book-a-table" class="book-a-table">
    <div class="container mt-3" data-aos="fade-up">

      <div class="section-header">
        <h2>Become a member</h2>
        <p>Be a part of our mission</p>
      </div>


      <div class="row g-0">
        <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>
        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
          <!-- form control start -->
          <form action="" method="post" role="form" class="p-5 mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>

            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Why do you want to join?"></textarea>
              <div class="validate"></div>
            </div>
            <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div> -->
            <div class="text-center"><button name="done" type="submit" class="btn btn-danger mt-4">Become a member</button></div>
          </form>
          <!-- form control ends -->
        </div><!-- End Reservation Form -->

      </div>

    </div>
  </section><!-- End Book A Table Section -->
  <?php
  if (isset($_POST['done'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mess = $_POST['message'];


    $result = mysqli_query($connect, "select * from member where name='$name' AND email='$email'");
    $count = mysqli_num_rows($result);


    if ($count > 0) {
      echo "name Already Exists...";
    } else {

      mysqli_query($connect, "insert into member values('','$name','$email','$phone','$mess')");
      echo "Record added...";
    }
  }
  ?>


</main>
<?php
include('partials/footer.php');
?>