<?php
// session_start();
include("assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php
include("style.php");
?>
<title>Dashboard</title>
</head>
<body>
<?php include("assets/content/navbar.php") ?>
<section class="home">
    <div class="text">
        <div class="admin-card">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                        <h4 class="card-title ms-0 fw-bold mt-2">Home</h4>
                    </div>
                  </div>                           
                </div>
            </div>
        </div>
        <?php
        $ser_sql = "select * from tbl_service";
        $run_ser = mysqli_query($con, $ser_sql);
        $ser_count = mysqli_num_rows($run_ser);
        ?>
          <div class="home-cards">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">SERVICES</h6>
                                    <h4 class="fw-bold text-black"><?php echo $ser_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-card-checklist icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Total Services</p>
                        </div>
                    </div>
                </div>
        <?php
        $blg_sql = "select * from tbl_blog";
        $run_blg = mysqli_query($con, $blg_sql);
        $blg_count = mysqli_num_rows($run_blg);
        ?>    
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">BLOG</h6>
                                    <h4 class="fw-bold text-black"><?php echo $blg_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-display icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Total Blogs</p>
                        </div>
                    </div>
                </div>
                <?php
        $pak_sql = "select * from tbl_package";
        $run_pak = mysqli_query($con, $pak_sql);
        $pak_count = mysqli_num_rows($run_pak);
        ?>    
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">PACKAGE</h6>
                                    <h4 class="fw-bold text-black"><?php echo $pak_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-display icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Total Packages</p>
                        </div>
                    </div>
                </div>
                <?php
        $ytb_sql = "select * from tbl_youtube";
        $run_ytb = mysqli_query($con, $ytb_sql);
        $ytb_count = mysqli_num_rows($run_ytb);
        ?>
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">YOUTUBE</h6>
                                    <h4 class="fw-bold text-black"><?php echo $ytb_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-play-btn-fill icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Total YouTube Videos</p>
                        </div>
                    </div>
                </div>
                <?php
        $tsmnl_sql = "select * from tbl_testimonial";
        $run_tsmnl = mysqli_query($con, $tsmnl_sql);
        $tsmnl_count = mysqli_num_rows($run_tsmnl);
        ?>
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">TESTIMONIAL</h6>
                                    <h4 class="fw-bold text-black"><?php echo $tsmnl_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">                                   
                                    <i class="bi bi-chat-left-text icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Total Testimonial</p>
                        </div>
                    </div>
                </div>
                <?php
        $cnt_sql = "select * from tbl_message";
        $run_cnt = mysqli_query($con, $cnt_sql);
        $cnt_count = mysqli_num_rows($run_cnt);
        ?>
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">CONTACTS</h6>
                                    <h4 class="fw-bold text-black"><?php echo $cnt_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                    <i class="bi bi-person-lines-fill icon"></i>                                   
                                </div>
                            </div>
                          <p class="card-text">Total Messages Received</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("assets/content/script.php"); ?>
<script>
    changeNav("home-nav");
</script>
</body>
</html>