<!DOCTYPE html>
<?php

    require_once "./db/config.php";
    
    if(isset($_POST['reg']))
    {
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        
        $email=$_POST['email'];
        $mob=$_POST['mob'];
        
        $eid=$_POST['eid'];
        $designation=$_POST['designation'];
        
        $branch=$_POST['branch'];
        
        $param_password = password_hash($pass, PASSWORD_DEFAULT);
        
        $sql="insert into employee (name,empid,password,email,mob,branch,designation) values('$name',$eid,'$param_password','$email',$mob,'$branch','$designation');";
        
               
        if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
            header("location:login.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        
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
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <style>
       select{
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
          
          -moz-appearance:textfield;
          }
          
          input[type=password], input[type=email] {
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
        
         a {
          color: #92badd;
          display:inline-block;
          text-decoration: none;
          font-weight: 400;
        }
        
        input[type=number] {
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
          
          -moz-appearance:textfield;
          }
          
          input[type=text] {
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
        
        select:invalid { color: gray; }
        
        input[type=button], input[type=submit], input[type=reset]  {
          background-color: #56baed;
          border: none;
          color: white;
          padding: 15px 50px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          text-transform: uppercase;
          font-size: 13px;
          -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
          box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
          -webkit-border-radius: 5px 5px 5px 5px;
          border-radius: 5px 5px 5px 5px;
          margin: 5px 20px 40px 20px;
          -webkit-transition: all 0.3s ease-in-out;
          -moz-transition: all 0.3s ease-in-out;
          -ms-transition: all 0.3s ease-in-out;
          -o-transition: all 0.3s ease-in-out;
          transition: all 0.3s ease-in-out;
        }
  </style> 
  
</head>
<body>
<section id="menu-4">

<!--    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        
                        <a class="navbar-caption text-black" href="">Turnos</a>
                    </div>

                </div>
                
            </div>

        </div>
    </nav>-->

</section>

<section class="engine"><a rel="external" href=""></a></section><section class="mbr-section mbr-after-navbar" id="pricing-table2-6" style="background-color: rgb(250, 197, 28); padding-top: 120px; padding-bottom: 120px;">

    

    

    <div class="mbr-section mbr-section-nopadding mbr-price-table">
      <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-12 col-xl-6 col-xl-offset-3">
                
                
<div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->

              <!-- Icon -->
              <div class="fadeIn first">
                  <!--<img src="images/logo.jpg" id="icon" alt="User Icon" height="50" width="50" />-->
                  <h3>Sign Up Here</h3>
              </div>

              <!-- Login Form -->
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="f1">
                  <input type="text" id="name" class="fadeIn second" name="name" placeholder="Employee Name" required>
                  <input type="text" id="eid" class="fadeIn second" name="eid" placeholder="Employee ID" required>
                  
                  <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email" required>
                  <input type="number" id="mob" class="fadeIn second" name="mob" placeholder="Mobile" required>
                  
                  <!--<input type="text" id="designation" class="fadeIn second" name="designation" placeholder="Designation" required>-->
                  <!--<input type="text" id="branch" class="fadeIn second" name="branch" placeholder="Branch" required>-->
                  
                  <select id="designation" class="fadeIn second" name="designation" required>
                      <option class="sel" value="" disabled selected hidden>Designation</option>
                      <option value="Manager">Manager</option>
                      <option value="Assistant Manager">Assistant Manager</option>
                      <option value="Employee">Employee</option>
                  </select>
                  
                  <select id="branch" class="fadeIn second" name="branch" required>
                      <option value="" disabled selected hidden>Branch</option>
                      <option value="Myer Centre">Myer Centre</option>
                      <option value="Queens Street">Queens Street</option>
                      <option value="Kelvin Grove">Kelvin Grove</option>
                      <option value="Coopers Plains">Coopers Plains</option>
                  </select>
                  
                  <input type="password" id="pass" class="fadeIn third" name="pass" placeholder="Password" required>
                  <input type="password" id="pass1" class="fadeIn third" name="pass1" placeholder="Confirm Password" required>
                  <table border="0" align="center">
                      <tr>
                          <td><input type="button" class="fadeIn fourth" value="Register" onclick="veripass()" id="r1" name="reg"></td>
                          <td><input type="reset" class="fadeIn fourth" value="Clear"></td>
                      </tr>
                  </table>  
<!--                <input type="submit" class="fadeIn fourth" value="Register">
                <input type="reset" class="fadeIn fourth" value="Clear">-->
              </form>

              <!-- Remind Passowrd -->
              <div id="formFooter">
                <a class="underlineHover fadeIn second" href="index.php">Already Registered?</a>
              </div>

            </div>
        </div>
</div>
            </div>
            
            
            
          </div>
    </div>

</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  
  <script>
            function veripass()
            {
                p=document.getElementById('pass');
                q=document.getElementById('pass1');
                if(p.value==q.value)
                {
                    document.getElementById("r1").type="submit";
                }
                else
                {
                    alert("Password entered are different. It must be same.");
                    p.focus();
                    
                }
            }
        </script>
  
  </body>
</html>


