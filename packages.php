<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head> 
<?php
include("style.php");
?>
<title>Blog - Flyrich travel and leisure</title>
</head>
<body>
    <!-- --------------------------------header start------------------------>

    <?php include("content/navbar.php") ?> 

    <!-- -------------------------package start----------------------------->

   <section class="package package-margin">
    <div class="container">
        <h6 class="fw-bold subhead-color text-center">Packages</h6>
        <div class="d-flex justify-content-center">
            <h3 class="fw-bold head-color">Explore Our Packages</h3>
            <i class="bi bi-airplane flight ms-2"></i>
        </div>
        <div class="row package-details">
            <?php
            $sql = "select * from tbl_package";
            $run = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($run)){
                $id = $row["id"];
                $title = $row["title"];
                $description = $row["description"];                
                $amount = $row["amount"];
                $days = $row["days"];
                $img = $row["img"];                                                               
            ?>
            <div class="col-lg-3 mt-4">
                <div class="card float " style="width: 18rem;">
                    <div class="card-body">
                        <img src="admin/assets/images/package/<?php echo $id ?>/<?php echo $img ?>" class="card-img-top" alt="package image">
                        <div class="days">
                            <h6 class="text-white fw-bold text-center"><?php echo $amount ?></h6>
                        </div>
                        <h6 class="card-title fw-bold head-color mt-3"><?php echo $title ?></h6>
                        <p class="card-text para-color description"><?php echo $description ?></p>
                        <div class="d-flex justify-content-between">
                            <h5 class="subhead-color fw-bold"><?php echo $days ?></h5>
                            <div class="text-center">
                                <a href="package/<?php echo $id ?>" class="text-decoration-none"><button class="btn-sm ">View Details</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>   
        </div>
    </div>
</section>

<!-- -------------------------package end---------------------------->

<!-- -------------------------footer start--------------------------->

    <?php include("footer.php") ?>

<!-- -------------------------footer end----------------------------->

<!-- -------------------------script start--------------------------->

    <?php include("content/script.php") ?>

<!-- -------------------------script start--------------------------->

</body>
</html>