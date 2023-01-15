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
          <h1 class="h5">Murtaza Ahmad</h1>
          <p>Admin</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled sidebar_menu">
              <li class="active" >
                <a id='home' href="home.php"> <i class="icon-padnote"></i>Home</a></li>
              <li ><a href="donation.php"> <i class="icon-home"></i>Donations </a></li>
              <li><a href="membership.php"> <i class="icon-grid"></i>Membership </a></li>
              <li ><a href="update_web_info.php"> <i class="fa fa-bar-chart"></i>Update Web info </a></li>
             
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
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Update Home</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid"> 
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="donation.php">Home</a></li>
            <li class="breadcrumb-item active">Updates</li>
          </ul>
        </div>

        <div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">iD</th>
      <th scope="col">Image</th>
      <th scope="col">Edite</th>
      <th scope="col">Delete</th>
    </tr>
  </thead> 
  <tbody class="text-center">
    <?php
  $body = mysqli_query($connect,"select * from herosection");
  $counter = mysqli_num_rows($body);
  $count = 0;  
  while($row = mysqli_fetch_assoc($body)) 
  {
    
    $id = $row['id'];
    $title = $row['title']; 
    $image = $row['image'];
    $desc = $row['description'];
    
    $count++;
    ?>   
    <tr>
      <th scope="row"><?php echo $count; ?></th>
      <td><img style="height:60px; width:70px" src='../assets/img/<?php echo $image; ?>'></td>
      <td><?php echo $title; ?></td>
      <td><?php echo $desc; ?></td>
      <!-- <td><a href="image_delete_list.php?info=<?php echo $id; ?>" class="btn btn-primary" role="button">Delete</a></td> -->
      <td><a href="home_update.php?info=<?php echo $id ;?>" class="btn btn-primary" role="button">Edit</a></td>
    </tr>
    <?php
  }
  ?>
  </tbody>
</table>
</div>
</div>  
<!-- style="height:60px; width:70px"  -->
<?php

include('parts/footer.php');

?>
