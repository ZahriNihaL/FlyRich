<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    include("style.php");
    ?>
    <title>Flyrich</title>
</head>
<body>

    <!-- --------------------------------header start------------------------------------>

    <header>
    <?php include("content/navbar.php") ?>

    <!-- --------------------------------home start------------------------------------>

        <section class="home">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7"></div>
                    <div class="col-lg-5">
                        <h1 class="fw-bold ">Lorem ipsum dolor sit <br> amet consectetur </h1>
                        <button class="btn mt-3">Book Your Ticket Now</button>
                    </div>
                </div>

            </div>
        </section>

    <!----------------------------------home end------------------------------------>

    </header>

    <!----------------------------------header end------------------------------------>

    <!----------------------------------about start------------------------------------>

    <section class="about">
        <div class="row">
            <div class="col-lg-6">
                <img src="images/about/about.jpg" alt="about image" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <div class="about-texts">
                    <h6 class="fw-bold subhead-color">About</h6>
                    <div class="d-flex">
                        <h3 class="fw-bold head-color">Start Your Journey With FlyRich</h3>
                        <i class="bi bi-airplane flight ms-2"></i>
                    </div>
                    <p class="text-align-justify mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu lectus vel tellus accumsan laoreet nec vel ligula. Donec eget sollicitudin magna. Suspendisse commodo mi eget interdum ornare. Maecenas eleifend fermentum nisl, non dapibus orci gravida vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nisl magna, dictum at nisl eget, facilisis porttitor nisl.</p>
                    <button class="button-style mt-2 fw-bold">Contact</button>
                </div>
            </div>
        </div>
    </section>

    <!-- --------------------------------about end---------------------------------- -->

    <!-- -------------------------services start--------------------------- -->

    <section class="services">
        <div class="container">
            <h6 class="fw-bold subhead-color text-center">Services</h6>
            <div class="d-flex text-center justify-content-center">
                <h3 class="fw-bold head-color">Explore Our Services</h3>
                <i class="bi bi-airplane flight ms-2"></i>
            </div>

            <div class="service-contents">
                <div class="row justify-content-center">
                    <?php
                    $sql = "select * from tbl_service LIMIT 7";
                    $run = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($run)) {
                        $id = $row["id"];
                        $title = $row["title"];
                        $description = $row["description"];
                        $explanation = $row["explanation"];
                        $img = $row["img"];
                    ?>
                        <div class="col-lg-3 bottom-margin">
                            <div class="service-card float">
                                <h5 class="head-color fw-bold text-center"><?php echo $title ?></h4>
                                </h5>
                                <div class="card mt-2" style="width: 18rem;">
                                    <img src="admin/assets/images/service/<?php echo $img ?>" class="card-img-top" alt="service-card image">
                                    <div class="card-body">

                                        <p class="card-text para-color"><?php echo $description ?> </p>
                                        <a href="#" class="text-center subhead-color fw-bold">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-lg-3 more  bottom-margin">
                        <div class="service-card float">
                            <a href="#">
                                <div class="card " style="width: 18rem;">
                                    <div class="card-body">
                                        <h3 class="text-center mt-5">9 More </h3>
                                        <img src="images/services/Arrow.png" alt="" class="img-flud mb-5" aria-colcount="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------services end--------------------------- -->

    <!-- -------------------------blog start--------------------------- -->


    <section class="blog">
        <div class="container">
            <h6 class="fw-bold subhead-color text-center">Blog</h6>
            <div class="d-flex justify-content-center">
                <h3 class="fw-bold head-color">Our Latest Blogs</h3>
                <i class="bi bi-airplane flight ms-2"></i>
            </div>
            <div class="row blog-contents">
                <div class="col-lg-6">
                    <div class="row blog-img-details">
                        <?php
                        $sql = "select * from tbl_blog  LIMIT 3";
                        $run = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($run)) {
                            $id = $row["id"];
                            $title = $row["title"];
                            $date = $row["date"];
                            $description = $row["description"];
                            $explanation = $row["explanation"];
                            $img = $row["img"];
                        ?>
                            <div class="col-lg-6 mt-sm-5 mt-md-3">
                                <a href="#"><img src="admin/assets/images/blog/<?php echo $img ?>" alt="blog image" class="img-fluid"></a>
                            </div>
                            <div class="col-lg-6 mt-sm-5 mt-md-3">
                                <h6 class="subhead-color"><?php echo $title ?></h6>
                                <p class="para-color"><?php echo $date ?></p>
                                <p class="para-color"><?php echo $description ?></p>
                                <a href="#" class="fw-bold subhead-color view-more">View More</a>
                            </div>
                        <?php } ?>
                    </div>
                    <button class="button-style mt-3">View All</button>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="images/blog/4.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="col-lg-6 mt-3">
                            <img src="images/blog/5.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 mt-3">
                            <img src="images/blog/6.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------blog end--------------------------- -->

    <!-- -------------------------package start--------------------------- -->

    <section class="package package-top">
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
                            <img src="admin/assets/images/package/<?php echo $img ?>" class="card-img-top" alt="package image">
                            <div class="days">
                                <h6 class="text-white fw-bold text-center"><?php echo $amount ?></h6>
                            </div>
                            <h6 class="card-title fw-bold head-color mt-3"><?php echo $title ?></h6>
                            <p class="card-text para-color description"><?php echo $description ?></p>
                            <div class="d-flex justify-content-between">
                                <h5 class="subhead-color fw-bold"><?php echo $days ?></h5>
                                <div class="text-center">
                                    <a href="#" class="text-decoration-none"><button class="btn-sm ">View Details</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
            <div class="text-center">
                <button class="button-style fw-bold  mt-5">View More</button>
            </div>
        </div>
    </section>

    <!---------------------------package end--------------------------- -->

    <!---------------------------youtube start--------------------------- -->

    <section class="youtube">
        <div class="container">
            <h6 class="fw-bold subhead-color text-center">Videos</h6>
            <div class="d-flex justify-content-center">
                <h3 class="fw-bold head-color">Watch Our Youtube Videos</h3>
                <i class="bi bi-airplane flight ms-2"></i>
            </div>

            <div class="row videos">
                <?php
                $sql = "select * from tbl_youtube";
                $run = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($run)) {
                    $id = $row["id"];
                    $link = $row["link"];
                ?>
                    <div class="col-lg-4">
                        <iframe src="<?php echo $link ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                <?php } ?>
            </div>
        </div>
        </div>
    </section>

    <!---------------------------youtube end----------------------------->




     
    <!---------------------------testimonial start----------------------------->

    <section class="testimonial">
        <div class="container">
            <h6 class="fw-bold subhead-color text-center">Testimonial</h6>
            <div class="d-flex justify-content-center">
                <h3 class="fw-bold head-color">Words From Travel Lovers</h3>
                <i class="bi bi-airplane flight ms-2"></i>
            </div>
            <div class="client-box">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active d-none" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="d-none" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="d-none" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="card">
                            <img src="images/testimonial/1.jpg" class="card-img-top" alt="testimonial image" aria-colcount="img-fluid">
                            <div class="card-body">
                              <h5 class="card-title subhead-color fw-bold">Lorem ipsum dolor sit amet!</h5>
                              <p class="card-text para-color mt-4"><i class="fa fa-quote-left me-2"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu lectus vel tellus accumsan laoreet nec vel ligula. Donec eget sollicitudin magna. Suspendisse commodo mi eget interdum ornare.<i class="fa fa-quote-right ms-2"></i> </p>
                              <h6 class="fw-bold subhead-color mt-4">Michal Brink</h6>
                              <p class="subhead-color">Travel Vlogger</p>
                            </div>
                          </div>
                      </div>

                      <div class="carousel-item">
                        <div class="card">
                            <img src="images/testimonial/1.jpg" class="card-img-top" alt="testimonial image" aria-colcount="img-fluid">
                            <div class="card-body">
                              <h5 class="card-title subhead-color fw-bold">Lorem ipsum dolor sit amet!</h5>
                              <p class="card-text para-color mt-4"><i class="fa fa-quote-left me-2"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu lectus vel tellus accumsan laoreet nec vel ligula. Donec eget sollicitudin magna. Suspendisse commodo mi eget interdum ornare.<i class="fa fa-quote-right ms-2"></i> </p>
                              <h6 class="fw-bold subhead-color mt-4">Michal Brink</h6>
                              <p class="subhead-color">Travel Vlogger</p>
                            </div>
                          </div>
                      </div>

                      <div class="carousel-item">
                        <div class="card">
                            <img src="images/testimonial/1.jpg" class="card-img-top" alt="testimonial image" aria-colcount="img-fluid">
                            <div class="card-body">
                              <h5 class="card-title subhead-color fw-bold">Lorem ipsum dolor sit amet!</h5>
                              <p class="card-text para-color mt-4"><i class="fa fa-quote-left me-2"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu lectus vel tellus accumsan laoreet nec vel ligula. Donec eget sollicitudin magna. Suspendisse commodo mi eget interdum ornare.<i class="fa fa-quote-right ms-2"></i> </p>
                              <h6 class="fw-bold subhead-color mt-4">Michal Brink</h6>
                              <p class="subhead-color">Travel Vlogger</p>
                            </div>
                          </div>
                      </div>

                    </div>
                    <button class="carousel-control-prev d-none d-md-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <i class="bi bi-caret-left"></i>
                    </button>
                    <button class="carousel-control-next d-none d-md-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <i class="bi bi-caret-right"></i>
                    </button>
                  </div>
            </div>
        </div>
    </section>

    <!-- -------------------------testimonial end--------------------------- -->

    <!-- -------------------------contact start--------------------------- -->

    <section class="contact">
        <div class="container">
            <h6 class="fw-bold subhead-color text-center">Testimonial</h6>
            <div class="d-flex justify-content-center ">
                <h3 class="fw-bold head-color">Words From Travel Lovers</h3>
                <i class="bi bi-airplane flight ms-2"></i>
            </div>
            <div class="row contact-contents">
                <div class="col-lg-6">
                    <img src="images/contact/1.jpg" alt="contact image" class="img-fluid">
                    <div class="contact-details">
                        <?php
                        $sql = "select * from tbl_company where id='1'";
                        $run = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($run);

                        $id = $row["id"];
                        $company_name = $row["company_name"];
                        $address = $row["address"];
                        $place = $row["place"];
                        $phone_number1 = $row["phone_number1"];
                        $phone_number2 = $row["phone_number2"];
                        $email = $row["email"];
                        $link = $row["link"];
                        $facebook = $row["facebook"];
                        $instagram = $row["instagram"];
                        $twitter = $row["twitter"];

                        ?>
                        <ul>
                            <li>
                                <h6 class="head-color fw-bold">Our Location</h6>
                            </li>
                            <li>
                                <p class="subhead-color"><?php echo $company_name ?></p>
                            </li>
                            <li class="mt-2">
                                <a href="" class="para-color">
                                    <i class="bi bi-geo-alt me-2"></i>
                                    <?php echo $address ?>
                                    <?php echo $place ?>
                                </a>
                            </li>
                            <li class="mt-2"><a href="" class="para-color"><i class="bi bi-phone me-2"></i><?php echo $phone_number1 ?></a></li>
                            <li class="mt-2"><a href="" class="para-color"><i class="bi bi-phone me-2 "></i><?php echo $phone_number2 ?></a></li>
                            <li class="mt-2"><a href="" class="para-color"><i class="bi bi-envelope me-2"></i><?php echo $email ?></a></li>
                            <li>
                                <div class="d-flex mt-3 social-icons">
                                    <a href="<?php echo $facebook ?>"><i class="fa fa-facebook-f me-3"></i></a>
                                    <a href="<?php echo $instagram ?>"><i class="fa fa-instagram me-3"></i></a>
                                    <a href="<?php echo $twitter ?>"><i class="fa fa-twitter "></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php
                    $sql = "select * from tbl_message";
                    $run = mysqli_query($con, $sql);
                    $rowcount = mysqli_num_rows($run);
                    $row = mysqli_fetch_array($run);

                    if ($rowcount == 0) {
                        echo "error";
                    } else {

                        $id = $row["id"];
                        $name = $row["name"];
                        $email = $row["email"];
                        $phone_number = $row["phone_number"];
                        $message = $row["message"];
                    }
                    ?>
                    <form method="POST" action="functions/functions.php">
                        <h6 class="head-color text-center fw-bold">Lorem ipsum dolor sit amet consectetur</h6>
                        <div class="mb-3 mt-4">
                            <label for="name" class="form-label para-color">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label para-colo">Email</label>
                            <input type="email" class="form-control" name="email" id="mail" placeholder="Enter your email address">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label para-colo">Phone</label>
                            <input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="Enter your phone number">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label para-colo">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Type our message"></textarea>
                        </div>
                        <div class="text-center">
                            <button class="button-style mt-3" id="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------contact end--------------------------- -->

    <!-- -------------------------footer start--------------------------- -->

    <?php include("footer.php") ?>

    <!-- -------------------------footer end--------------------------- -->
    <!-- -------------------------script start--------------------------- -->

    <?php include("content/script.php") ?>

    <!-- -------------------------script end--------------------------- -->

</body>
</html>