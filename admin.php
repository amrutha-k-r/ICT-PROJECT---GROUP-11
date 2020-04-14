<!DOCTYPE html>
<?php
    session_start();
    require_once "./db/config.php";
    
    $branch=$_SESSION['branch'];
    if(isset($_POST['branch_sel']))
    {
        $sel_branch=$_POST['branch_sel'];
    }
    
    else
    {
        $sel_branch=$branch;
    }
    
?>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.11.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.11.1, mobirise.com">
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
      #maindiv
      {
          width: 80%;
          height: 120%;
          margin-left: 10%;
          
          overflow: auto;
      }
      body
      {
          color : #000000;
          font-family: sans-serif;
      }
      h4{
          display: inline;
      }
      tr{
          height: 30px;
      }
       tr:nth-child(even) {
           background-color: #F1C050;
           
       }
        th{
            background-color: #999900;
            height: 35px;
            font-size: large;
            width: 250px;
        }
        .trr1:hover{
            background-color: #cc9900;
            height: 40px;
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
<!--<section class="mbr-section mbr-after-navbar" id="pricing-table2-6" style="background-color: rgb(250, 197, 28); padding-top: 120px; padding-bottom: 120px;">

    

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 text-xs-center">
                  <h3 class="mbr-section-title display-2">PRICING TABLE</h3>
                  <small class="mbr-section-subtitle">Pricing table with four columns and solid color background.</small>

                

              </div>
          </div>
      </div>
    </div>

    <div class="mbr-section mbr-section-nopadding mbr-price-table">
      <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-12 col-xl-6 col-xl-offset-3">
                <div class="mbr-plan card text-xs-center" id="maindiv">-->
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


                    <!--Code-->
                    


               


                    
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <table align="center" border="0" width="100%">
                        <tr>
                            <td><h4>From</h4><input type="date" class="form-control" name="dfrom" required></td>
                            <!--<td><h4>To</h4><input type="date" class="form-control" name="dto" required></td>-->
                            <td><input type="submit"  value="Show Roster" name="showr" ></td>
                        </tr>
                    </table>
                </form>
                    <hr>
                <?php

                    if(isset($_POST['showr']))
                    {
                        $dfrom=$_POST['dfrom'];
//                        $dto=$_POST['dto'];

//                        echo $dfrom;
                ?>
                <form method="post" id="fid">
                    
                    <caption>
                        <h1><?php echo $branch; ?></h1>
                        <h3>Roster From <b><?php echo $dfrom; ?> </b></h3>
                    </caption>
                    <div id="printableArea">
                    <table align="center" border="1" cellpadding="8px" cellspacing="2px" style="width: 100%" >                       
                        
                        <?php
                        $datee=$_POST['dfrom'];
                        $day1=date('Y-m-d', strtotime($datee .' +1 day'));
                        $day2=date('Y-m-d', strtotime($datee .' +2 day'));
                        $day3=date('Y-m-d', strtotime($datee .' +3 day'));
                        $day4=date('Y-m-d', strtotime($datee .' +4 day'));
                        $day5=date('Y-m-d', strtotime($datee .' +5 day'));
                        $day6=date('Y-m-d', strtotime($datee .' +6 day'));


                      ?>


                        <tr>
                        <!--<th>Employee ID</th>-->
                        <th>Employee Name</th>
                        
                        <th><?php echo $datee; ?></th>
                        <th><?php echo $day1; ?></th>
                        <th><?php echo $day2; ?></th>
                        <th><?php echo $day3; ?></th>
                        <th><?php echo $day4; ?></th>
                        <th><?php echo $day5; ?></th>
                        <th><?php echo $day6; ?></th>
                        
                        <?php

                           $qry="SELECT 
id,empid,
MAX(CASE WHEN `s_date` = '$datee' THEN concat(`shift`,'@',`id`) ELSE NULL END) AS '$datee',
MAX(CASE WHEN `s_date` = '$day1' THEN concat(`shift`,'@',`id`) ELSE NULL END) AS '$day1',
MAX(CASE WHEN `s_date` = '$day2' THEN concat(`shift`,'@',`id`) ELSE NULL END) AS '$day2',
MAX(CASE WHEN `s_date` = '$day3' THEN concat(`shift`,'@',`id`) ELSE NULL END) AS '$day3',
MAX(CASE WHEN `s_date` = '$day4' THEN concat(`shift`,'@',`id`) ELSE NULL END) AS '$day4',
MAX(CASE WHEN `s_date` = '$day5' THEN concat(`shift`,'@',`id`) ELSE NULL END) AS '$day5',
MAX(CASE WHEN `s_date` = '$day6' THEN concat(`shift`,'@',`id`) ELSE NULL END) AS '$day6'        

FROM `schedule` where branch='$sel_branch' and s_date between '$day1' and '$day6'
GROUP BY empid
HAVING '$datee' IS NOT NULL AND '$day1' IS NOT NULL AND '$day2' IS NOT NULL AND '$day3' IS NOT NULL
AND  '$day4' IS NOT NULL AND '$day5' IS NOT NULL AND '$day6' IS NOT NULL
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

//                                $btn_id="b_".$k;
//                                $d_id="d_".$k;
//                                $sht_id="sht_".$k;
//                                $div_id="div_".$k;
//
//                                $sid="sid_".$k;
//                                $ebr="ebr_".$k;
//                                $nam="nam_".$k;

                               ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                        <tr class="trr1">

                                    <td><?php echo $emrow['name'];?>
<!--                                        <br> 
                                        <br> <input type="hidden" id="<?php // echo $nam; ?>"  value="<?php // echo $emrow['id'];?>" >-->

                                    </td>
                                    <td><?php 
                                        if( $row[$datee]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
                                                $data= $row[$datee];
                                                $t_sid = substr($data, strpos($data, "@") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "@"));
                                                echo $t_shift;
                                            }
                                    ?>

                                    </td>

                                    <td><?php if( $row[$day1]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
                                                $data= $row[$day1];
                                                $t_sid = substr($data, strpos($data, "@") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "@"));
                                                echo $t_shift;
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
                                                $t_sid = substr($data, strpos($data, "@") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "@"));
                                                echo $t_shift;
                                            }
                                    ?>
                                      
                                    </td>
                                    <td><?php 
                                            if( $row[$day3]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
                                                $data= $row[$day3];
                                                $t_sid = substr($data, strpos($data, "@") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "@"));
                                                echo $t_shift;
                                                    
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
                                                $t_sid = substr($data, strpos($data, "@") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "@"));
                                                echo $t_shift;
                                              
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
                                                $t_sid = substr($data, strpos($data, "@") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "@"));
                                                echo $t_shift;

                                             
                                            }

                                    ?>

                                    </td><td><?php 
                                        if( $row[$day6]==NULL)
                                            {
                                                echo "--";
                                            }
                                            else
                                            {
                                                $data= $row[$day6];
                                                //echo $data;
                                                $t_sid = substr($data, strpos($data, "@") + 1); 
                                                $t_shift = substr($data,0, strpos($data, "@"));
                                                echo $t_shift;

//                                               
                                            }
                                    ?>

                                   




                                </tr>
                                 </form>
                               <?php 
//                               $k++;
                            }
                        }
                    }
                }

                ?></table>
                    </div>  
                    <table align="center" cellpadding="8px" cellspacing="2px" style="width: 100%">
                        
                        <tr><td ><input type="button" id="cmd1" onClick="printDiv('printableArea')" value="Print"></tr>
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
				
                	
                            <?php
                                    }
                        ?>


                </div>
            </div>
            
            
            
          <!--</div>-->
    </div>

</section>

    <script>
        function printDiv(divName) {
             var printContents = document.getElementById(divName).innerHTML;
             var originalContents = document.body.innerHTML;

             document.body.innerHTML = printContents;

             window.print();

             document.body.innerHTML = originalContents;
        }
    </script>
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