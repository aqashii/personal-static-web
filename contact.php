<?php
require 'vendor/PHPMailer-master/src/Exception.php';
require 'vendor/PHPMailer-master/src/PHPMailer.php';
require 'vendor/PHPMailer-master/src/SMTP.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phno'];
    $place = $_POST['place'];
    $messagee = $_POST['message'];


    $message = '<table width="700" border="1" style="border-collapse:collapse" >
       <tr>
          <td colspan="2" width="250" bgcolor="#202187"> <font color="#FFFFFF"><center>CONTACT DETAILES</center> </font></td>
            </tr>
                <tr>
          <td> Full Name : </td>
          <td>' . $fullname . '</td>
        </tr>
           <tr>
          <td>Email: </td>
          <td>' . $email . '</td>    </tr>
        <tr>
          <td>Phone No </td>
          <td>' . $number . '</td>    </tr>
        <tr>
          <td>Place </td>
          <td>' . $place . '</td>    </tr>
      <tr>
          <td>Message: </td>
          <td>' . $messagee . '</td>    </tr>
        <tr>
      </table>
      ';
    // echo $message;

    $subject = 'Contact From aqashii Website';
    // . 'Reply-To: ashiq@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    $headers = "From: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    $sentMail = mail('ashiqmuhammedep@gmail.com', $subject, $message, $headers);

    if ($sentMail) {
        echo "Success while senting";

    } else {
        echo "error while senting";
    }
}

?>