<?php 

include('parts/addb.php');
include('parts/head.php');



  $userid = $_GET['info'];
  

$data = mysqli_query($connect,"select * from about where id='$userid'");
    while($row = mysqli_fetch_assoc($data))
    {
 
        $id = $row['id'];
        $name = $row['aboutname']; 
        $title = $row['abouttitle'];
        $desc = $row['aboutdesc'];
        $image1 = $row['aboutimage1'];
        $image2 = $row['aboutimage2'];
        $image3 = $row['aboutimage3'];
        $image4 = $row['aboutimage4'];

?>

 <form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
        <td colspan="3" class="py-6 ">
            <img style="height:60px; width:70px" src='../assets/img/<?php echo $image1; ?>'>
            <input type="file" name="image1">
        </td>    
        <td>
            <img class="pt-0" style="height:60px; width:70px" src='../assets/img/<?php echo $image2; ?>'>
            <input type="file" name="image2">
        </td>
        <td>
            <img class="pt-3" style="height:60px; width:70px" src='../assets/img/<?php echo $image3; ?>'>
            <input type="file" name="image3">
        </td>
        <td>
            <img class="pt-3" style="height:60px; width:70px" src='../assets/img/<?php echo $image4; ?>'>
            <input type="file" name="image4">
        </td>
        
        </tr>
        <tr>
            <input type="text" name="imageid" value="<?php echo $userid; ?>">
        </tr>
        <tr>
            <td><input type="text" name="name" value="<?php  echo $name; ?>"></td> 
        </tr>
        <tr>
            <td><input type="text" name="title" value="<?php  echo $title; ?>"></td> 
        </tr>
        <tr>
            <td><textarea type="text" name="desc"><?php  echo $desc; ?></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="done" class="btn btn-primary" role="button" ></td>  
        </tr>
        
    </table>
 </form>
 <?php
    }
 ?>
<?php 

 if(isset($_POST['done']))
 {
     $id = $_POST['imageid'];
     $title = $_POST['name'];
     $title = $_POST['title'];
   
     $des = $_POST['desc'];

        $imgname1 = $_FILES['image1']['name']; 
        $imgtemp = $_FILES['image1']['tmp_name'];
        $imgsize = $_FILES['image1']['size'];
        $imgtype = $_FILES['image1']['type']; 

        $imgname2 = $_FILES['image2']['name']; 
        $imgtemp = $_FILES['image2']['tmp_name'];
        $imgsize = $_FILES['image2']['size'];
        $imgtype = $_FILES['image2']['type'];

        $imgname3 = $_FILES['image3']['name']; 
        $imgtemp = $_FILES['image3']['tmp_name'];
        $imgsize = $_FILES['image3']['size'];
        $imgtype = $_FILES['image3']['type'];

        $imgname4 = $_FILES['imag4']['name']; 
        $imgtemp = $_FILES['image4']['tmp_name'];
        $imgsize = $_FILES['image4']['size'];
        $imgtype = $_FILES['image4']['type']; 

        // image not updated
    
            if($_FILES['image']['error'] === UPLOAD_ERR_OK)
            {
                $dir = "upload/";
                $path = $dir.basename($imgname);

                if(move_uploaded_file($imgtemp,$path))
                {
                    echo "IMage selected";
            
                    $upload = mysqli_query($connect,"update about set aboutname='$name',abouttitle='$title',aboutdesc='$des',image1='$imgname1',image2='$imgname2',image3='$imgname3',image4='$imgname4' where id='$userid'");
                    echo "Image Record Has been Updated";
                    header('location:about.php') ; 
                    exit;
                }
                else
                {
                    echo "Image upload Eror";
                }

                 
            }
            else
            {

                $upload=mysqli_query($connect,"update about set aboutname='$name',abouttitle='$title',aboutdesc='$des' where id='$userid'");
                echo "Text Record Has been Updated";
                echo "IMage not selected";
                header('location:about.php');
                exit;
                
                
            }

    
    }


   

 
 ?>
