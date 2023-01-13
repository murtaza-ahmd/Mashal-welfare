<?php

    $connect = mysqli_connect('localhost','root','','mashal');

?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
<?php
  $men = mysqli_query($connect,"select * from header");
  while($fet = mysqli_fetch_assoc($men))
  {
    
     $name = $fet['name'];
     $link = $fet['link'];
     $member = $fet['member'];
     $title = $fet['title'];
     $logo = $fet['logo'];
  
?>
      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img id="logo" src="<?php echo $logo; ?>" alt=""> 
        <h1><span><?php echo $name; ?></span></h1>
      </a>
      <?php 
    }
    ?>
      <nav id="navbar" class="navbar">
        <ul>
<?php
  $fix = mysqli_query($connect,"select * from header");
  while($col = mysqli_fetch_assoc($fix))
  {
     $menu = $col['menu'];
     $link = $col['link'];
     
  
?>          
          <li><a href="<?php echo $link; ?>"><?php echo $menu; ?></a></li>
          
<?php
  }
?>
        </ul>
      </nav><!-- .navbar -->

    
    
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
     <a href="donate.php" class="btn-book-a-table">Donate Now</a>
    </div>
  </header><!-- End Header -->