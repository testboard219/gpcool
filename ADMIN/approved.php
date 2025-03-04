<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=Global','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);




//$id=$_GET['id']  ?? null;
$id=$_POST['id']  ?? null;
if(!$id){
  header('location:approve.php');
    
};



$statement = $pdo->prepare('SELECT * FROM approvetableone WHERE id =:id');
$statement->bindValue(':id',$id);
$statement->execute();
$products = $statement->fetch(PDO::FETCH_ASSOC);


$error=[];

$email=$products['email'];
$fname=$products['fname'];
$lname=$products['lname'];
$number=$products['number'];
$country=$products['country'];
$profit=$products['profit'];
$ballance=$products['ballance'];
$valuei=$products['valuei'];
$valued=$products['valued'];
$bonus=$products['bonus'];
$id=$products['id']; 
$plan=$products['plan']; 
$date= date('d-m-y H:i:s');
$ip=$_SERVER['REMOTE_ADDR'];
$verify=$products['verify'];
$currency=$products['currency'];
$withdraw=$products['withdraw'];
$rbonus=$products['rbonus'];

$date=date('d-m-Y');




?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$port ="3307";
$dbname ="global";



// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 echo " database Connected ";
 echo "<br />";
$id= $_POST['id'];


echo $fname;
echo $id;
echo $email;

echo $date;


  $vt= "DELETE FROM approvetableone  WHERE id = $id ";
 
//$insertintodb = "INSERT INTO globaltable (id,email,fname,lname,country,date,ip,number,ballance,profit,bonus,plan,withdraw,password1,verification_code, verification_date, valuei,valued) 
 //SELECT id,fname,lname,email,country,date,ip,number,ballance,profit,bonus,plan,withdraw,password1,verification_code, verification_date, valuei,valued FROM approvetable";
                            
$insertintodb = "INSERT INTO globaltable (`id`, `image`, `fname`, `lname`, `email`, `number`, `password1`, `date`, `ip`, `ballance`, `profit`, `bonus`, `plan`, `withdraw`, `rbonus`, `currency`, `country`, `verification_code`, `verification_date`, `valuei`, `valued`, `verify`, `ccview`) 
 SELECT id,NULL,fname,lname,email,number,password1,date,ip,ballance,profit,bonus,plan,withdraw,rbonus,currency,country,verification_code, verification_date, valuei,valued,verify,ccview FROM approvetableone WHERE id = $id";
 
 
 
 if(mysqli_query($conn,$insertintodb)){
                mysqli_query($conn,$vt);
             header('location:approve.php');

/////////////////////////////////////////////////////////////////////////////////////////////


//Instantiation and passing `true` enables exceptions
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
     $mail->setFrom('mirprime219@gmail.com', 'mirprime');

     //Add a recipient
     $mail->addAddress($email, $fname);

     //Set email format to HTML
     $mail->isHTML(true);

     //$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

     $mail->Subject = 'Account Approval';
     $mail->Body    = '<html>'.'<head>'.'<title>'.'notifications'.'</title>'.'</head>'.
'<body>'.
'<center>'.

'<h2 style="color:blue;text-transform:uppercase;">'.' welcome your account has been approved'.'</h2>'.
'<p style="text-align:left;">'.'hello '.$fname.'</p>'.
'<p style="text-align:center;">'.'congratulations!!!!'.'<br>'.'your mirprime account has been approved '.'<br>'. 
'you can now surf our platform to earn lots of profits on our long and short term trade'.'<br>'.'login your account with the email and password you signed up with'.'</p>'.
'<u>'.'<b style="text-transform:uppercase;">'.'Details:'.'</b>'.'</u>'.
'<p style="margin-left:2px;">'.'Username:'.$email.'<br>'.
'date:'.$date.'<br>'.
'Password:'.'(the password you set when signing up)'.
'<br>'.'</br>'.'</p>'.
'<p>'.'Do not give out your username or password to anyone'.'<br>'.'--the mirprime team'.'</p>'.
'<button class="" href="">'.'Login'.'</button>'.
'<center>'.
'</body>'.
'</html>';

     $mail->send();




$id = $_SESSION['id'];

} catch (Exception $e) { 
echo "didn't go true try again";
}



}

////////////////////////////////////////////////////////////////////////////////////////////             
 else{
  
    echo 'try again';

  
 

}

                              
      


?>


