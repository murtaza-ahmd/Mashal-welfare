<?php
include('parts/addb.php');
include('parts/head.php');
// include('parts/header.php');


?>

<div class="page-header no-margin-bottom">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Contact Me</h2>
    <h3>contact paage ki edite pate dy rta</h3>
  </div>
</div>
<!-- Breadcrumb-->
<div class="container-fluid">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="/mashal/admin/#contact">Contact</a></li>
    <li class="breadcrumb-item active">Update</li>
  </ul>
</div>

<div class="container table-responsive py-5">
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">iD</th>
        <th colspan="0" scope="col">Name</th>
        <th colspan="0" scope="col">E-mail</th>
        <th scope="col">Opening</th>
        <th scope="col">Description</th>
        <th scope="col">Edite</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php
      $body = mysqli_query($connect, "select * from info");
      $counter = mysqli_num_rows($body);
      $count = 0;
      while ($row = mysqli_fetch_assoc($body)) {

        $id = $row['id'];
        $address = $row['address'];
        $phone = $row['phone'];
        $email = $row['email'];
        $name = $row['name'];
        $service = $row['opening'];
 

        $count++;
      ?>
        <tr>
          <th scope="row"><?php echo $count; ?></th>

          <td><?php echo $name; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $service; ?></td>
          <td><?php echo $address; ?></td>
          <!-- <td><a href="image_delete_list.php?info=<?php echo $id; ?>" class="btn btn-primary" role="button">Delete</a></td> -->
          <td><a href="edite_contact_page.php?info=<?php echo $id; ?>" class="btn btn-primary" role="button">Edit</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>