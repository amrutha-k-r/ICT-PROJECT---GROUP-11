<!DOCTYPE html>
<?php

    require_once "./db/config.php";
    session_start();
    $branch=$_SESSION['branch'];
    
    if(isset($_POST['branch_sel']))
    {
        $sel_branch=$_POST['branch_sel'];
    }
    
    else
    {
        $sel_branch=$branch;
    }
    
    if(isset($_POST['e_save']))
    {
        $s_id=$_POST['s_id'];
        $e_name=$_POST['e_name'];
        $e_date=$_POST['e_date'];
        
//        $e_shift=$_POST['e_shift'];
        $e_shift=$_POST['s1'].":".$_POST['s2']." ".$_POST['s3']." - ".$_POST['s4'].":".$_POST['s5']." ".$_POST['s6'];
        $e_branch=$_POST['e_branch'];
        
        $up_qry="update schedule set empid=$e_name,s_date='$e_date',shift='$e_shift',branch='$e_branch' where id=$s_id";
        
//        echo $up_qry;
        
        if (mysqli_query($link, $up_qry)) {
            echo "<script>alert('Rooster edited successfully');<script>";
            header("location:viewroster.php");
//            echo "<script>window.location='rooster.php'</script>";
        } else {
            echo "Error: " . mysqli_error($link);
        }
        
        
    }

?>

<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">-->
  <meta name="description" content="Website Maker Description">
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
      #hdiv{
            z-index: 0;
            
            visibility: hidden;
            
            top: 200px;
            margin-left:  10%;
            position :fixed;
            padding-top: 30px;
            
            background-color: #F1C050;
            width: 80%;
            height: 150px;
            border-radius: 5px;
            border-style: solid;
            border-color: #56baed ;
            
        }
        #formContent {
          -webkit-border-radius: 10px 10px 10px 10px;
          border-radius: 10px 10px 10px 10px;
          background: #fff;
          padding: 30px;
          width: 100%;
          /*max-width: 600px;*/
          position: relative;
          padding: 0px;
          -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
          box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
          text-align: center;
	  margin-left:0px;
	  margin-top:5%;
          
          z-index: 1;
          
        }
        tr{
          height: 15px;
        }
         tr:nth-child(even) {
             background-color: #F1C050;

        }
        th{
            background-color: rgb(255,153,0);
            height: 20px;
            font-size: large;
        }
        .trr1:hover{
            background-color: #cc9900;
            /*height: 40px;*/
        }
        
        table
        {
            align-content: center;
            text-align: center;
            padding: 15px;
            background-color: #fff;
            
        }
        
         input[type=text] {
             
             width: 100%;
             height: 8px;
         }
         
        #green{
            background-color: #2b542c;
            margin: 1px;
            padding: 5px;
        }
        
        #red{
            background-color: #cc0033;
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
                        <li class="nav-item dropdown">
                            <?php
                            
                                if(isset($_SESSION['sup']))
                                {
                            ?>
                                <a class="nav-link link" href="manemp.php">Add Employee</a></li>
                            <?php
                                }
                            ?>
                        <!--<li class="nav-item"><a class="nav-link link" href="">Leave Requests</a></li>-->
                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="" aria-expanded="false">Leave</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="leavereq.php">Requests</a>
                                    <a class="dropdown-item" href="denreq.php">Denied</a>
                                    <a class="dropdown-item" href="sanreq.php">Sanctioned</a>
                                    <a class="dropdown-item" href="hisleave.php">History</a>
                                </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="" aria-expanded="false">Roster</a>
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

<section class="engine"><a rel="external" href="">Web Page Builder</a></section>
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

<caption><h1 align="center">View Rooster of <?php echo "$sel_branch"; ?></h1></caption>
        <table align="center" style="width: 660px" border="1" >
                                            
<!--                                           
                <?php
                        $k=0;

                        //selecting branch
//date_default_timezone_set('Australia/Melbourne');
                        $datee=date("Y-m-d");
//                                              
                        $day1=date('Y-m-d', strtotime($datee .' -3 day'));
                        $day2=date('Y-m-d', strtotime($datee .' -2 day'));
                        $day3=date('Y-m-d', strtotime($datee .' -1 day'));
                        $day4=date('Y-m-d', strtotime($datee .' +1 day'));
                        $day5=date('Y-m-d', strtotime($datee .' +2 day'));
                        $day6=date('Y-m-d', strtotime($datee .' +3 day'));


                      ?>


                        <tr>
                        <!--<th>Employee ID</th>-->
                        <th>Employee Name</th>
                        <th><?php echo $day1; ?></th>
                        <th><?php echo $day2; ?></th>
                        <th><?php echo $day3; ?></th>
                        <th><?php echo $datee; ?></th>
                        <th><?php echo $day4; ?></th>
                        <th><?php echo $day5; ?></th>
                        <th><?php echo $day6; ?></th>
                        <!--<th></th>-->

                        <!--<th>Assign to</th>-->
                        <th>Edit</th>

                    </tr>

                     <?php   


                     $qry="SELECT 
