<!DOCTYPE html>

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
            font-size: large;
        }
        .trr1:hover{
            background-color: #cc9900;
            height: 40px;
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

                <div class="mbr-plan card text-xs-center" id="maindiv">

                <form method="post" id="fid">
                    
                    <caption>
                        <h1><?php echo $branch; ?></h1>
                        <h3>Leave Requests</h3>
                    </caption>
                    
                    <table align="center" cellpadding="8px" cellspacing="2px" style="width: 100%" >                       
                        
                        <tr>
                            <th align="center">Name</th>
                            <th align="center">Date</th>

                            <th align="center">Type</th>
                            <th align="center">Balance</th>
                            <!--<th align="center">Messages</th>-->
                            <th align="center">Action</th>
                                
                        </tr>
                        
                        
                                            
                        <tr class="trr1">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <td>
                                             
                                            <input type="hidden" name="leaveid" value="">
                                            <input type="hidden" name="empid" value="">
                                        </td>
                                        <td></td>
                                        <td>
                                            <input type="hidden" name="leavetype" value="">
                                            </td>

                                        <td></td>
                                        
<!--                                        <td>
                                             <input type="text" name="msg" value="">                                                 
                                                  
                                        </td>-->
                                            <td>
                                                <input type="submit" name="accept" value="accept" id="green">
                                                <input type="submit" name="decline" value="decline" id="red">
                                            </td>
                        </form>
                    </tr>
                    
         
                        
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
  
  
  <input name="animation" type="hidden">
  </body>
</html>

