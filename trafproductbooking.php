<?php
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/SMTP.php";
include_once "PHPMailer/Exception.php";
include("db.php");
$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
$email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
$contact = isset($_POST['mobile']) ? strip_tags($_POST['mobile']) : '';
$msg = isset($_POST['msg']) ? strip_tags($_POST['msg']) : '';
$productname = isset($_POST['productname']) ? strip_tags($_POST['productname']) : '';
//$x=strip_tags($_POST[$position[0]]);
//print_r($x);exit;

//print_r($comments);exit;
$message =<<<EOF
<html>
<body>
<table align="center">
<tr><th colspan="2">Contact Us</th></tr>
<tr><td>Name :</td><td>$name</td></tr>
<tr><td>Email :</td><td>$email</td></tr>

<tr><td>Contact No :</td><td>$contact</td></tr>
<tr><td> Product Details</td><tr>

<tr><td>Product Name</td><td>$productname</td></tr>

<tr><td>Message</td><td>$msg</td></tr>
</table>
</body>
</html>
EOF;

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
<?php

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->Host = 'smtp.gmail.com';
//$mail->isSMTP();
//$mail->isSMTP();
$mail->SMTPAuth= true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
//or more succinctly:
$mail->Host = 'tls://smtp.gmail.com:587';
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "mail.voxinnov@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "#Include143";
//Set who the message is to be sent from
$mail->setFrom('mail.voxinnov@gmail.com', 'Contact - Essar Engineers - Traffic ');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('info@essarengineers.co.in');
//$mail->addAddress('sunil@alfinesolutions.com');

// Set email format to HTML
//$mail->isHTML(true); 

//Set the subject line
$mail->Subject = 'Contact - Essar Engineers Quick Contact - Traffic';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment($files);

//$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);


$mail->msgHTML("$message");
$mail->Body    = $message;

//$mail->Body    = $message;
//$number='9961274656';
//send the message, check for errors

//insert details to database

$sms=$name.'  '.$contact.'  Produc-'.$productname;
//print_r($sms);exit;
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    echo '<script>alert("Thanks For Contacing Us...We will be in touch soon...");window.location.href="product.php";</script>';
} else {
    /*echo '<script>alert("Message Sent... Thanks For Contacing Us...We will be in touch soon...");window.location.href="
http://sms.xpresssms.in/api/alfineIt_api.php?ver=1&mode=1&action=push_sms&type=1&route=2&login_name=alfine&api_password=1543120d80ab6138ec33&message='.$name.' '.$contact.' Produc-'.$productname'&number=961274656&sender=ENIFLA";";</script>'*/

header("Location:http://sms.xpresssms.in/api/alfineIt_api.php?ver=1&mode=1&action=push_sms&type=1&route=2&login_name=alfine&api_password=1543120d80ab6138ec33&message=".urlencode($sms)."&number=7558913891&redirect=traffic&sender=ENIFLA");
}


?>
</body>
</html>
