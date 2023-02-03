<?php
include("../includes/db.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "../../../PHPMailer/src/PHPMailer.php";
require_once "../../../PHPMailer/src/SMTP.php";
// require_once "../../PHPMailer/src/Exception.php";
// session_start();

if (isset($_POST["login"])) {
  $username = mysqli_real_escape_string($con, $_POST["username"]);
  $password = mysqli_real_escape_string($con,$_POST["password"]);

  $passhash = hash("sha256", $password);

  $sql = "select * from tbl_users where username='$username' and password='$passhash'";
  $run = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run);
  if ($count === 0) {
    header("Location: ../../login.php?error=Invalid credential");
  } else {
    // $_SESSION["loggedin"] = true; 
    header("Location: ../../index.php"); 
  }
}

  if (isset($_POST["add_service"])) {
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $description = mysqli_real_escape_string($con, $_POST["description"]);
    $explanation = mysqli_real_escape_string($con, $_POST["explanation"]);
  
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
  
    $to = "../../assets/images/service/" . $img;
  
    move_uploaded_file($tmp_name, $to);
  
    $sql = "insert into tbl_service(title,description,explanation,img) values('$title','$description','$explanation','$img')";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../service.php?success=service added successfully");
    } else {
      header("Location: ../../service.php?error=failed to add service!");
    }
  }
  
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
   
  if (isset($_POST["update_service"])) {
    $id = $_POST["id"];
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $description = mysqli_real_escape_string($con, $_POST["description"]);
    $explanation = mysqli_real_escape_string($con, $_POST["explanation"]);
  
    $img = "";
    if ($_FILES['img']['size'] === 0) {
      $img = $_POST["old_img"];
    } else {
  
      $img = $_FILES["img"]["name"];
      $tmp_name = $_FILES["img"]["tmp_name"];
  
      $to = "../../assets/images/service/" . $img;
  
      move_uploaded_file($tmp_name, $to);
    }
  
    $sql = "update tbl_service set title='$title',description='$description',explanation='$explanation',img='$img' where id='$id'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../service.php?success=service updated successfully");
    } else {
      header("Location: ../../service.php?error=failes to update service!");
    }
  }
  

  if (isset($_POST["add_blog"])) {
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $date = mysqli_real_escape_string($con, $_POST["date"]);
    $description = mysqli_real_escape_string($con, $_POST["description"]);
    $explanation = mysqli_real_escape_string($con, $_POST["explanation"]);
  
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
  
    $to = "../../assets/images/blog/" . $img;
  
    move_uploaded_file($tmp_name, $to);
  
    $sql = "insert into tbl_blog(title,date,description,explanation,img) values('$title','$date','$description','$explanation','$img')";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../blog.php?success=blog added successfully");
    } else {
      header("Location: ../../blog.php?error=failed to add blog!");
    }
  }
  
  if (isset($_POST["delete_blog"])) {
    $id = $_POST["id"];
    $sql = "delete from tbl_blog where id='$id'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../blog.php?success=blog deleted successfully");
    } else {
      header("Location: ../../blog.php?error=failed to delete blog!");
    }
  }
   
  if (isset($_POST["update_blog"])) {
    $id = $_POST["id"];
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $date = mysqli_real_escape_string($con, $_POST["date"]);
    $description = mysqli_real_escape_string($con, $_POST["description"]);
    $explanation = mysqli_real_escape_string($con, $_POST["explanation"]);
  
    $img = "";
    if ($_FILES['img']['size'] === 0) {
      $img = $_POST["old_img"];
    } else {
  
      $img = $_FILES["img"]["name"];
      $tmp_name = $_FILES["img"]["tmp_name"];
  
      $to = "../../assets/images/blog/" . $img;
  
      move_uploaded_file($tmp_name, $to);
    }
  
    $sql = "update tbl_blog set title='$title',date='$date',description='$description',explanation='$explanation',img='$img' where id='$id'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../blog.php?success=blog updated successfully");
    } else {
      header("Location: ../../blog.php?error=failes to update blog!");
    }
  }

  if (isset($_POST["add_package"])) {
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $description = mysqli_real_escape_string($con, $_POST["description"]);
    $long_description = mysqli_real_escape_string($con, $_POST["long_description"]);
    $amount = mysqli_real_escape_string($con, $_POST["amount"]);
    $days = mysqli_real_escape_string($con, $_POST["days"]);
  
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
  
    $to = "../../assets/images/package/" . $img;
  
    move_uploaded_file($tmp_name, $to);
  
    $sql = "insert into tbl_package(title,description,long_description,amount,days,img) values('$title','$description','$long_description','$amount','$days','$img')";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../package.php?success=package added successfully");
    } else {
      header("Location: ../../package.php?error=failed to add package!");
    }
  }
  
  if (isset($_POST["delete_package"])) {
    $id = $_POST["id"];
    $sql = "delete from tbl_package where id='$id'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../package.php?success=package deleted successfully");
    } else {
      header("Location: ../../package.php?error=failed to delete package!");
    }
  }
   
  if (isset($_POST["update_package"])) {
    $id = $_POST["id"];
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $description = mysqli_real_escape_string($con, $_POST["description"]);
    $long_description = mysqli_real_escape_string($con, $_POST["long_description"]);
    $amount = mysqli_real_escape_string($con, $_POST["amount"]);
    $days = mysqli_real_escape_string($con, $_POST["days"]);
  
    $img = "";
    if ($_FILES['img']['size'] === 0) {
      $img = $_POST["old_img"];
    } else {
  
      $img = $_FILES["img"]["name"];
      $tmp_name = $_FILES["img"]["tmp_name"];
  
      $to = "../../assets/images/package/" . $img;
  
      move_uploaded_file($tmp_name, $to);
    }
  
    $sql = "update tbl_package set title='$title',description='$description',long_description='$long_description',amount='$amount',days='$days',img='$img' where id='$id'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../package.php?success=package updated successfully");
    } else {
      header("Location: ../../package.php?error=failes to update package!");
    }
  }

  if (isset($_POST["add_youtube"])) {
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $link = mysqli_real_escape_string($con, $_POST["link"]);
  
    $sql = "insert into tbl_youtube(name,link) values('$name','$link')";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../youtube.php?success=blog added successfully");
    } else {
      header("Location: ../../youtube.php?error=failed to add blog!");
    }
  }
  
  if (isset($_POST["delete_youtube"])) {
    $id = $_POST["id"];
    $sql = "delete from tbl_youtube where id='$id'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../youtube.php?success=youtube deleted successfully");
    } else {
      header("Location: ../../youtube.php?error=failed to delete youtube!");
    }
  }
   
  if (isset($_POST["update_youtube"])) {
    $id = $_POST["id"];
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $link = mysqli_real_escape_string($con, $_POST["link"]);
  
    $sql = "update tbl_youtube set name='$name',link='$link' where id='$id'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../youtube.php?success=youtube updated successfully");
    } else {
      header("Location: ../../youtube.php?error=failes to update youtube!");
    }
  }
  
  
  if (isset($_POST["add_testimonial"])) {
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $description = mysqli_real_escape_string($con, $_POST["description"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $designation = mysqli_real_escape_string($con, $_POST["designation"]);
  
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
  
    $to = "../../assets/images/testimonial/" . $img;
  
    move_uploaded_file($tmp_name, $to);
  
    $sql = "insert into tbl_testimonial(title,description,name,designation,img) values('$title','$description','$name','$designation','$img')";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../testimonial.php?success=testimonial added successfully");
    } else {
      header("Location: ../../testimonial.php?error=failed to add testimonial!");
    }
  }
  
  if (isset($_POST["delete_testimonial"])) {
    $id = $_POST["id"];
    $sql = "delete from tbl_testimonial where id='$id'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../testimonial.php?success=testimonial deleted successfully");
    } else {
      header("Location: ../../testimonial.php?error=failed to delete testimonial!");
    }
  }
   
  if (isset($_POST["update_testimonial"])) {
    $id = $_POST["id"];
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $description = mysqli_real_escape_string($con, $_POST["description"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $designation = mysqli_real_escape_string($con, $_POST["designation"]);

    $img = "";
    if ($_FILES['img']['size'] === 0) {
      $img = $_POST["old_img"];
    } else {
  
      $img = $_FILES["img"]["name"];
      $tmp_name = $_FILES["img"]["tmp_name"];
  
      $to = "../../assets/images/testimonial/" . $img;
  
      move_uploaded_file($tmp_name, $to);
    }
  
    $sql = "update tbl_testimonial set title='$title',description='$description',name='$name',designation='$designation',img='$img' where id='$id'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../testimonial.php?success=testimonial updated successfully");
    } else {
      header("Location: ../../testimonial.php?error=failes to update testimonial!");
    }
  }

  
