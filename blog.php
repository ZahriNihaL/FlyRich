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
    <!-- --------------------------------header start---------------------------------- -->   

    <?php include("content/navbar.php") ?>

    <!-- --------------------------------contact-us start------------------------------->

        <section class="our-blog">
            <div class="container">
                <h6 class="fw-bold subhead-color text-center">Blogs</h6>
                    <div class="d-flex  text-center justify-content-center">
                        <h3 class="fw-bold head-color">Welcome to Our Blogs</h3>
                        <i class="bi bi-airplane flight ms-2"></i>
                    </div>
                    <div class="blog-details">
                        <div class="row">
                        <?php
                            $sql = "select * from tbl_blog";
                            $run = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($run)) {
                                $id = $row["id"];
                                $title = $row["title"];
                                $date = $row["date"];
                                $description = $row["description"];
                                $explanation = $row["explanation"];
                                $img = $row["img"];
                            ?>
                            <div class="col-lg-3 top-margin">
                                <a href="#"><img src="admin/assets/images/blog/<?php echo $img ?>" alt="blog image" class="img-fluid"></a>
                                <h6 class="subhead-color mt-3"><?php echo $title ?></h6>
                                <p class="para-color"><?php echo $date ?></p>
                                <p class="para-color desription"><?php echo $explanation ?></p>
                                <a href="#" class="fw-bold subhead-color view-more text-decoration-none">View More</a>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
            </div>
        </section>

    <!-- --------------------------------contact-us end-------------------------------->

    <!-- -------------------------footer start--------------------------- -->
    
    <?php include("footer.php") ?>

    <!-- -------------------------footer end--------------------------- -->

   <!-- -------------------------script start--------------------------- -->

   <?php include("content/script.php") ?>

    <!-- -------------------------script end--------------------------- -->
  </body>
</html>