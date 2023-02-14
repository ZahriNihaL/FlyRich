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
                    <a href="index.html"><img src="http://localhost/github/FlyRich/images/footer.png" alt="footer-logo" class="img-fluid"></a>
                    <p class="light-color">Flyrich travels and lesuire is the leading travel company with strong presence in India and overseas</p>
                    <div class="d-flex mt-3">
                        <a href="https://facebook.com/<?php echo $facebook ?>" target="_blank">
                            <div class="icon-bg me-3 ">
                                <i class="fa fa-facebook-f fb"></i>
                            </div>
                        </a>
                        <a href="https://instagram.com/<?php echo $instagram ?>" target="_blank">
                            <div class="icon-bg me-3 ">
                                <i class="fa fa-instagram insta"></i>
                            </div>
                        </a>
                        <a href="https://twitter.com/<?php echo $twitter ?>" target="_blank">
                            <div class="icon-bg me-3 "> 
                                <i class="fa fa-twitter twi"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul class=" footer-links">
                        <li><h6 class="light-color">Features</h6></li>
                        <li><a href="http://localhost/github/FlyRich/">Home</a></li>
                        <li><a href="http://localhost/github/FlyRich/about">About</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Services</a></li>
                        <li><a href="http://localhost/github/FlyRich/blogs">Blogs</a></li>
                        <li><a href="http://localhost/github/FlyRich/packages">Packages</a></li>
                        <li><a href="http://localhost/github/FlyRich/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class=" footer-links">
                        <li><h6 class="light-color">Our Services</h6></li>
                        <li><a href="http://localhost/github/FlyRich/services">Air Tickets</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Visit visa services</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Hajj and umrah services</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Hotel Booking</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Passport services</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Holiday packages</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Cruise packages</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Medical Tourism</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class="footer-links">
                        <li><h6 class="light-color">Our Services</h6></li>
                        <li><a href="http://localhost/github/FlyRich/services">Visa stamping </a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Saudi wakala</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Certificate attestation</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Train tickets & Bus tickets</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Schengen visa services</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">European work permit </a></li>
                        <li><a href="http://localhost/github/FlyRich/services">GCC Work permit</a></li>
                        <li><a href="http://localhost/github/FlyRich/services">Study Abroad</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <p class="text-white powered-by text-center">Powered by <a href="https://trickydot.com/" target="_blank" class="fw-bold">Trickydot Technologies</a></p>
    </section>