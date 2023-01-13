<?php 

include('parts/addb.php');
include('parts/head.php');



  $userid = $_GET['info'];


$res =  mysqli_query($connect,"select * from header where id='$userid'");
    while($fet = mysqli_fetch_assoc($res))
    {
          
    }
     
    

?>
   
<?php 
 if(isset($_POST['done']))
 {
    $imageid = $_POST['imageid'];
    $fullname = $_POST['imagename'];



    mysqli_query($connect,"update gallery set image='$fullname' where id='$imageid'");
    header("location:gallery.php");
 }
 ?>
 
<!-- <form action="" method="post">
    <label for="">image</label><input type="file" name="imagename" value="<?php echo $name; ?>">
    <input type="hidden" name="imageid" value="<?php echo $userid; ?>">
    <input type="submit" name="done" value="update">
    <button type="submit" name="done" class="btn btn-primary" role="button">Update</button>
</form> -->
