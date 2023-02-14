<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">

<head>
    <?php
    include("style.php");
    ?>
    <?php
    $ser_id = $_GET["id"];
    $sql = "select * from tbl_blog where id='$ser_id'";
    $run = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($run);
    $id = $row["id"];
    $title = $row["title"];
    $description = $row["description"];
    $explanation = $row["explanation"];
    $date = $row["date"];
    $img = $row["img"];
    ?>
    <title><?php echo $title ?> - Flyrich travel and leisure</title>
</head>

<body>

    <!----------------------------------header start------------------------->

    <?php include("content/navbar.php") ?>

    <!---------------------------about-us start--------------------------- -->

    <section class="service-details">
        <div class="heading">

            <h6 class="fw-bold text-white text-center">Blog Details</h6>
            <div class="d-flex justify-content-center">
                <h3 class="fw-bold text-white"><?php echo $title ?> </h3>
                <i class="bi bi-airplane flight ms-2"></i>
            </div>
        </div>

        <div class="container">
            <div class="row service-details-contents justify-content-center">

                <div class="col-lg-12 text-center">
                    <img src="http://localhost/github/FlyRich/admin/assets/images/blog/<?php echo $img ?>" alt="blog details image" class="img-fluid">
                </div>
                <div class="col-lg-12 service-details-texts mt-5">
                    <p class="fw-bold mb-3 head-color"><i class="bi bi-calendar3 me-2"></i><?php echo $date ?></p>
                    <?php echo $explanation ?>
                </div>
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