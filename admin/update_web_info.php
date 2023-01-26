<?php

include('parts/addb.php');



?> 
<!-- Page Header-->
<div class="page-header no-margin-bottom">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Donations</h2>
  </div>
</div>
<!-- Breadcrumb -->
<div class="container-fluid">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="/mashal/admin/#update_web_info">Home</a></li>
    <li class="breadcrumb-item active">Web info</li>
  </ul>
</div>


<section class="no-padding-top no-padding-bottom">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-12">
        <div class="block">
          <div class="title"><strong>Menu Of The Web</strong></div>
          <div class="table-responsive ">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>S.no</th>
                  <th>Menu</th>
                  <th>Title</th>
                  <th>Name</th>
                  <th>Donate Button</th>

                  <th>Edite</th>
                </tr>

              </thead>
              <tbody>
                <?php
                $body = mysqli_query($connect, "select * from header");
                $counter = mysqli_num_rows($body);
                $count = 0;
                while ($row = mysqli_fetch_assoc($body)) {

                  $id = $row['id'];
                  $menu = $row['menu'];
                  $title = $row['title'];
                  $name = $row['name'];
                  $donate = $row['donate'];


                  $count++;
                ?>
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $menu; ?></td>
                    <td><?php echo $title; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $donate; ?></td>

                    <!-- <td><a href="delete_list.php?info=<?php echo $uid; ?>" class="btn btn-info" role="button">Delete</a></td> -->
                    <td><a href="update_menu_edite.php?info=<?php echo $id; ?>" class="btn btn-info" role="button">Edite</a></td>



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
        </div>

      </div>
    </div>
</section>
