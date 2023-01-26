<?php 

include('parts/addb.php');
include('parts/head.php');



  $userid = $_GET['info'];


$res =  mysqli_query($connect,"select * from header where id='$userid'");
    while($fet = mysqli_fetch_assoc($res))
    {
          $menu = $fet['menu'];
          $link = $fet['link'];
         
    
     
    

?>  
<form action="" method="post">
    <label for="">Menu</label><input type="text" name="menu" value="<?php echo $menu; ?>">
    <input type="text" name="link" value="<?php echo $link; ?>">
    <!-- <input type="submit" name="done" value="update"> -->
    <button type="submit" name="done" class="btn btn-primary" role="button">Update</button>
</form>
     
<?php 
    }
 if(isset($_POST['done']))
 {
   $menu1 = $_POST['menu'];
   $link1 = $_POST['link'];



    mysqli_query($connect,"update header set menu='$menu1', link='$link1' where id='$userid'");
    header("location:update_web_info.php");
 }
 ?>
 

