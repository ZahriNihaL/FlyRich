<?php
include("assets/includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <?php
    include("style.php");
    ?>
    <title>Packages</title>
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
                                <h4 class="card-title ms-0 fw-bold mt-2">PACKAGES</h4>
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
            $sql = "select * from tbl_package where id='$id'";
            $run = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($run);

            $main_img = $row["img"];
            $title = $row["title"];
            $description = $row["description"];
            $long_description = $row["long_description"];
            $amount = $row["amount"];
            $days = $row["days"];
            $mimg = $row["img"];
            ?>
            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="main_img" id="image">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Title :</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $title ?>" placeholder="Enter the Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Description :</label>
                            <input type="text" class="form-control" name="description" id="description" value="<?php echo $description ?>" placeholder="Enter the Description" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Amount :</label>
                            <input type="text" class="form-control" name="amount" id="amount" value="<?php echo $amount ?>" placeholder="Enter the Amount" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Days :</label>
                            <input type="text" class="form-control" name="days" id="days" value="<?php echo $days ?>" placeholder="Enter Days" required>
                        </div>
                        <label class="form-label" id="image_label" for="image">Carousel :</label>
                        <div class="mb-3 multiple_image" id="multiple_image">
                            <?php
                            $sql = "select * from tbl_package_img where pid='$id'";
                            $run = mysqli_query($con, $sql);
                            $count = mysqli_num_rows($run);
                            if ($count === 0) { ?>

                                <div class="row align-items-center mb-3">
                                    <div class="col-md-2">
                                        <img src="" class="img-fluid border carousel-img-preview" width="25" height="25">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control carousel-img-input" name="img[]" id="img">
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#">
                                            <input type="button" class="btn btn-success rounded-circle" name="add" id="add" value="+">
                                        </a>
                                    </div>
                                </div>
                                <?php
                            } else {
                                $cnt = 0;
                                while ($row = mysqli_fetch_array($run)) {
                                    $img = $row["img"];
                                    $cnt++;
                                    if ($cnt == 1) { ?>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-2">
                                                <img src="assets/images/package/<?php echo $id ?>/<?php echo $img ?>" class="img-fluid border carousel-img-preview" width="25" height="25">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" class="form-control carousel-img-input  ci-old" name="img[]" id="img">
                                                <input type="hidden" class="form-control carousel-img-input-hidden" name="oldimg[]" value="<?php echo $img ?>" id="img">
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#">
                                                    <input type="button" class="btn btn-success rounded-circle" name="add" id="add" value="+">
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="row mb-3 align-items-center">
                                            <div class="col-md-2">
                                                <img src="assets/images/package/<?php echo $id ?>/<?php echo $img ?>" class="img-fluid border carousel-img-preview" width="25" height="25">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" class="form-control carousel-img-input ci-old" name="img[]" id="img">
                                                <input type="hidden" class="form-control carousel-img-input-hidden" name="oldimg[]" value="<?php echo $img ?>" id="img">
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#">
                                                    <input type="button" class="btn btn-danger rounded-circle remove-img" name="add" value="-">
                                                </a>
                                            </div>
                                        </div>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Long Description :</label>
                            <div id="editor"></div>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="old_img" value="<?php echo $mimg ?>">
                            <input type="hidden" name="long_description" id="long_description" value="<?php echo htmlspecialchars($long_description) ?>">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <button type="submit" class="btn btn-sm submit_btn float-end" name="update_package" style="background-color:38303D;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("packages-nav");
        $(document).ready(function() {
            var corehtml = $("#long_description").val();
            quill.root.innerHTML = corehtml;
        })

        quill.on("text-change", function() {
            $("#long_description").val(quill.root.innerHTML);
        })

        $(document).ready(function() {
            var html = '<div class="row mb-3 align-items-center">' +
                '        <div class="col-md-2">' +
                '           <img src="" class="img-fluid border carousel-img-preview" width="25" height="25">' +
                '      </div>' +
                '        <div class="col-md-6">' +
                '            <input type="file" class="form-control carousel-img-input" name="img[]" id="img">' +
                '        </div>' +
                '        <div class="col-md-2">' +
                '            <a href="#">' +
                '                <input type="button" class="btn btn-danger rounded-circle remove-img" name="add" value="-">' +
                '            </a>' +
                '        </div>' +
                '    </div>';
            var max = 6;
            var x = 1;
            $("#add").click(function() {
                if (x < max) {
                    $("#multiple_image").append(html);
                    x++;
                }
            });
            $("#multiple_image").on('click', '.remove-img', function() {
                $(this).closest('.row').remove();
                x--;
            });

            $("body").on('change', '.carousel-img-input', function() {
                const file = this.files[0];
                var output = $(this).parents(".row").find(".carousel-img-preview");
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        console.log(event.target.result);
                        output.attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });

            $(".ci-old").change(function () {
                $(".carousel-img-input-hidden").remove();
            })
        });
    </script>
</body>

</html>