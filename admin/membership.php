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
      <ul class="list-unstyled">
              <li ><a href="donation.php"> <i class="icon-home"></i>Donations </a></li>
              <li class="active"><a href="membership.php"> <i class="icon-grid"></i>Membership </a></li>
              <li ><a href="update_web_info.php"> <i class="fa fa-bar-chart"></i>Update Web info </a></li>
             
              <li><a href="home.php"> <i class="icon-padnote"></i>Home</a></li>
                <li><a href="gallery.php"> <i class="icon-padnote"></i>update Gallery </a></li>
                <li ><a href="become_a_member_page.php"> <i class="icon-padnote"></i>Become a member</a></li>
                <li><a href="about.php"> <i class="icon-padnote"></i>About</a></li>
                <li><a href="contact_page.php"> <i class="icon-padnote"></i>Contact Us</a></li>  

              <li><a href="admin_setting_form.php"> <i class="icon-padnote"></i>Admin setting </a></li>
              <li><a href="login.php"> <i class="icon-logout"></i>Login page </a></li>
      </ul>
      
    </nav>
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
      </div>

      <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
          <div class="row">
              
          <div class="col-lg-12">
              <div class="block">
                <div class="title"><strong>All Membership</strong></div>                 
                <div class="table-responsive "> 
                  <table class="table table-striped table-hover">
                    <thead>
<!-- <?php

// $data = mysqli_query($connect,"select * from header");

// while($fet = mysqli_fetch_assoc($data))
// {

 

?>                         -->
                      <tr>
                        <th>S.no</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Description</th>
                        <th>Delete</th>
                      </tr>

                    </thead>
                    <tbody>
<?php
$body = mysqli_query($connect,"select * from member");
$counter = mysqli_num_rows($body);
$count = 0;  
while($row = mysqli_fetch_assoc($body)) 
{

    $id = $row['id'];
    $menu = $row['name'];
    $title = $row['email'];   
    $name = $row['desc'];

    
    $count++;  
?>                         
                      <tr>
                        <th scope="row"><?php echo $count; ?></th>
                        <td><?php echo $menu; ?></td>
                        <td><?php echo $title; ?></td>
                        <td><?php echo $name; ?></td>
                        
                        <td><a href="membership_delete.php?info=<?php echo $id; ?>" class="btn btn-info" role="button">Delete</a></td>
                        <!-- <td><a href="membership_edite.php?info=<?php echo $id ;?>"  class="btn btn-info" role="button">Edite</a></td> -->


                    
                      </tr>
<?php
}
?>
                    </tbody>
                    <tfoot>
                        <tr>
                        <th colspan='5'scope="row" class="btn btn-info" role="button">Total Records: </th><th><?php echo $count; ?></th>
                        </tr>
                    </tfoot>
                  </table>
                </div>
              </div>

            </div>
        </div>
      </section>
     
      
      
      
<?php

include('parts/footer.php');

?>
 