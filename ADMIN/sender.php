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
$email=$_POST["email"];
$plan=$_POST["plan"];
$amount = $_POST['amount'];
$currency=$_POST['currency'];
$date=date('D-M-Y:h i:s');


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
     $mail->Username = 'mirprime219@gmail.com';
	 

     //SMTP password
     $mail->Password = 'hntuxmzzbrqijqkh';
	 

     //Enable TLS encryption;
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

     //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
     $mail->Port = 587;
	 

     //Recipients
     $mail->setFrom('mirprime219@gmail.com', 'plan notification');

     //Add a recipient
     $mail->addAddress($email,'first');

     //Set email format to HTML
     $mail->isHTML(true);

     //$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

     $mail->Subject = 'topup Notification';
$mail->addEmbeddedImage('mirlogorr6g5ef4h6itg3w543sg64h758j6hh6rvrseb74e6g7h58jjufh5dyegsyr.png', 'image_cid');
 $mail->Body    = '<html>'.'<head>'.'<title>'.'notifications'.'</title>'.'</head>'.
'<body>'.
'<center>'.
'<img src="cid:image_cid" style="width:250px; height:120px;">'.'</img>'.
'<h2 style="color:blue;text-transform:uppercase;">'.' you invested on '.$plan.' and recieved '.$currency.$amount.'</h2>'.
'<p style="text-align:left;">'.'hi '.$name.'</p>'.
'<p style="font-size:20px;">'.'your '.$currency.$amount.' has been recieved and deposited into your profit wallet'.'<br>'. 
'here are the details of transaction'.'<br>'.'in your wallet within 24hours'.' </p>'.
'<u>'.'<b style="text-transform:uppercase;">'.'Details:'.'</b>'.'</u>'.
'<p style="margin-left:2px;">'.'Transaction ID:'.$rannum.'<br>'.
'Date:'.$date.'<br>'.
'Amount:'.$currency.$amount.
'<br>'.'</br>'.'</p>'.
'<p>'.'have any question kindly contact our customer service'.'<br>'.'--the mirprime team'.'</p>'.
'<center>'.
'</body>'.
'</html>';


 
 




$mail->send();

echo 'email notification has been sent';
 }catch(e){
 echo "didn't yet";
 }


  

}




?>