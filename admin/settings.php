<?php
include("assets/includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php
include("style.php");
?>

<title>Settings</title>
</head>
<body>
 
    <?php include("assets/content/navbar.php") ?>
    <section class="home">
        <div class="text">
            <div class="admin-card">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-11">
                            <h4 class="card-title ms-0 fw-bold mt-3">SETTINGS</h4>
                        </div>                      
                      </div>                                   
                    </div>
                </div>
            </div>

            <?php
            if(isset($_GET["error"])){
            ?>
                <div class="alert alert-danger text-center mt-2" role="alert">
                    <?php
                    $error = $_GET["error"];
                    echo $error;
                    ?>
                </div>

            <?php
            }else if(isset($_GET["success"])){
            ?>
                <div class="alert alert-success text-center mt-2" role="alert">
                    <?php
                    $error = $_GET["success"];
                    echo $error;
                    ?>
                </div>
            <?php } ?>

            <div class="card custom-card-2 mt-3">
                <div class="card-body p-3">
                    <div class="row">
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

                        <div class="card custom-card-2 mt-2">
                            <div class="card-body p-4">
                                <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">                  
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Company Name :</label>
                                        <input type="text" class="form-control" value="<?php echo $company_name ?>" name="company_name" id="company_name" placeholder="Enter Company Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Address :</label>
                                        <input type="text" class="form-control" value="<?php echo $address ?>" name="address" id="address" placeholder="Enter Company Address" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Place :</label>
                                        <input type="text" class="form-control" name="place" value="<?php echo $place ?>" id="place" placeholder="Enter Company Place" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Phone_Number1 :</label>
                                        <input type="text" class="form-control" name="phone_number1" value="<?php echo $phone_number1 ?>" id="title" placeholder="Enter Primary PhoneNumber" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Phone_Number2 :</label>
                                        <input type="text" class="form-control" name="phone_number2" id="title" value="<?php echo $phone_number2 ?>" placeholder="Enter Secondary PhoneNumber" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="title">e-mail :</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $email ?>" id="title" placeholder="Enter Primary Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="link">Website :</label>
                                        <input type="url" class="form-control" id="url" name="link" value="<?php echo $link ?>" placeholder="Enter Website Link" required>
                                    </div>

                                    <label class="form-label" for="title">Facebook :</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">https://facebook.com/</span>
                                        <input type="text" class="form-control" id="basic-url" name="facebook" value="<?php echo $facebook ?>" aria-describedby="basic-addon3">
                                    </div>

                                    <label class="form-label" for="title">Instagram :</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">https://instagram.com/</span>
                                        <input type="text" class="form-control" id="basic-url" name="instagram" value="<?php echo $instagram ?>" aria-describedby="basic-addon3">
                                    </div>
                                    <label class="form-label" for="title">Twitter :</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">https://instagram.com/</span>
                                        <input type="text" class="form-control" id="basic-url" name="twitter" value="<?php echo $twitter ?>" aria-describedby="basic-addon3">
                                    </div>      

                                    <div class="d-flex justify-content-right mt-4 ">                                   
                                        <button type="submit" class="btn submit_btn float-end submit_btn me-1" name="update_settings" style="background-color: #0d4c91;">UPDATE</button>
                                        <button type="button" class="btn btn-success submit_btn" name="change_password" data-bs-toggle="modal" data-bs-target="#myModal" style="background-color: #7d1128;">CHANGE PASSWORD</button>
                                    </div>
                                </form>
                            </div>                          
                        </div>                    
                    </div>                  
                </div>              
            </div> 
                                             
        </div>
        <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close submit_btn" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="functions/functions.php">
                    <!-- Modal body -->
                    <div class="modal-body">


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Old Password</label>
                            <input type="password" name="old_pass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">New Password</label>
                            <input type="password" name="new_pass" class="form-control" id="exampleInputPassword2">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword3" class="form-label">Confirm Password</label>
                            <input type="password" name="retype_pass" class="form-control" id="exampleInputPassword3">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger " data-bs-dismiss="modal" >Close</button>
                        <button type="submit" name="change_password" class="btn btn-primary submit_btn" style="background-color: #0d4c91;">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
    </section>
    <?php include("assets/content/script.php"); ?>
</body>
</html>