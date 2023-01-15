<?php

include('parts/addb.php');
include('parts/head.php');
// include('parts/header.php');


?>  

  

      <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
          <div class="row">
              
          <div class="col-lg-12">
              <div class="block">
                <div class="title"><strong>Menu Of The Web</strong></div>                 
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
                        <th>Menu</th>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Donate Button</th>
                       
                        <th>Edite</th>
                      </tr>

                    </thead>
                    <tbody>
<?php
$body = mysqli_query($connect,"select * from header");
$counter = mysqli_num_rows($body);
$count = 0;  
while($row = mysqli_fetch_assoc($body)) 
{

    $id = $row['id'];
    $menu = $row['menu'];
    $title = $row['title'];   
    $name = $row['name'];
    $donate = $row['donate'];

    
    $count++;
?>                         
                      <tr>
                        <th scope="row"><?php echo $count; ?></th>
                        <td><?php echo $menu; ?></td>
                        <td><?php echo $title; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $donate; ?></td>
                        
                        <!-- <td><a href="delete_list.php?info=<?php echo $uid; ?>" class="btn btn-info" role="button">Delete</a></td> -->
                        <td><a href="menu_edite.php?info=<?php echo $id ;?>"  class="btn btn-info" role="button">Edite</a></td>


                    
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
 