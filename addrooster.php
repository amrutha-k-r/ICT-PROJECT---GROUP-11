<?php
    session_start();
    require_once "./db/config.php";
    if(isset($_POST['branch_sel']))
    {
        $ad_branch=$_POST['branch_sel'];
    }
    else
    {
        $ad_branch=$_SESSION['branch'];
    }
    if(isset($_POST['save']))
    {
        $em_id=$_POST['eidd'];
        $r_date=$_POST['r_date'];
        //$r_shift=$_POST['r_shift'];
        $r_shift="From ".$_POST['s1'].":".$_POST['s2']." ".$_POST['s3']." To ".$_POST['s4'].":".$_POST['s5']." ".$_POST['s6'];
        $ass_branch=$_POST['ass_branch'];
        
        $ins_qry="insert into schedule(empid,s_date,shift,branch) values($em_id,'$r_date','$r_shift','$ass_branch')";
        
        //echo $ins_qry;
        
        if (mysqli_query($link, $ins_qry)) {
            $message="A new roster has been scheduled. View your roster for further details.";
            $msg_qry="insert into messages(empid,message) values($em_id,'$message')";
            if (mysqli_query($link, $msg_qry)) {
              echo "<script>alert('New record created successfully');<script>";
            }
            else{
              echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        header("location:addroster.php");
        
    }

?>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.11.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <!--<link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">-->
  
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
      .ros
      {
          height: 25px;
          width: 100%;
          /*padding: 2px;*/
          /*margin: 2px;*/
      }
      tr {
            border-bottom: 1pt solid black;
         }
       select{
          background-color: #f6f6f6;
          border: none;
          color: #0d0d0d;
          /*padding: 15px 32px;*/
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 5px;
          /*width: 80%;*/
          border: 2px solid #f6f6f6;
          -webkit-transition: all 0.5s ease-in-out;
          -moz-transition: all 0.5s ease-in-out;
          -ms-transition: all 0.5s ease-in-out;
          -o-transition: all 0.5s ease-in-out;
          transition: all 0.5s ease-in-out;
          -webkit-border-radius: 5px 5px 5px 5px;
          border-radius: 5px 5px 5px 5px;
          
          -moz-appearance:textfield;
          /*display: inline-block;*/
     }
     select:invalid { color: gray; }
     #green{
            background-color: #2b542c;
            margin: 1px;
            padding: 5px;
        }
        
  </style>
  
</head>
<body>
<section id="menu-4">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        
                        <a class="navbar-caption text-black" href="">Turnos</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item dropdown"><a class="nav-link link" href="admin.php">Home</a></li>
                        <li class="nav-item dropdown"><a class="nav-link link" href="">Add Employee</a></li>
                        <!--<li class="nav-item"><a class="nav-link link" href="">Leave Requests</a></li>-->
                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="" aria-expanded="false">LEAVE</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="leavereq.php">Leave Requests</a>
                                    <a class="dropdown-item" href="denreq.php">Denied</a>
                                    <a class="dropdown-item" href="sanreq.php">Sanctioned</a>
                                    <a class="dropdown-item" href="hisleave.php">History</a>
                                </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="" aria-expanded="false">ROSTER</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="addroster.php">Add Roster</a>
                                    <a class="dropdown-item" href="viewroster.php">Edit Roster</a>
                                </div>
                        </li>
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-success-outline btn-success" href="logout.php">Log Out</a></li>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href=""></a></section>
<section class="mbr-section mbr-after-navbar" id="pricing-table2-6" style="background-color: rgb(250, 197, 28); padding-top: 120px; padding-bottom: 120px;">

    

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 text-xs-center">
<!--                  <h3 class="mbr-section-title display-2">PRICING TABLE</h3>
                  <small class="mbr-section-subtitle">Pricing table with four columns and solid color background.</small>-->

                

              </div>
          </div>
      </div>
    </div>

    <div class="mbr-section mbr-section-nopadding mbr-price-table">
      <div class="row">
            <!--<div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-12 col-xl-6 col-xl-offset-3">-->
                <div class="mbr-plan card text-xs-center" id="maindiv">
                
            <caption><h1 align="center">Add Rooster</h1></caption>
          
            <table align="center" cellpadding="8px" >
                                            
                                            <tr>
                                                <!--<th>Employee ID</th>-->
                                                <th >Name</th>
                                                <!--<th width="20%">Branch</th>-->
                                                <th >Date</th>
                                                <th >Shift</th>
                                                <!--<th>Assign to</th>-->
                                                <th >Save</th>
                                                
                                            </tr>
                                        <?php
                                                
                                                //selecting branch
                                                
                                                $qry="select * from employee where type=0 and branch='$ad_branch'";
                                                $result = mysqli_query($link, $qry);

                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row
                                        //            echo "here";
                                                    while($row = mysqli_fetch_array($result)) {
                                                        
                                                       ?>
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                                                        <tr>
                                                            
                                                            <td>
                                                                <input type="hidden" name="eidd" value="<?php echo $row['id'];?>">
                                                                <input type="hidden" name="name" value="<?php echo $row['name'];?>"><?php echo $row['name'];?>
                                                                <input type="hidden" name="branch" value="<?php echo $ad_branch;?>">
                                                            </td>

                                                            <!--<td><?php // echo $row['branch'];?></td>-->

                                                            <td><input type="date" name="r_date" required class="ros"></td>
                                                            <td>
                                                                <div class="form-inline">
                                                                    <div class="form-group col-lg-12">
                                                                <!--<input type="text" name="r_shift" class="ros" required>-->
                                                                        <label>From</label>
                                                                        <select class="" name="s1" id="s1" required>
                                                                            <option >HH</option>
                                                                            <option value="1">1</option>                                                                  
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>                                                                  
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>
                                                                        <select class="" name="s2" id="s2" required>
                                                                            <option >MM</option>
                                                                            <option value="00">00</option>
                                                                            <option value="15">15</option>
                                                                            <option value="30">30</option>
                                                                            <option value="45">45</option>
                                                                        </select>
                                                                        <select class="" name="s3" id="s3" required>
                                                                            <option >AM/PM</option>
                                                                            <option value="AM">AM</option>
                                                                            <option value="PM">PM</option>
                                                                        </select>
                                                                        <!--<hr>-->
                                                                        <br>
                                                                        <label>To</label>
                                                                        <select class="" name="s4" id="s4" required>
                                                                            <option >HH</option>
                                                                            <option value="1">1</option>                                                                  
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>                                                                  
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>
                                                                        <select class="" name="s5" id="s5" required>
                                                                            <option >MM</option>
                                                                            <option value="00">00</option>
                                                                            <option value="15">15</option>
                                                                            <option value="30">30</option>
                                                                            <option value="45">45</option>
                                                                        </select>
                                                                        <select class="" name="s6" id="s6" required>
                                                                            <option >AM/PM</option>
                                                                            <option value="AM">AM</option>
                                                                            <option value="PM">PM</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </td>
<!--                                                            <td>
                                                                <select id="branch" class="fadeIn second" name="ass_branch" required>
                                                                    <option value="" disabled selected hidden>Branch</option>
                                                                    <option value="Myer Centre">Myer Centre</option>
                                                                    <option value="Queens Street">Queens Street</option>
                                                                    <option value="Kelvin Grove">Kelvin Grove</option>
                                                                    <option value="Coopers Plains">Coopers Plains</option>
                                                                </select>
                                                            </td>-->

                                                            <td><input type="submit" value="Save" name="save" id="green"></td>

                                                           

                                                                                                               


                                                        </tr>
                                                         </form>
                                                       <?php 
                                                    }
                                                }
                                               


                                        ?>
                                            
                                             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                                                <tr>
                                                    <td colspan="9">
                                                        <br>
                                                        <label>To view Roster of Other Branch</label>
                                                        <select  class="fadeIn first" name="branch_sel" required onchange="this.form.submit()">
                                                            <option value="" disabled selected hidden>Select Branch</option>
                                                            <option value="Myer Centre">Myer Centre</option>
                                                            <option value="Queens Plaza">Queens Plaza</option>
                                                            <option value="Kelvin Grove">Kelvin Grove</option>
                                                            
                                                        </select>

                                                        <br>
                                                    </td>
                                                </tr>
                                            </form>

                                </table>	
                                
            
          
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
  </body>
</html>

