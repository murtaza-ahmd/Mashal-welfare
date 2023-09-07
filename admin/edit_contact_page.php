<?php
include('parts/addb.php');
include('parts/head.php');
// include('parts/header.php');


?>
<?php

    $userid  = $_GET['info'];

    $testing = mysqli_query($connect,"select * from info where id='$userid'");
    while ($row = mysqli_fetch_assoc($testing)){
        $id = $row['id'];
        $address = $row['address'];
        $phone = $row['phone'];
        $email = $row['email'];
        $name = $row['name'];
        $open = $row['opening'];
        $design = $row['Designed'];
?>

<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
   
        <td>
            <img class="pt-0" style="height:60px; width:70px" src=''>
            <input type="file" name="image2">
        </td>
        </tr>
        <tr>
            <input type="text" name="id" value="<?php echo $id; ?>">
        </tr>
        <tr>
            <td><input type="text" name="address" value="<?php  echo $address; ?>"></td> 
        </tr>
        <tr>
            <td><input type="text" name="phone" value="<?php  echo $phone; ?>"></td> 
        </tr>
        <tr>
            <td><input type="email" name="email" value="<?php  echo $email; ?>"></td> 
        </tr>
        <tr>
            <td><input type="text" name="name" value="<?php  echo $name; ?>"></td> 
        </tr>
        <tr>
            <td><input type="text" name="open" value="<?php  echo $open; ?>"></td> 
        </tr>
        <tr>
            <td><input type="text" name="design" value="<?php  echo $design; ?>"></td> 
        </tr>
        <tr>
            <td><input type="submit" name="done" class="btn btn-primary" role="button" ></td>  
        </tr>
        
    </table>
 </form>

<?php
    }
?>