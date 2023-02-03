<?php
include("assets/includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    include("style.php");
    ?>

<title>YouTube</title>
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
                                    <h4 class="card-title ms-0 fw-bold mt-2">YOUTUBE</h4>
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
                    $sql = "select * from tbl_youtube where id='$id'";
                    $run = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($run);

                    $name = $row["name"];
                    $link = $row["link"];
                    
                ?>
                    
                <div class="card custom-card-2 mt-2">
                    <div class="card-body p-4">
                        <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">  
                            <div class="mb-3">
                                <label class="form-label" for="title">Name :</label>
                                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name ?>" placeholder="Enter the Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Link :</label>
                                <input type="text" class="form-control" name="link" id="link" value="<?php echo $link ?>" placeholder="Enter the Youtube Link" required>
                            </div>                          
                            <div class="mb-3">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <button type="submit" class="btn submit_btn float-end" name="update_youtube" style="background-color:38303D;">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>            
            </div>
        </section>
        <?php include("assets/content/script.php"); ?>
</body>
</html>




