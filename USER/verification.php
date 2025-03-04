<?php
session_start();
?>
<?php

 
 if (isset($_POST["verify_email"]))
 {
     $email = $_POST["email"];
     $verification_code = $_POST["verification_code"];

     // connect with database
    // $conn = mysqli_connect("localhost", "otptest", "root", "");
     $servername = "localhost";
     $password="";
     $username="root";
     
     $database="global";
     
     $conn =mysqli_connect($servername,$username,$password,$database);

     // mark email as verified
     $sql = "UPDATE approvetableone SET verification_date = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
     $result  = mysqli_query($conn, $sql);

     if (mysqli_affected_rows($conn) == 0)
     {
         echo "invalid code";
     }else{

    header("location:../USER/activated.php");
  
   //header("location:../users/index.php");
   
     exit();
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css" integrity="sha512-NtU/Act0MEcVPyqC153eyoq9L+UHkd0s22FjIaKByyA6KtZPrkm/O5c5xzaia4pyCfReCS634HyQ7tJwKNxC/g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="lgin.css">
    <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> 

    <title></title>
</head>
<body>
    <!---marque-->
    <div class="livecoinwatch-widget-5" lcw-base="USD" lcw-color-tx="#999999" lcw-marquee-1="coins" lcw-marquee-2="movers" lcw-marquee-items="10" ></div>

    <!----------mine--->
    <div class="container">
        <div class="row mt-20 justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 justify-content-center" style=" align-items: center; display:flex;"> 
           
        <img  class="mb-4 logo-img" src="../mirprime-logo/name.png" href="index.html" style="width:200px;height: 80px; position:relative; top:10%;border-radius:10px;  border-top-left-radius:0px;">
    </div>
            </div>
        <div class="row justify-content-center">
            
            <div class="col-sm-12 col-md-6 col-lg-5">
                <div class="card" style="position: relative; top:0%;"> 
                    <!--------form----->
                <form action="" method="POST" class="con_timeline" id="">
                
                <div class="form-group">
                        <div class="col-sm-12 justify-content-center" style=" display:flex;">
                        <h3 class=" mb-5" style="color:#1a2255;">Email Verification</h3></div>
    
    
    
  


                            
                            
                            
                        


                        <label for="" class="inpu-label"><h5>Code Authentication</h5></label>
                        <div class="input-cnt">
                        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
                            <i class="fa fa-envelope icons" style="color:#ffcc59 !important;"  aria-hidden="true"></i>
                        <input type="text" placeholder="Enter verification code" name="verification_code" class="form-control">
                        
                        
                        </div>
                        <br>
                        
                        
                        <input type="submit" name="verify_email" value="Verify Email"  name='submit' class="btn btn-primary sce_nce">
                        

                    </div>
                </form>
                
                <!-----<p style="text-align:center;"> Dont Have An Account Yet? <a href="signup.php">sign up </a></p>------>

                <hr>
                <p style="text-align:center;"> © copyright 2024  mirprime  All Rights Reserved.</p>

            </div></div>
        </div>
</div>



</body>
</html>