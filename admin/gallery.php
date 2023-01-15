<?php
  include('parts/addb.php');
  include('parts/head.php');
  // include('parts/header.php');


?>  

<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      
      <!-- Sidebar Navigation end-->
      <div class="page-content">
       

        <div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover" >
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
  $body = mysqli_query($connect,"select * from gallery");
  $counter = mysqli_num_rows($body);
  $count = 0;  
  while($row = mysqli_fetch_assoc($body)) 
  {
    
    $id = $row['id'];
    $image = $row['image'];
    
    $count++;
    ?>  
    <tr>
      <th scope="row"><?php echo $count; ?></th>
      <td><img style="height:60px; width:70px" src='../assets/img/<?php echo $image; ?>'></td>
      <td><a href="image_delete_list.php?info=<?php echo $id; ?>" class="btn btn-primary" role="button">Delete</a></td>
      <td><a href="image_edite_list.php?info=<?php echo $id ;?>" class="btn btn-primary" role="button">Edite</a></td>
    </tr>
    <?php
  }
  ?>
  </tbody>
</table>
</div>
</div>  
</div>  
<?php

include('parts/footer.php');

?>
 