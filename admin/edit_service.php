<?php
include("assets/includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    include("style.php");
    ?>

<title>Services</title>
</head>
<body>
    <?php include("assets/content/navbar.php") ?>   
        <section class="home">
            <div class="text">
                <div class="admin-card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-11">
                                    <h4 class="card-title ms-0 fw-bold mt-2">SERVICES</h4>
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
                <?php             
                    $id = $_POST["id"];
                    $sql = "select * from tbl_service where id='$id'";
                    $run = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($run);

                    $img = $row["img"];
                    $title = $row["title"];
                    $description = $row["description"];                
                    $explanation = $row["explanation"];
                ?>
                    
                <div class="card custom-card-2 mt-2">
                    <div class="card-body p-4">
                        <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">  
                            <div class="mb-3">
                                <label class="form-label" for="title">Title :</label>
                                <input type="text" class="form-control" name="title" id="title" value="<?php echo $title ?>" placeholder="Enter the Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Description :</label>
                                <input type="text" class="form-control" name="description" id="description" value="<?php echo $description ?>" placeholder="Enter the Description" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Explanation :</label>
                                <input type="text" class="form-control" name="explanation" id="explanation" value="<?php echo $explanation ?>"  placeholder="Enter the Explanation" required>
                            </div>                           
                            <div class="mb-3">
                                <label class="form-label" for="image">Image :</label>
                                <input type="file" class="form-control" name="img" id="img">
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="old_img" value="<?php echo $img ?>">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <button type="submit" class="btn submit_btn float-end" name="update_service" style="background-color:38303D;">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>            
            </div>
        </section>
        <?php include("assets/content/script.php"); ?>
</body>
</html>




