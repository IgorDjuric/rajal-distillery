<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

////Load Composer's autoloader
//require '../vendor/autoload.php';


$subject = 'Nova poruka od ' . $_POST['name'];
$body = '<p>Zdravo, </p>';
$body .= '<p>Dobili ste poruku od:</p>';
$body .= '<p><strong>Ime: </strong>' . $_POST['name'] . '</p>';
$body .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
$body .= '<p><strong>Poruka: </strong> ' . $_POST['message'] . '</p>';
$to = 'rakijarajal@gmail.com';

$mail = new PHPMailer(); // Passing `true` enables exceptions

//Server settings
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'rakijarajal@gmail.com';
$mail->Password = 'rakijarajal123';
$mail->SMTPSecure = 'ssl'; // tsl
$mail->Port = 465; // 587

//Recipients
$mail->setFrom('rakijarajal@gmail.com', 'No-Reply');
$mail->addAddress($to);
$mail->addReplyTo($_POST['email']);

//Content
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AltBody = $body;

$mail->send();

?>