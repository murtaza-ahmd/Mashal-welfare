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
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="donation.php"> <i class="icon-home"></i>Donations </a></li>
                <li><a href="membership.php"> <i class="icon-grid"></i>Membership </a></li>
                <li ><a href="update_web_info.php"> <i class="fa fa-bar-chart"></i>Update Web info</a></li>
                <li  ><a href="home.php"> <i class="icon-padnote"></i>Home</a></li>
                <li><a href="gallery.php"> <i class="icon-padnote"></i>update Gallery </a></li>
                <li><a href="become_a_member_page.php"> <i class="icon-padnote"></i>Become a member</a></li>
                <li class="active"><a href="about.php"> <i class="icon-padnote"></i>About</a></li>
                <li><a href="contact_page.php"> <i class="icon-padnote"></i>Contact Us</a></li>
                
                <li><a href="admin_setting_form.php"> <i class="icon-padnote"></i>Admin setting </a></li>
                
                <li><a href="login.php"> <i class="icon-logout"></i>Login page </a></li>
        
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Update About</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid"> 
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="about.php">About</a></li>
            <li class="breadcrumb-item active">Updates</li>
          </ul>
        </div>

        <div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">iD</th>
      <th colspan="2" scope="col">Image</th>
      <th colspan="2" scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Edite</th>
    </tr>
  </thead> 
  <tbody class="text-center">
    <?php
  $body = mysqli_query($connect,"select * from about");
  $counter = mysqli_num_rows($body);
  $count = 0;  
  while($row = mysqli_fetch_assoc($body)) 
  {
    
    $id = $row['id'];
    $name = $row['aboutname']; 
    $title = $row['abouttitle'];
    $desc = $row['aboutdesc'];
    $desc = $row['aboutdesc'];
    $image1 = $row['aboutimage1'];
    $image2 = $row['aboutimage2'];
    $image3 = $row['aboutimage3'];
    $image4 = $row['aboutimage4'];
    
    $count++; 
    ?>   
    <tr>
      <th scope="row"><?php echo $count; ?></th>
      <td colspan="3" class="py-6 ">
        <img style="height:60px; width:70px" src='../assets/img/<?php echo $image1; ?>'>
        <img class="pt-0" style="height:60px; width:70px" src='../assets/img/<?php echo $image2; ?>'>
        <img class="pt-3" style="height:60px; width:70px" src='../assets/img/<?php echo $image3; ?>'>
        <img class="pt-3" style="height:60px; width:70px" src='../assets/img/<?php echo $image4; ?>'>
    </td>
      <td><?php echo $title; ?></td>
      <td><?php echo $desc; ?></td>
      <!-- <td><a href="image_delete_list.php?info=<?php echo $id; ?>" class="btn btn-primary" role="button">Delete</a></td> -->
      <td><a href="about_update.php?info=<?php echo $id ;?>" class="btn btn-primary" role="button">Edit</a></td>
    </tr>
    <?php
  }
  ?>
  </tbody>
</table>
</div>
</div>     




<?php
  include('parts/footer.php');
?>  