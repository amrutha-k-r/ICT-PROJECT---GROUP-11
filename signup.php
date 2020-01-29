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
    <style>
        html {
            background-color: #56baed;
        }

        body {
          font-family: "Poppins", sans-serif;
          height: 100vh;
          background-image: url(images/s_bg.jpg);
          background-position: center; /* Center the image */
          background-repeat: no-repeat;
        }

        a {
          color: #92badd;
          display:inline-block;
          text-decoration: none;
          font-weight: 400;
        }

        h2 {
          text-align: center;
          font-size: 16px;
          font-weight: 600;
          text-transform: uppercase;
          display:inline-block;
          margin: 40px 8px 10px 8px; 
          color: #cccccc;
        }



/* STRUCTURE */

        .wrapper {
          display: flex;
          align-items: center;
          flex-direction: column; 
          justify-content: center;
          width: 100%;
          min-height: 100%;
          padding: 20px;
        }

        #formContent {
          -webkit-border-radius: 10px 10px 10px 10px;
          border-radius: 10px 10px 10px 10px;
          background: #fff;
          padding: 30px;
          width: 90%;
          max-width: 450px;
          position: relative;
          padding: 0px;
          -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
          box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
          text-align: center;
        }

        #formFooter {
          background-color: #f6f6f6;
          border-top: 1px solid #dce8f1;
          padding: 25px;
          text-align: center;
          -webkit-border-radius: 0 0 10px 10px;
          border-radius: 0 0 10px 10px;
        }



/* TABS */

        h2.inactive {
          color: #cccccc;
        }

        h2.active {
          color: #0d0d0d;
          border-bottom: 2px solid #5fbae9;
        }



/* FORM TYPOGRAPHY*/

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

        input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
          background-color: #39ace7;
        }

        input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
          -moz-transform: scale(0.95);
          -webkit-transform: scale(0.95);
          -o-transform: scale(0.95);
          -ms-transform: scale(0.95);
          transform: scale(0.95);
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
          width: 95%;
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
        

        input[type=text]:focus {
          background-color: #fff;
          border-bottom: 2px solid #5fbae9;
        }

        input[type=text]:placeholder {
          color: #cccccc;
        }



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
        .fadeInDown {
          -webkit-animation-name: fadeInDown;
          animation-name: fadeInDown;
          -webkit-animation-duration: 1s;
          animation-duration: 1s;
          -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInDown {
          0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
          }
          100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
          }
        }

        @keyframes fadeInDown {
          0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
          }
          100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
          }
        }

/* Simple CSS3 Fade-in Animation */
        @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

        .fadeIn {
          opacity:0;
          -webkit-animation:fadeIn ease-in 1;
          -moz-animation:fadeIn ease-in 1;
          animation:fadeIn ease-in 1;

          -webkit-animation-fill-mode:forwards;
          -moz-animation-fill-mode:forwards;
          animation-fill-mode:forwards;

          -webkit-animation-duration:1s;
          -moz-animation-duration:1s;
          animation-duration:1s;
        }

        .fadeIn.first {
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            animation-delay: 0.4s;
          }

          .fadeIn.second {
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            animation-delay: 0.6s;
          }

          .fadeIn.third {
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            animation-delay: 0.8s;
          }

          .fadeIn.fourth {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            animation-delay: 1s;
          }

        /* Simple CSS3 Fade-in Animation */
        .underlineHover:after {
          display: block;
          left: 0;
          bottom: -10px;
          width: 0;
          height: 2px;
          background-color: #56baed;
          content: "";
          transition: width 0.2s;
        }

        .underlineHover:hover {
          color: #0d0d0d;
        }

        .underlineHover:hover:after{
          width: 100%;
        }



        /* OTHERS */

        *:focus {
            outline: none;
        } 

        #icon {
          width:60%;
        }
        
        select:invalid { color: gray; }
    </style>
        
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
    </head>
    <body>
        
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
                <a class="underlineHover" href="index.php">Already Registered?</a>
              </div>

            </div>
        </div>
    </body>
</html>