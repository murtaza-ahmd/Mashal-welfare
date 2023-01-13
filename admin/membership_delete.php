<?php

include('parts/addb.php');

$userid = $_GET['info'];



mysqli_query($connect,"delete from member where id='$userid'");

header("location:membership.php");



?>