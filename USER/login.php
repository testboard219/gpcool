<?php
session_start();
?>

<?
include_once "../nav.php";
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
           
        <img  class="mb-4 logo-img" src="../mirprime-logo/name.png" href="index.html" style="width:150px;height: 80px; position:relative; top:10%;border-radius:10px;  border-top-left-radius:0px;">
    </div>
            </div>
        <div class="row justify-content-center">
            
            <div class="col-sm-12 col-md-6 col-lg-5">
                <div class="card" style="position: relative; top:0%;"> 
                    <!--------form----->
                <form action="" method="POST" class="con_timeline" id="">
                
                <div class="form-group">
                        <div class="col-sm-12 justify-content-center" style=" display:flex;">
                        <h3 class=" mb-5" style="color:#1a2255;">User Login</h3></div>
                        <?php

                        $host="localhost";
                        $user="root";
                        $password="";
                        $database="Global";
                        $conn=mysqli_connect($host,$user,$password,$database);
                        if(!$conn){
                            echo "not connected";
                        }else{
                            echo "";
                        }
                            
                        if($_SERVER['REQUEST_METHOD'] === 'POST'){
                                                        
                            if(isset($_POST["submit"])){
                                 $email= $_POST["email"];
                                 $password1=$_POST["password1"];
                                 
                            }

                                $result = mysqli_query($conn, "SELECT * FROM globaltable WHERE email = '$email'");
                                $row = mysqli_fetch_assoc($result);
                                if(mysqli_num_rows($result) > 0){
                                if($password1 == $row["password1"]){
                                
                                $_SESSION["login"] = true;
                                $_SESSION["id"] = $row["id"];
                                
                                
                                header('location:../users/index.php');

                                
                                }else{

                                echo "<p style='color:red;'>incorrect credentials </p>";
                                
                                }
                                
                            
                                
                                }
                            }
                            




                            
                            
                            
                        

                        ?>
                        <label for="" class="inpu-label">Email</label>
                        <div class="input-cnt">
                            <i class="fa fa-envelope icons" style="color:#ffcc59 !important;"  aria-hidden="true"></i>
                        <input type="email" placeholder="email@example.com" name="email" class="form-control">
                        </div>
                        <br>
                        
                        <label for="" class="inpu-label">password</label>
                        <div class="input-cnt">
                        <i class="fa fa-key icons" style="color:#ffcc59 !important;" aria-hidden="true"></i>

                        <input type="password" class="form-control"  name="password1"  id="password1" placeholder="enter Password"><br>
                    </div>

                    <div class="men-g mt-4" style="display: flex; justify-content: space-between; padding: 0px 5px;">
                        <div class="one">
                            <input type="checkbox"> remember me 
                        </div>
                        <div class="two">
                            <p>forget password?</p>
                           
                        </div>
                    </div>
                        <input type="submit" value="Login" name='submit' class="btn btn-primary sce_nce">

                    </div>
                </form>
                
                <p style="text-align:center;"> Dont Have An Account Yet? <a href="signup.php">sign up </a></p>

                <hr>
                <p style="text-align:center;"> © copyright <?php echo date('Y');?> mirprime  All Rights Reserved.</p>

            </div></div>
        </div>
</div>



</body>
</html>