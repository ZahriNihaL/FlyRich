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
                                    <h4 class="card-title ms-0 fw-bold mt-2">YOUTUBE VLOGS</h4>
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
                   
                <div class="card custom-card-2 mt-2">
                    <div class="card-body p-4">
                        <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">  
                            <div class="mb-3">
                                <label class="form-label" for="title">Name :</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter the Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">YouTube Link :</label>
                                <input type="text" class="form-control" name="link" id="link" placeholder="Enter YouTube Link" required>
                            </div>                                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-success float-end" name="add_youtube" style="background-color:#38303D;">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>            
            </div>
        </section>
        <?php include("assets/content/script.php"); ?>
        <script>
        changeNav("youtube-nav");
    </script>
</body>
</html>
