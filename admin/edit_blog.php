<?php
include("assets/includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include("style.php");
    ?>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <title>Blog</title>
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
                                <h4 class="card-title ms-0 fw-bold mt-2">BLOG</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_GET["error"])) {
            ?>
                <div class="alert alert-danger text-center mt-2" role="alert">
                    <?php
                    $error = $_GET["error"];
                    echo $error;
                    ?>
                </div>

            <?php
            } else if (isset($_GET["success"])) {
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
            $sql = "select * from tbl_blog where id='$id'";
            $run = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($run);

            $img = $row["img"];
            $title = $row["title"];
            $date = $row["date"];
            $description = $row["description"];
            $explanation = $row["explanation"];
            ?>
            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Title :</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $title ?>" placeholder="Enter the Title required>
                            </div>
                            <div class=" mb-3">
                            <label class="form-label" for="title">Date :</label>
                            <input type="text" class="form-control" name="date" id="date" value="<?php echo $date ?>" placeholder="Enter the Date" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Description :</label>
                            <input type="text" class="form-control" name="description" id="description" value="<?php echo $description ?>" placeholder="Enter the Description" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Explanation :</label>
                            <div id="editor"></div>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="old_img" value="<?php echo $img ?>">
                            <input type="hidden" name="explanation" id="ld" value="<?php echo htmlspecialchars($explanation) ?>">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <button type="submit" class="btn btn-sm submit_btn float-end" name="update_blog" style="background-color:38303D;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
    <script>
        $(document).ready(function() {
            var corehtml = $("#ld").val();
            quill.root.innerHTML = corehtml;
        })

        quill.on("text-change", function() {
            $("#ld").val(quill.root.innerHTML);
        })
    </script>
</body>
</html>