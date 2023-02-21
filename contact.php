<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php
include("style.php");
?>
<title>Contact - Flyrich travel and leisure</title>
</head>
<body>
    <!-- --------------------------------header start---------------------------------- -->

    <section class="contact-us">

    <?php include("content/navbar.php") ?>

    <!-- --------------------------------contact-us start------------------------------->

        <div class="contact-us-bg">
          <div class="row">
            <div class="col-lg-6 padding-0 order-md-0 order-1">
              <div class="left-bg">
                <div class="left-bg-contents">
                  <h5 class="text-center light-color text-center fw-bold">Get In Touch With Us</h5>
                  <?php
                if(isset($_GET["error"])){
                ?>
                    <div class="alert alert-danger text-center mt-2 w-50 ms-auto me-auto" role="alert">
                        <?php
                        $error = $_GET["error"];
                        echo $error;
                        ?>
                    </div>
                <?php
                }else if(isset($_GET["success"])){
                ?>
                    <div class="alert alert-success text-center mt-2 w-50 ms-auto me-auto" role="alert">
                        <?php
                        $error = $_GET["success"];
                        echo $error;
                        ?>
                    </div>
                <?php } ?>
                    <form method="POST" action="functions/functions.php">
                      <div class="mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                      </div>
                      <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address" required>
                      </div>
                      <div class="mb-3">
                        <input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="Enter your phone number" required>
                      </div>
                      <div class="mb-3">
                        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Type your message" required></textarea>
                      </div>
                      <div class="text-center mt-4">
                        <input type="submit"  class="fw-bold text-uppercase button-style contact-us-btn" id="submit" name="submit" value="submit">
                      </div>
                    </form>               
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
                    <div class="d-flex contact-icons justify-content-center mt-4">
                      <a href="#">
                        <div class="icon-bg me-3">
                          <a href="https://facebook.com/<?php echo $facebook ?>" target="_blank"><i class="fa fa-facebook-f facebook"></i></a>
                      </div>
                      </a>
                      <a href="#">
                        <div class="icon-bg me-3">
                          <a href="https://instagram.com/<?php echo $instagram ?>" target="_blank"><i class="fa fa-instagram instagram"></i></a>
                        </div>
                      </a>
                      <a href="https://twitter.com/<?php echo $twitter ?>" target="_blank">
                        <div class="icon-bg me-3">
                          <a href="#"><i class="fa fa-twitter twitter"></i></a>
                        </div>
                      </a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 padding-0 order-md-1 order-0">
              <div class="right-bg">
                <div class="right-bg-contents">
                  <h6 class="fw-bold light-color ">Contact</h6>
                  <div class="d-flex mt-3">
                      <h3 class="fw-bold light-color">If You Have <br> Any Queries, Contact Us</h3>
                      <i class="bi bi-airplane flight ms-2"></i>
                  </div>
                  <p class="contact-us-texts">If you'd like to know more about our services feel free to get in touch.
                    Our operators will provide you with all the information about your journey!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="map-details">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.1194886692715!2d76.18502246524142!3d10.878515510274623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7cfb933471375%3A0x239150190e4b9e60!2sKT%20ARCADE!5e0!3m2!1sen!2sin!4v1675154497184!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="col-lg-6">
                <h6 class="fw-bold head-color mb-0">Our Details</h6>
                <h5 class="subhead-color fw-bold mt-1"><?php echo $company_name ?></h5>
                <div class="d-flex mt-4 contact-us-details">
                  <div class="d-flex me-4">
                    <i class="bi bi-geo-alt-fill"></i>
                    <p class="para-color ms-2"><?php echo $address ?><?php echo $place ?></p>
                  </div>
                  <div class="calls me-4">
                    <div class="d-flex">
                      <i class="bi bi-telephone"></i>
                      <a href="#" class="para-color ms-2 text-decoration-none"><?php echo $phone_number1 ?></a><br>
                    </div>
                    <div class="d-flex">
                      <i class="bi bi-telephone"></i>
                      <a href="#" class="para-color ms-2 text-decoration-none"><?php echo $phone_number2 ?></a><br>
                    </div>
                  </div>
                  <div class="d-flex me-4">
                    <i class="bi bi-envelope"></i>
                    <a href="#" class="para-color ms-2 text-decoration-none"><?php echo $email ?></a><br>
                  </div>
                </div>
                <div class="col-lg-12">
                  <img src="images/contact/contact-us/3.jpg" alt="" class="img-fluid mt-4 contact-img">
                </div>
              </div>
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