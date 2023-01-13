<?php

include('parts/addb.php');

$userid = $_GET['info'];



mysqli_query($connect,"delete from gallery where id='$userid'");

header("location:gallery.php");



?>