<!DOCTYPE html>

<?php

 require_once "./db/config.php";
// Initialize the session
if(isset($_POST['submit_email']) && $_POST['email'])
{
  $ema=$_POST['email'];
  //echo $ema;//
  $q_sel="select email,password from employee where email='$ema'";
  //echo $q_sel;//
  $select=mysqli_query($link,$q_sel);
  if(mysqli_num_rows($select)==1)
  {
    while($row=mysqli_fetch_array($select))
    {
      $email=md5($row['email']);
      $pass=md5($row['password']);
    }
    $email_link="<a href='localhost/turnose/reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
    
    $to = $ema;
    $subject = "Turnos - Password Reset";
    $txt = $email_link;
    $headers = "From: TURNOS" . "\r\n" ;


    if(mail($to,$subject,$txt,$headers))

    {
      echo '<script>alert("Check Your Email and Click on the link sent to your email";);</script>';
      header("location:index.php");
    }
    else
    {
      echo '<script>alert("Mail not sent");</script>';
    }
  }	
  else
  {
      echo '<script>alert("Mail Id not registered.Try again");</script>';
  }  
    
}
?>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   
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
  
  
  <style>
      #hh
      {
          text-align: center;
      }
      #maindiv
      {
          min-height: 250px;
      }
      input[type=email] {
          background-color: #f6f6f6;
          border: none;
          color: #0d0d0d;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 5px;
          width: 80%;
          border: 2px solid #f6f6f6;
          -webkit-transition: all 0.5s ease-in-out;
          -moz-transition: all 0.5s ease-in-out;
          -ms-transition: all 0.5s ease-in-out;
          -o-transition: all 0.5s ease-in-out;
          transition: all 0.5s ease-in-out;
          -webkit-border-radius: 5px 5px 5px 5px;
          border-radius: 5px 5px 5px 5px;
        }
  </style> 
  
</head>
<body>
    <section class="mbr-section" id="msg-box5-3" style="background-color: rgb(255,255,254); padding-top: 0px; padding-bottom: 0px;">

    
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

              

              <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                  <h5 class="mbr-section-title display-2" id="hh" style="text-align:centre;"><br>TURNOS</h5>
				  
                  <div class="lead">

                    

                  </div>

                  <div> 
                     

                  </div>
              </div>



            </div>
        </div>
    </div>

</section>
    <div class="wrapper fadeInDown" id="maindiv">
        <div id="formContent">
              
            <div class="fadeIn first">
                <form method="post" action=""><br><br>
                    <h5><b>Reset Your Password </b>&nbsp;<i class='fas fa-hand-point-down'></i></h5><br>
                    <input type="email" name="email" placeholder="Enter your email"><br><br>
                    <input type="submit" name="submit_email" value="Send reset link">
                </form>
                <br><br><a href="index.php" style="float:left;color:rgb(193,138,32);margin-left:25px;">← Back to Login Page</a><br><br>
            </div>
        </div>
    </div>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>