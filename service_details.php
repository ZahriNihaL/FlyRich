<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php
include("style.php");
?>
<title>service-details - Flyrich travel and leisure</title>
</head>
<body>

    <!-- --------------------------------header start------------------------->

    <?php include("content/navbar.php") ?>

    <!-- -------------------------about-us start--------------------------- -->
  

            <section class="service-details">
                <div class="heading">
                <?php
                    $ser_id = $_GET["id"];
                    $sql = "select * from tbl_service where id='$ser_id'";
                    $run = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($run)) {                     
                        $id = $row["id"];
                        $title = $row["title"];
                        $description = $row["description"];
                        $long_description = $row["long_description"];
                        $img = $row["img"];
                        ?>
                    <h6 class="fw-bold text-white text-center">Service Details</h6>
                    <div class="d-flex justify-content-center">
                        <h3 class="fw-bold text-white"><?php echo $title ?></h3>
                        <i class="bi bi-airplane flight ms-2"></i>
                    </div>
                </div>

                <div class="container">
                    <div class="row service-details-contents">
                    
                        <div class="col-lg-6">
                            <img src="admin/assets/images/service/<?php echo $img ?>" alt="blog details image" class="img-fluid">
                        </div>
                        <div class="col-lg-6 service-details-texts">                        
                            <?php echo $long_description ?>                                           
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </section>

    <!-- -------------------------about-us end---------------------------->

    <!-- -------------------------footer start---------------------------->

    <?php include("footer.php") ?>

    <!-- -------------------------footer end--------------------------- -->

    <!-- -------------------------script start---------------------------->

    <?php include("content/script.php") ?>

     <!-- -------------------------script end----------------------------->

  </body>
</html>