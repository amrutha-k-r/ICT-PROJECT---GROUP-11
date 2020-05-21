<!DOCTYPE html>
<?php
    session_start();
    require_once "./db/config.php";
    
    $branch=$_SESSION['branch'];
    $id=$_SESSION['id'];
    
    $name_ses=$_SESSION['name'];
    
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
      #maindiv
      {
          width: 80%;
          height: 120%;
          margin-left: 10%;
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
            font-size: x-large;
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
                        <li class="nav-item nav-btn"><h5 style="color: #FF9900;">Welcome <?php echo $_SESSION['name']; ?>..</h5></li>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item dropdown"><a class="nav-link link" href="home.php">Home</a></li>
                        <li class="nav-item dropdown"><a class="nav-link link" href="timecard.php">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link link" href="eroster.php">Roster</a></li>
                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="" aria-expanded="false">Leave</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="addreq.php">Add Requests</a>

                                    <a class="dropdown-item" href="leavehis.php">History</a>
                                </div>
                        </li>
<!--                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="" aria-expanded="false">ROSTER</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="addroster.php">Add Roster</a>
                                    <a class="dropdown-item" href="viewroster.php">Edit Roster</a>
                                </div>
                        </li>-->
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
<!--                  

                

             
                    <form method="post" id="fid">
                    
                    <caption>
                        <h1><?php echo $name_ses; ?></h1>
                        <h3>Timecard</h3>
                    </caption>
                    
                    <table align="center" cellpadding="8px" cellspacing="2px" style="width: 100%" >                       
                        
                        <tr>
                            <!--<th align="center">Name</th>-->
                            <th align="center">Branch</th>

                            <th align="center">Date</th>
                            <th align="center">Shift</th>
                                <!--<th>Assign to</th>-->
                     
                        
                        <?php

                            $qry="SELECT * FROM `schedule` WHERE empid=$id ORDER by s_date ";
                            $result = mysqli_query($link, $qry);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                    //            echo "here";
                                while($row = mysqli_fetch_array($result)) {

//                                     $det_sel_qry="select name , branch from employee where id=". $row['empid'];
////                                                         echo $det_sel_qry;
//                                     $res_em=mysqli_query($link, $det_sel_qry);
//                                     if (mysqli_num_rows($res_em) > 0) {
//
//                                        while($emrow = mysqli_fetch_array($res_em)) {

                        ?>
                                            
                        <tr class="trr1">

<!--                                        <td><?php // echo $emrow[0];?>                                                              
                                        </td>-->
                                        <td><?php echo $row['branch'];?></td>
                                        <td><?php echo $row['s_date'];?>
                                            </td>

                                        <td><?php echo $row['shift'];?>
                                            </td>
<!--                                                            <td><?php // echo $row['branch'];?>
                                            </td>-->

                    <?php
//                                        }
//                                    }
                                }
                            }
                    ?>
                            
                        <!--<tr><td colspan="5"><input type="button" id="cmd1" onClick="window.print()" value="Print"></tr>-->
                    </table>					
				
                </form>	
                    


                </div>
            </div>
            
            
            
          <!--</div>-->
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
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>