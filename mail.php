<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->SMTPDebug  = 2;
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'chaudharyharsh650@gmail.com';                    
  $mail->Password = 'nazuscotszcmyujz';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
//   $email = $_POST["email"];
  $mail->setFrom($_POST["email"]);

  $mail->addAddress('chaudharyharsh650@gmail.com');

  $mail->isHTML(true);

  $mail->Subject = "from: {$_POST['email']} \r\n";
  $mail->Body = "Mail from: {$_POST['email']}\r\n <br>";
  $mail->Body .= "Mail Body: <h1>{$_POST['message']}</h1> \r\n";
  $mail->send();

  echo
  "
  <script>

  // alert('Sent Successfully');

  document.location.href = 'index.html';
  </script>

  ";
}
?>
