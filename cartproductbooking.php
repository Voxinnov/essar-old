<?php
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/SMTP.php";
include_once "PHPMailer/Exception.php";
include("db.php");
 $raw_id = isset($_POST['u_id']) ? strip_tags($_POST['u_id']) : '';
 $safe_id = $conn ? mysqli_real_escape_string($conn, $raw_id) : addslashes($raw_id);
 $sql = "SELECT cart_id,cart_prod_id ,cart_prod_name,cart_extra_details,cart_status,cart_prod_id_uid,med_prod_img FROM ese_cart INNER JOIN ese_med_prod ON ese_cart.cart_prod_id= ese_med_prod.med_prod_id WHERE cart_prod_id_uid= '{$safe_id}' and cart_status=1";
 $result = $conn ? mysqli_query($conn, $sql) : false;
 $totalRecords = ($result && !is_bool($result)) ? mysqli_num_rows($result) : 0;
 $name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
 $email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
 $contact = isset($_POST['mobile']) ? strip_tags($_POST['mobile']) : '';

 //$x=strip_tags($_POST[$position[0]]);
 //print_r($x);exit;
 $comments='';
 $i=1;
 if($result && !is_bool($result))
 {
     while($row = $result->fetch_assoc())
										{
											
	
	
	$comments=$comments.'<tr><td>'. $row["cart_prod_name"].'-</td><td>['. $row["cart_extra_details"].']</td><tr>';
	
    }
}
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
<tr><td>Product Name</td><td>Etra Details</td></tr>

$comments

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
$mail->setFrom('mail.voxinnov@gmail.com', 'Contact - Essar Engineers');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('info@essarengineers.co.in');
//$mail->addAddress('sunil@alfinesolutions.com');

// Set email format to HTML
//$mail->isHTML(true); 

//Set the subject line
$mail->Subject = 'Contact - Essar Engineers BOOKING';

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
//send the message, check for errors

//insert details to database


if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    echo '<script>alert("Thanks For Contacing Us...We will be in touch soon...");window.location.href="product.php";</script>';
} else {
    echo '<script>alert("Message Sent... Thanks For Contacing Us...We will be in touch soon...");window.location.href="product.php";</script>';
}

?>
</body>
</html>
