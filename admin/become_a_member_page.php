<?php

include('parts/addb.php');
?>
<!-- Page Header-->
<div class="page-header no-margin-bottom">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Donations</h2>
  </div>
</div>
<!-- Breadcrumb-->
<div class="container-fluid">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="/mashal/admin/#home_profile">Home</a></li>
    <li class="breadcrumb-item active">Donations</li>
  </ul>
</div>
<div class="container table-responsive py-5">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Description</th>
        <th>Delete</th>
      </tr>

    </thead>
    <tbody>
      <?php
      $body = mysqli_query($connect, "select * from member");
      $counter = mysqli_num_rows($body);
      $count = 0;
      while ($row = mysqli_fetch_assoc($body)) {

        $id = $row['id'];
        $menu = $row['name'];
        $title = $row['email'];
        $name = $row['desc'];


        $count++;
      ?>
        <tr>
          <th scope="row"><?php echo $count; ?></th>
          <td><?php echo $menu; ?></td>
          <td><?php echo $title; ?></td>
          <td><?php echo $name; ?></td>

          <td><a href="membership_delete.php?info=<?php echo $id; ?>" class="btn btn-info" role="button">Delete</a></td>
          <!-- <td><a href="membership_edite.php?info=<?php echo $id; ?>"  class="btn btn-info" role="button">Edite</a></td> -->



        </tr>
      <?php
      }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <th colspan='5' scope="row" class="btn btn-info" role="button">Total Records: </th>
        <th><?php echo $count; ?></th>
      </tr>
    </tfoot>
  </table>
</div>