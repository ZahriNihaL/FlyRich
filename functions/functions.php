<?php
session_start();
include("../admin/assets/includes/db.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "../PHPMailer/src/PHPMailer.php";
require_once "../PHPMailer/src/SMTP.php";
require_once "../PHPMailer/src/Exception.php";

/*------------------------contact-function start---------------------------*/

if (isset($_POST["submit"])) {
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->Username = "zaahrinrcet@gmail.com";
    $mail->Password = "zikziggolnevmzfj";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->From = "zaahrinrcet@gmail.com";
    $mail->FromName = "Hanna Zahrin";
    $mail->addAddress("swathikrishnaus2015@gmail.com", "SWATHIKRISHNA US");
    $mail->isHTML(true);
    $mail->Subject = "Contact Forms Of Customers";
    $message = "
  <table>
      <tr><td>Name: </td><td>" . $_POST["name"] . "</td></tr>
      <tr><td>Name: </td><td>" . $_POST["email"] . "</td></tr>
      <tr><td>Name: </td><td>" . $_POST["phone_number"] . "</td></tr>
      <tr><td>Name: </td><td>" . $_POST["message"] . "</td></tr>
  </table>
  ";

    $mail->Body = $message;
    try {
        $mail->send();
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone_number = $_POST["phone_number"];
        $message = $_POST["message"];

        $sql = "insert into tbl_message(name,email,phone_number,message) values('$name','$email','$phone_number','$message')";
        if (mysqli_query($con, $sql)) {
            header("Location: ../contact.php?success=contact added successfully");         
        } else {
            header("Location: ../contact.php?error=failed to add contact!");
        }
        mysqli_close($con);
    } catch (Exception $e) {
        echo "Mailer error: " . $mail->ErrorInfo;
    }
}

/*------------------------contact-function start---------------------------*/