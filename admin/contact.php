<?php
require_once 'assets/includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include("style.php");
    ?>

    <title>Contact Datas</title>
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
                                <h4 class="card-title ms-0 fw-bold mt-3">CONTACTS</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card custom-card-2 mt-5">
                <div class="card-header ">
                    <h2 class="display-6 text-center">Contact Details Of Clients</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="table table-bordered text-white text-center" style="background-color: #38303D;">
                            <td>NAME</td>
                            <td>EMAIL</td>
                            <td>PHONE NUMBER</td>
                            <td>MESSAGE</td>
                            <td>DELETE</td>
                        </tr>
                        <tr>
                            <?php
                            $query = "select * from tbl_message";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($result)) {

                                $id = $row["id"];
                                $name = $row["name"];
                                $email = $row["email"];
                                $phone_number = $row["phone_number"];
                                $message = $row["message"];
                            ?>
                                <td class="text-center"><?php echo $row['name']; ?></td>
                                <td class="text-center"><?php echo $row['email']; ?></td>
                                <td class="text-center"><?php echo $row['phone_number']; ?></td>
                                <td class="text-center"><?php echo $row['message']; ?></td>

                                <form method="post" action="assets/functions/functions.php">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <td>
                                        <div class="text-center">
                                        <button type="submit" name="delete_message" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </td>
                                </form>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
</body>

</html>