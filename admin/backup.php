<?php
if (isset($_POST["delete_service"])) {
    $id = $_POST["id"];
    $sql = "delete from tbl_service where id='$id'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../service.php?success=service deleted successfully");
    } else {
      header("Location: ../../service.php?error=failed to delete service!");
    }
  }
?>