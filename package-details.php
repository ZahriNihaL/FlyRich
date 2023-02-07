<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">

<head>
  <?php
  include("style.php");
  ?>
  <title>blog-details - Flyrich travel and leisure</title>
</head>

<body>
  <!-- --------------------------------header start------------------------->

  <?php include("content/navbar.php") ?>

  <!-- -------------------------about-us start--------------------------- -->

  <?php
  $pack_id = $_GET["id"];
  $sql = "select * from tbl_package where id='$pack_id'";
  $run = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($run);
  $id = $row["id"];
  $title = $row["title"];
  $description = $row["description"];
  $long_description = $row["long_description"];
  $amount = $row["amount"];
  $days = $row["days"];
  $img = $row["img"];
  ?>l̥

  <section class="blog-details-explain">
    <div class="container">
      <h6 class="fw-bold subhead-color text-center">Package Details</h6>
      <div class="d-flex text-center justify-content-center">
        <h3 class="fw-bold head-color"><?php echo $title ?></h3>
        <i class="bi bi-airplane flight ms-2"></i>
      </div>
      <div class="image-carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg-3">
                  <img src="images/blog/blog-details/1.jpg" alt="blog-details-explain image" class="img-fluid">
                </div>
                <div class="col-lg-3">
                  <img src="images/blog/blog-details/2.jpg" alt="blog-details-explain image" class="img-fluid">
                </div>
                <div class="col-lg-3">
                  <img src="images/blog/blog-details/3.jpg" alt="blog-details-explain image" class="img-fluid">
                </div>
                <div class="col-lg-3">
                  <img src="images/blog/blog-details/4.jpg" alt="blog-details-explain image" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row blog-image-details">
          <div class="col-lg-12">
            <h5 class="fw-bold head-color"><?php echo $title ?></h5>
            <p class="para-color"><?php echo $long_description ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- -------------------------about-us end--------------------------- -->

  <!-- -------------------------footer start--------------------------- -->

  <?php include("footer.php") ?>

  <!-- -------------------------footer end--------------------------- -->

  <!-- -------------------------script start---------------------------->

  <?php include("content/script.php") ?>

  <!-- -------------------------script end--------------------------- -->
  
</body>

</html>