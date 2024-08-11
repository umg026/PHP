<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['send'])) {
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'email here';               // SMTP username
$mail->Password   = '*** *** ***';                        // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_STARTTLS` also accepted
$mail->Port       = 465; 

$mail->setFrom('umang.prajapati026@gmail.com', 'Umang');      // Set sender's email address and name
$mail->addAddress($_POST['email']); // Add a recipient

$mail->isHTML(true);    
$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['message'];

$mail->send();
echo '
<script>
alert("Email send succesfully");
</script>

';


}
?>