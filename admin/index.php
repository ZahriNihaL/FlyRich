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
                    <!-- <div class="col-lg-6 right-end d-flex ">
                        <div class="img-bg">
                            <img src="images/profile pic.png" alt="" class="img-fluid">
                        </div>
                        <div class="dropdown">
                            <a href="" class="dropdown-toggle ms-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Najm</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                        </div>
                    </div> -->
                  </div>                           
                </div>
            </div>
        </div>

          <div class="home-cards">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">SERVICES</h6>
                                    <h4 class="fw-bold text-black">10</h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-card-checklist me-2 icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">BLOGS</h6>
                                    <h4 class="fw-bold text-black">8</h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-display me-2 icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">YOUTUBE</h6>
                                    <h4 class="fw-bold text-black">10</h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-play-btn-fill me-2 icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">TESTIMONIAL</h6>
                                    <h4 class="fw-bold text-black">10</h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">                                   
                                    <i class="bi bi-chat-left-text me-2 icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">CONTACTS</h6>
                                    <h4 class="fw-bold text-black">10</h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                    <i class="bi bi-person-lines-fill  me-2 icon"></i>                                   
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">SETTINGS</h6>
                                    <h4 class="fw-bold text-black">8</h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                    <i class="bi bi-sliders2 me-2 icon"></i>                                   
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("assets/content/script.php"); ?>
</body>
</html>