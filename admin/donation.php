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
               <li class="active"><a href="donation.php"> <i class="icon-home"></i>Donations </a></li>
                <li><a href="membership.php"> <i class="icon-grid"></i>Membership </a></li>
                <li ><a href="update_web_info.php"> <i class="fa fa-bar-chart"></i>Update Web info</a></li>
                <li  ><a href="home.php"> <i class="icon-padnote"></i>Home</a></li>
                <li><a href="gallery.php"> <i class="icon-padnote"></i>update Gallery </a></li>
                <li><a href="become_a_member_page.php"> <i class="icon-padnote"></i>Become a member</a></li>
                <li><a href="about.php"> <i class="icon-padnote"></i>About</a></li>
                <li ><a href="contact_page.php"> <i class="icon-padnote"></i>Contact Us</a></li>
                
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
<?php
  
  $data = mysqli_query($connect,"select * from donationmeber");
  
 $fet = mysqli_fetch_assoc($data);
  
?>              
            <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong><?php echo $fet['title']; ?></strong></div>                 
                  <div class="table-responsive "> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Full Name</th>
                          <th>Phone Number</th>
                          <th>E-mail</th>
                          <th>Amount</th>
                          <!-- <th>Delete</th>
                          <th>Edite</th> -->
                        </tr>
                      </thead>
                      <tbody>
<?php
  $body = mysqli_query($connect,"select * from donationmeber");
  $counter = mysqli_num_rows($body);
  $count = 0;  
  while($row = mysqli_fetch_assoc($body)) 
  {

      $uid = $row['id'];
      $name = $row['fullname'];
      $email = $row['email'];
      $phone = $row['phone'];
      $amount = $row['amount'];
  
      
      $count++;
?>                         
                        <tr>
                          <th scope="row"><?php echo $count; ?></th>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $phone; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $amount; ?></td>
                          
                          <!-- <td><a href="delete_list.php?info=<?php echo $uid; ?>" class="btn btn-info" role="button">Delete</a></td>
                          <td><a href="edite_list.php?info=<?php echo $uid ;?>"  class="btn btn-info" role="button">Edite</a></td> -->


                      
                        </tr>
<?php
  }
?>
                      </tbody>
                      <tfoot>
                          <tr>
                          <th colspan='4'scope="row">Total Records: </th><th><?php echo $count; ?></th>
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
   