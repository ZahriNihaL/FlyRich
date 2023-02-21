<?php
require_once 'assets/includes/db.php';
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
            <div class="admin-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-10">
                                <h4 class="card-title ms-0 fw-bold mb-0">YouTube</h4>
                            </div>
                            <div class="card-top col-lg-2 text-end">                                           
                            <a href="add_youtube.php" class="btn btn-sm dashboard-btn me-auto" style="background-color: #38303D;">Add Youtube</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card custom-card-2 mt-2">
                <div class="card-header ">
                    <h5 class=" text-center">YouTube Blogs</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="table table-bordered text-white text-center" style="background-color: #38303D;">
                            <td>ID</td>
                            <td>TITLE</td>
                            <td>LINK</td>
                            <td>ACTIONS</td>
                        </tr>
                        <tr>
                            <?php
                            $sql = "select * from tbl_youtube";
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){
                                $id = $row["id"];
                                $name = $row["name"];
                                $link = $row["link"];                                                                                         
                            ?>
                            <td class="text-center"><?php echo $row['id']; ?></td>
                            <td class="text-center"><?php echo $row['name']; ?></td>
                            <td class="text-center"><?php echo $row['link']; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                <form method="post" action="edit_youtube.php">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <button type="submit" name="update_service" class="btn btn-primary btn-sm me-2" style="background-color: #38303D; border: 0;">Update</button>
                                </form>             
                                <form method="post" action="assets/functions/functions.php">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <button type="submit" name="delete_youtube" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure to delete?');" style="background-color: #ac0404; border: 0;">Delete</button>
                                </form>    
                            </td>   
                        </tr>
                        <?php } ?>
                    </table>
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