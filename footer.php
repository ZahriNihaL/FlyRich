<section class="footer">
        <div class="container">
            <div class="row footer-details">
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
                <div class="col-lg-3">
                    <a href="index.html"><img src="images/footer.png" alt="footer-logo" class="img-fluid"></a>
                    <p class="light-color">Flyrich travels and lesuire is the leading travel company with strong presence in India and overseas</p>
                    <div class="d-flex mt-3">
                        <a href="<?php echo $facebook ?>">
                            <div class="icon-bg me-3 ">
                                <i class="fa fa-facebook-f fb"></i>
                            </div>
                        </a>
                        <a href="<?php echo $instagram ?>">
                            <div class="icon-bg me-3 ">
                                <i class="fa fa-instagram insta"></i>
                            </div>
                        </a>
                        <a href="<?php echo $twitter ?>">
                            <div class="icon-bg me-3 "> 
                                <i class="fa fa-twitter twi"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul class=" footer-links">
                        <li><h6 class="light-color">Features</h6></li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="package.php">Packages</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class=" footer-links">
                        <li><h6 class="light-color">Quick Links</h6></li>
                        <li><a href="#">Air Tickets</a></li>
                        <li><a href="#">Visit visa services</a></li>
                        <li><a href="#">Hajj and umrah services</a></li>
                        <li><a href="#">Hotel Booking</a></li>
                        <li><a href="#">Passport services</a></li>
                        <li><a href="#">Holiday packages</a></li>
                        <li><a href="#">Cruise packages</a></li>
                        <li><a href="#">Medical Tourism</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class="footer-links">
                        <li><h6 class="light-color">Quick Links</h6></li>
                        <li><a href="#">Visa stamping </a></li>
                        <li><a href="#">Saudi wakala</a></li>
                        <li><a href="#">Certificate attestation</a></li>
                        <li><a href="#">Train tickets & Bus tickets</a></li>
                        <li><a href="#">Schengen visa services</a></li>
                        <li><a href="#">European work permit </a></li>
                        <li><a href="#">GCC Work permit</a></li>
                        <li><a href="#">Study Abroad</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <p class="text-white powered-by text-center">Powered by <a href="https://trickydot.com/" target="_blank" class="fw-bold">Trickydot Technologies</a></p>
    </section>