id,empid,
MAX(CASE WHEN `s_date` = '$day1' THEN concat(`shift`,'-',`id`) ELSE NULL END) AS '$day1',
MAX(CASE WHEN `s_date` = '$day2' THEN concat(`shift`,'-',`id`) ELSE NULL END) AS '$day2',
MAX(CASE WHEN `s_date` = '$day3' THEN concat(`shift`,'-',`id`) ELSE NULL END) AS '$day3',
MAX(CASE WHEN `s_date` = '$datee' THEN concat(`shift`,'-',`id`) ELSE NULL END) AS '$datee',
MAX(CASE WHEN `s_date` = '$day4' THEN concat(`shift`,'-',`id`) ELSE NULL END) AS '$day4',
MAX(CASE WHEN `s_date` = '$day5' THEN concat(`shift`,'-',`id`) ELSE NULL END) AS '$day5',
MAX(CASE WHEN `s_date` = '$day6' THEN concat(`shift`,'-',`id`) ELSE NULL END) AS '$day6'        

FROM `schedule` where branch='$sel_branch' and s_date between '$day1' and '$day6'
GROUP BY empid
HAVING '$day1' IS NOT NULL AND '$day2' IS NOT NULL AND '$day3' IS NOT NULL
AND '$datee' IS NOT NULL AND '$day4' IS NOT NULL AND '$day5' IS NOT NULL AND '$day6' IS NOT NULL
ORDER BY empid";
//                                                echo $qry;
                        $result = mysqli_query($link, $qry);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                //            echo "here";
                            while($row = mysqli_fetch_array($result)) {

                                 $det_sel_qry="select * from employee where id=". $row['empid'];
//                                                         echo $det_sel_qry;
                                 $res_em=mysqli_query($link, $det_sel_qry);
                                 if (mysqli_num_rows($res_em) > 0) {

                            while($emrow = mysqli_fetch_array($res_em)) {

                                $btn_id="b_".$k;
                                $d_id="d_".$k;
                                $sht_id="sht_".$k;
                                $div_id="div_".$k;

                                $sid="sid_".$k;
                                $ebr="ebr_".$k;
                                $nam="nam_".$k;

                               ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                        <tr class="trr1">

                                    <td><?php echo $emrow['name'];?>
                                        <br> 
                                        <br> <input type="hidden" id="<?php echo $nam; ?>"  value="<?php echo $emrow['id'];?>" >

                                    </td>

                                    <td><?php if( $row[$day1]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
                                                $data= $row[$day1];
                                                $t_sid = substr($data, strpos($data, "-") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "-"));
//                                                                        echo "<br>".$t_sid;
                                                echo $t_shift;

//                                                                    echo "<input type='text' id='$sid'  value='$t_sid'>";
                                                echo "<br><input type='radio' value=$t_sid name='op' id='op1' onclick='asign(this.value)'>";
                                            }
                                         ?>


                                    </td>

                                    <td><?php 

                                        if( $row[$day2]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
                                                $data= $row[$day2];
                                                $t_sid = substr($data, strpos($data, "-") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "-"));
//                                                                        echo "<br>".$t_sid;
                                                echo $t_shift;

//                                                                        echo "<input type='text' id='$sid'  value='$t_sid'>";
                                                echo "<br><input type='radio' value=$t_sid name='op' id='op2' onclick='asign(this.value)'>";
                                            }
                                    ?>
                                       <br> 
                                        <input type="hidden" id="<?php echo $ebr; ?>"  value="<?php echo $branch;?>">
                                    </td>
                                    <td><?php 
                                            if( $row[$day3]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
                                                $data= $row[$day3];
                                                $t_sid = substr($data, strpos($data, "-") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "-"));
//                                                                        echo "<br>".$t_sid;
                                                echo $t_shift;

//                                                                        echo "<input type='text' id='$sid'  value='$t_sid'>";
                                                echo "<br><input type='radio' value=$t_sid name='op' id='op3' onclick='asign(this.value)'>";
                                            }
                                        ?>

                                    </td>


                                    <td><?php 
                                        if( $row[$datee]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
                                                $data= $row[$datee];
                                                $t_sid = substr($data, strpos($data, "-") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "-"));