if (isset($_POST["update_settings"])) {
  $company_name = mysqli_real_escape_string($con, $_POST["company_name"]);
  $address = mysqli_real_escape_string($con, $_POST["address"]);
  $place = mysqli_real_escape_string($con, $_POST["place"]);
  $phone_number1 = mysqli_real_escape_string($con, $_POST["phone_number1"]);
  $phone_number2 = mysqli_real_escape_string($con, $_POST["phone_number2"]);
  $email = mysqli_real_escape_string($con, $_POST["email"]);
  $link = mysqli_real_escape_string($con, $_POST["link"]);
  $facebook = mysqli_real_escape_string($con, $_POST["facebook"]);
  $instagram = mysqli_real_escape_string($con, $_POST["instagram"]);
  $twitter = mysqli_real_escape_string($con, $_POST["twitter"]);
 
  $sql = "update tbl_company set company_name='$company_name' , address='$address' , place='$place', phone_number1='$phone_number1' , phone_number2='$phone_number2' ,email1='$email1' , link='$link' , facebook='$facebook' , instagram='$instagram' , twitter='$twitter'  where id='1'";
  $run = mysqli_query($con, $sql);

  if ($run === TRUE) {
    header("Location: ../../settings.php?success=settings updated successfully");
  } else {
    header("Location: ../../settings.php?error=failes to update settings!");
  }
}

?>  