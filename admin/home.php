<?php
include('parts/addb.php');
include('parts/head.php');
include('parts/header.php');

?>

<div class="d-flex align-items-stretch">
  <!-- Sidebar Navigation-->
  <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="../assets/img/admin.png" alt="..." class="img-fluid rounded-circle">404</div>
      <div class="title">
        <h1 class="h5">Admin</h1>
        <p>Panal</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus-->
    <span class="heading text-white blockquote">Menu</span>
    <ul class="list-unstyled sidebar_menu">
      <li class="active"><a href="home_profile.php"><i class="icon-home"></i> Home</a></li>
      <li><a href="donation.php"> <i class="fa fa-gittip"></i>Donations </a></li>
      <li><a href="membership.php"> <i class="fa fa-group" aria-hidden="true"></i></i>Membership </a></li>
      <li><a href="update_web_info.php"> <i class="fa fa-cog"></i>Update Web info </a></li>

      <li><a href="gallery.php"> <i class="icon-picture"></i>update Gallery </a></li>
      <li><a href="become_a_member_page.php"> <i class="fa fa-user-o" aria-hidden="true"></i></i>Become a member</a></li>
      <li><a href="about.php"> <i class="fa fa-book"></i>About</a></li>
      <li><a href="contact_page.php"> <i class="fa fa-mobile-phone"></i>Contact Us</a></li>

      <li><a href="admin_setting_form.php"> <i class="fa fa-cogs"></i>Admin setting </a></li>
      <li><a href="login.php"> <i class="icon-logout"></i>Login page </a></li>
    </ul>

  </nav>
  <!-- Sidebar Navigation end-->

  <!--donnot remove page content class -->
  <div class="page-content">
  </div>
  <?php

  include('parts/footer.php');

  ?>