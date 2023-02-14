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
            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="main-img" id="image">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Title :</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter the Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Description :</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="Enter the Description" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Amount :</label>
                            <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter the Amount" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Days :</label>
                            <input type="text" class="form-control" name="days" id="days" placeholder="Enter Days" required>
                        </div>
                        <label class="form-label" id="image_label" for="image">Carousel :</label>
                        <div class="mb-3 multiple_image" id="multiple_image">
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
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Long Description :</label>
                            <div id="editor"></div>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="long_description" id="long_description">
                            <button type="submit" class="btn btn-sm btn-success float-end" name="add_package" style="background-color:#38303D;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("packages-nav");
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
        });
    </script>
</body>

</html>