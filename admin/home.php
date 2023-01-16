<?php
include('parts/addb.php');
include('parts/head.php');
include('parts/header.php');

//  menus active kawal de home double click ki masla da aw div ki masla da
?>

<div class="d-flex align-items-stretch">
  <!-- Sidebar Navigation-->
  <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Murtaza Ahmad</h1>
        <p>Admin</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled sidebar_menu">
      <li class="active"><a href="home_profile.php"> <i class="icon-padnote"></i>Home</a></li>
      <li><a href="donation.php"> <i class="icon-home"></i>Donations </a></li>
      <li><a href="membership.php"> <i class="icon-grid"></i>Membership </a></li>
      <li><a href="update_web_info.php"> <i class="fa fa-bar-chart"></i>Update Web info </a></li>

      <li><a href="gallery.php"> <i class="icon-padnote"></i>update Gallery </a></li>
      <li><a href="become_a_member_page.php"> <i class="icon-padnote"></i>Become a member</a></li>
      <li><a href="about.php"> <i class="icon-padnote"></i>About</a></li>
      <li><a href="contact_page.php"> <i class="icon-padnote"></i>Contact Us</a></li>

      <li><a href="admin_setting_form.php"> <i class="icon-padnote"></i>Admin setting </a></li>
      <li><a href="login.php"> <i class="icon-logout"></i>Login page </a></li>
    </ul>

  </nav>
  <!-- Sidebar Navigation end-->
  <div class="page-content">
  </div>
  <?php

  include('parts/footer.php');

  ?>