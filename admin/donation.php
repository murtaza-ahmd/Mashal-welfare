 <?php

  include('parts/addb.php');
  include('parts/head.php');
  // include('parts/header.php');


?>  

  

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
   