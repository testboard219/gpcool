<?php 
 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


if($_SERVER['REQUEST_METHOD'] === "POST"){
$n=10; 
function getRandomString($n) {
return bin2hex(random_bytes($n / 2));
}
$rannum =getRandomString($n);

$name=$_POST["name"];
$amount=$_POST["amount"];
$fe=$_POST["fee"];
$email=$_POST["email"];
$cur=$_POST["currency"];


 $mail = new PHPMailer(true);
 
 try {
     //Enable verbose debug output
     $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;

     //Send using SMTP
     $mail->isSMTP();

     //Set the SMTP server to send through
     $mail->Host = 'smtp.gmail.com';
	 

     //Enable SMTP authentication
     $mail->SMTPAuth = true;

     //SMTP username
     $mail->Username = 'tolanio894@gmail.com';
	 

     //SMTP password
     $mail->Password = 'vajppmacldbzpwul';
	 

     //Enable TLS encryption;
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

     //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
     $mail->Port = 587;
	 

     //Recipients
     $mail->setFrom('admin@primeplox.com', 'primeplox notification');

     //Add a recipient
     $mail->addAddress($email,'first');

     //Set email format to HTML
     $mail->isHTML(true);

     //$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

     $mail->Subject = 'primeplox Notification';
$mail->addEmbeddedImage('ert7654edfghjbvxdfghjnbxdfghjmnxdfghjnsedrtfyuijhugfdsfghjkhgfdgghg.png', 'image_cid');
 $mail->Body    = '<html>'.'<head>'.'<title>'.'notifications'.'</title>'.'</head>'.
'<body>'.
'<center>'.
'<img src="cid:image_cid" style="width:250px; height:120px;">'.'</img>'.
'</center>'.
'<br>'.'</br>'.'</p>'.
'<p>'.'hi '.$name.'</p>'.
'<center>'.
'<p style="font-size:20px;">'.'congratulations your live trading session has'.'<br>'.
'ended with avaliable profit '.'<span style="color:green;">'.$cur.$amount.'</span>'.' with the '.'<br>'.
'current market value, you are only charged with a '.
'commission fee of 20% total profit made '.'<span style="color:red;">'.$cur.$fe.'</span>'.
' before profit can be withdrawn'.'</p>'.
'<br></br><br></br>'.
'<center>'.
'<p>'.'thank you'.'</p>'.
'</body>'.
'</html>';


 
 




$mail->send();

echo 'email notification has been sent';
 }catch(e){
 echo "email account not valid";
 }


  

}




?>