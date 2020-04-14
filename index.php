<!DOCTYPE html>

<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}
 
// Include config file
require_once "./db/config.php";
 
if(isset($_POST['log']))
    {
        $eid=$_POST['eid'];
        $pass=$_POST['pass'];
        
        $qry="select * from employee where empid='$eid'";
        
        $result = mysqli_query($link, $qry);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
//            echo "here";
            
            while($row = mysqli_fetch_assoc($result)) {
                
                echo "db".$row['empid']."in".$eid;
                
//                if(strcmp($row['empid'], $eid)==0 )
//                {
                    if(password_verify($pass, $row['password']))
                    {
                        echo "login success'";
                        $_SESSION['id']=$row['id'];
                        $_SESSION['branch']=$row['branch'];
                        $_SESSION['name']=$row['name'];
                        
                        if($row['type']==1)
                        {
                            header("location:admin.php");
                        }
                        else if($row['type']==0)
                        {
                            
                            header("location:home.php");
                        }
                        else if($row['type']==10)
                        {
                            $_SESSION["sup"]="super";
                            header("location:admin.php");
                        }
                        else
                        {
                            echo '<script>alert("Pleae wait for the approval from your Store manager");</script>';
                            echo '<script>window.location="index.php";</script>';
                        }
                        
                    }
                    else
                    {
                        echo "<script>alert('Password Mismatch');</script>";
                        
                    }
                    
//                }
//                else
//                { 
////                    echo "<br".$row['password'];
//                    echo "<script>alert('Login Failed.. Invalid Details');</script>";
//                    break;
//                }
            }
        } else {
            echo "<script>alert('Login Failed.. Invalid Details');</script>";
        }
    
        
    
    
    // Close connection
    mysqli_close($link);
}
?>
<html>
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Turnos</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
    <section class="mbr-section" id="msg-box5-3" style="background: linear-gradient(to right, #000000 0%,#880725 50%, #B82E1F  100%); padding-top: 40px; padding-bottom: 50px;">

    
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

              

              <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                  <h5 class="mbr-section-title display-2" style="color:	white;"><br>TURNOS</h5>
                  <p style="color:	white; font-family:pacifico;"><i>Schedule your shifts here!!!!!</i></p>
                  <div class="lead">

                    <form action="" method="post">
                      
                      <input type="number" id="login" value="" class="fadeIn second" name="eid" placeholder="Employee ID" required>
                      <input type="password" id="password" value="" class="fadeIn third" name="pass" placeholder="Password" required>
                      <br> <input type="submit" class="fadeIn fourth" id="logb" value="Log In" name="log">
                      
                      
                    
                   </form>

                  </div>

                  <div> 
<!--                      <a class="fadeIn fourth" href="signup.php">
                          <input type="button" value="Sign Up"></a>-->
<a class="underlineHover fadeIn fourth" href="signup.php" style="color:white;">New User?  Sign Up here</a>
                  </div>
              </div>


              


              <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                  <div class="mbr-figure"><img src="assets/images/heroimg.jpg"></div>
              </div>

            </div>
        </div>
    </div>

</section>


  
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>