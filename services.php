<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php
include("style.php");
?>
<title>Services - Flyrich travel and leisure</title>
</head>
<body>

    <!----------------------------------header start------------------------------------>

    <?php include("content/navbar.php") ?>

    <!-- --------------------------------home start---------------------------------- -->

    <!-- -------------------------services start--------------------------- -->

    <section class="services service-top">
        <div class="container">
            <h6 class="fw-bold subhead-color text-center">Services</h6>
            <div class="d-flex text-center justify-content-center">
                <h3 class="fw-bold head-color">Explore Our Services</h3>
                <i class="bi bi-airplane flight ms-2"></i>
            </div>
            <div class="service-contents">
                <div class="row justify-content-center">
                <?php
                    $sql = "select * from tbl_service";
                    $run = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($run)){
                        $id = $row["id"];
                        $title = $row["title"];
                        $description = $row["description"];                
                        $long_description = $row["long_description"];
                        $img = $row["img"];                                                               
                    ?>
                    <div class="col-lg-3 bottom-margin">
                        <div class="service-card float">
                            <h5 class="head-color fw-bold text-center"><?php echo $title ?></h5>
                            <div class="card mt-2" style="width: 18rem;">
                                <img src="admin/assets/images/service/<?php echo $img ?>" class="card-img-top" alt="service-card image">
                                <div class="card-body">                                 
                                    <p class="card-text para-color"><?php echo $description ?></p>
                                    <a href="service_details.php?id=<?php echo $id ?>" class="text-center subhead-color fw-bold">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------services end----------------------------->

      <?php include("footer.php") ?>

    <!---------------------------footer start----------------------------->

    <!---------------------------footer end----------------------------->

    <?php include("content/script.php") ?>
  </body>
</html>