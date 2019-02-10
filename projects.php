<div class="row" style="margin-top: 10px;">
  <?php 
    error_reporting(E_ALL ^ E_WARNING); 
    $con=mysqli_connect("localhost","root","","test");
    if (!$con) {
    # code...
    die("Not Connected");
  }
  $sql="Select * from project_tbl";
  $result=$con->query($sql);
    foreach ($result as $val) {
      # code...
    //}
  ?>
  <div class="col-md-4" >
    <!-- Card -->
    <div class="card">

      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="<?php echo $val['image'];?>" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Card content -->
      <div class="card-body">

        <!-- Title -->
        <h4 class="card-title"><?php echo $val['project_name'];?></h4>
        <!-- Text -->
        <p class="card-text"><?php echo $val['project_desc'];?></p>
        <!-- Button -->
        <!-- <a href="#" class="btn btn-primary">Button</a> -->

      </div>

    </div>
    <!-- Card -->    

  </div>
  <?php
    }
  ?>
  
</div>


