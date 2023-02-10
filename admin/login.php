<?php
include("assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    session_start();
    if (isset($_SESSION["flyrich_loggedin"])) {
        header("Location: index.php");
    }
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="images/title image.jpg">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Login</title>
</head>
<body>
    <section class="login-page">
        <div class="container">
            <h1 class="fw-bold text-center">Welcome back</h1>
            <h6 class=" text-center">Please Enter Your Valid Details</h6>
            <div class="row login-details">
                <div class="col-lg-6 login-bg">
                </div>
                <div class="col-lg-6 bg-white login-form-content">
                    <div class="form-bg">
                        <?php
                        if (isset($_GET["error"])) {
                        ?>
                            <div class="alert alert-danger text-center" role="alert">
                                <?php
                                $error = $_GET["error"];
                                echo strip_tags($error);
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                        <form method="POST" class="w-75" action="assets/functions/functions.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="login" value="LOGIN" class="btn w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>