//                                                                        echo "<br>".$t_sid;
                                                echo $t_shift;

//                                                                        echo "<input type='text' id='$sid'  value='$t_sid'>";
                                                echo "<br><input type='radio' value=$t_sid name='op' id='op4' onclick='asign(this.value)'>";
                                            }
                                    ?>

                                    </td>
                                    <td><?php 

                                        if( $row[$day4]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
                                                $data= $row[$day4];
                                                $t_sid = substr($data, strpos($data, "-") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "-"));
//                                                                        echo "<br>".$t_sid;
                                                echo $t_shift;

//                                                                        echo "<input type='text' id='$sid'  value='$t_sid'>";
                                                echo "<br><input type='radio' value=$t_sid name='op' id='op5' onclick='asign(this.value)'>";
                                            }

                                    ?>

                                    </td>
                                    <td><?php 

                                        if( $row[$day5]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
                                                $data= $row[$day5];
                                                $t_sid = substr($data, strpos($data, "-") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "-"));
//                                                                        echo "<br>".$t_sid;
                                                echo $t_shift;

//                                                                        echo "<input type='text' id='$sid'  value='$t_sid'>";
                                                echo "<br><input type='radio' value=$t_sid name='op' id='op6' onclick='asign(this.value)'>";
                                            }

                                    ?>

                                    </td><td><?php 
                                        if( $row[$day6]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
//                                                                        echo $row[$day6];
                                                $data = $row[$day6];    
                                                $t_sid = substr($data, strpos($data, "-") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "-"));
//                                                                        echo "<br>".$t_sid;
                                                echo $t_shift;

//                                                                        echo "<input type='text' id='$sid'  value='$t_sid'>";
//                                                                        echo "<br>".$row['id'];
                                                echo "<br><input type='radio' value=$t_sid name='op' id='op7' onclick='asign(this.value)'>";
                                            }
                                    ?>

                                    </td>


                                    <td><input type="button" class="cus_but" value="Edit" name="edit" onclick="show_edit(<?php echo $k; ?>)">

                                    </td>





                                </tr>
                                 </form>
                               <?php 
                               $k++;
                            }
                        }
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
                                    <option value="Queens Street">Queens Street</option>
                                    <option value="Kelvin Grove">Kelvin Grove</option>
                                    <option value="Coopers Plains">Coopers Plains</option>
                                </select>
                                
                                <br>
                            </td>
                        </tr>
                    </form>

        </table>
         </div>
           
          <div id="hdiv">
    <form action="" method="post">
        <table align="center" style="background-color: #999900">
        <tr >
            <td>
                New date and shift
            </td>
            <td>
                <input type="date" name="e_date" id="<?php // echo $d_id;?>" placeholder="New Date" class="fadeIn second" required>
                
                
                <input type="hidden" id="id1" value="" name="s_id">
                <input type="hidden" id="na1" value="" name="e_name">
                <input type="hidden" id="br1" value="" name="e_branch">
                
            </td>
            <td>
                <!--<input type="text" name="e_shift" id="<?php // echo $sht_id;?>" placeholder="New Shift" value="" class="fadeIn second" required>-->
                
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
            <td>
                <input type="submit" value="Save" name="e_save" id="<?php // echo $btn_id;?>" id="green">
                <input type="button" value="Close" name="close" id="<?php // echo $btn_id;?>" id="red" onclick="hide_edit()"> 
            </td> 
        </tr>
    </table>
        </form>
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
  <script>
            
            var sid=null;
                
            function asign(val)
            {
                sid = val;
//                alert(sid);
            }
            function show_edit(a)
            {
                if(sid==null)                 
                {
                    alert('Please select a shift to edit');
                    return;
                }
                
                var ebr="ebr_"+a;
                var nam="nam_"+a;
                
                document.getElementById("id1").value=sid;
                
                document.getElementById("br1").value=document.getElementById(ebr).value;
                document.getElementById("na1").value=document.getElementById(nam).value;
                
                document.getElementById("hdiv").style.visibility="visible";
                
                document.getElementById("hdiv").style.zIndex="3";
                
            }
            function hide_edit()
            {

                sid=null;
                
                document.getElementById("hdiv").style.visibility="hidden";
                document.getElementById("hdiv").style.zIndex="1";
//                document.getElementById("formContent").style.zIndex="3";
                
            }
        </script>
  
  <input name="animation" type="hidden">
  </body>
</html>

