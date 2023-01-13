<?php 

include('parts/addb.php');
include('parts/head.php');



  $userid = $_GET['info'];
  


$data = mysqli_query($connect,"select * from herosection where id='$userid'");
    while($fet = mysqli_fetch_assoc($data))
    {

    $id = $fet['id'];
    $image = $fet['image'];
    $title = $fet['title'];
    $desc = $fet['description'];

?>

 <form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td><img style="height:200px; width:220px" src='../assets/img/<?php echo $image; ?>'></td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>
        <tr>
            <input type="text" name="imageid" value="<?php echo $userid; ?>">
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
$connect = mysqli_connect('localhost','root','','mashal');
 if(isset($_POST['done']))
 {
     $id = $_POST['imageid'];
     $title = $_POST['title'];
   
     $des = $_POST['desc'];

        $imgname = $_FILES['image']['name']; 
        $imgtemp = $_FILES['image']['tmp_name'];
        $imgsize = $_FILES['image']['size'];
        $imgtype = $_FILES['image']['type']; 

    
            if($_FILES['image']['error'] === UPLOAD_ERR_OK)
            {
                $dir = "upload/";
                $path = $dir.basename($imgname);

                if(move_uploaded_file($imgtemp,$path))
                {
                    echo "IMage selected";
            
                    $upload = mysqli_query($connect,"update herosection set title='$title',image='$imgname', description='$des' where id='$userid'");
                    echo "Image Record Has been Updated";
                    header('location:home.php') ;  
                }
                else
                {
                    echo "Image upload Eror";
                }

                 
            }
            else
            {

                $upload=mysqli_query($connect,"update herosection set title='$title', description='$des' where id='$userid'");
                echo "Text Record Has been Updated";

                echo "IMage not selected";
                header('location:home.php');
                
                
            }

    
    }


   

 
 ?>
