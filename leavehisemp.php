
<?php
    session_start();
    require_once "./db/config.php";
    
    $branch=$_SESSION['branch'];
    
    $uid=$_SESSION['id'];
    
?>

                        
                        <?php

                            $qr_sel="SELECT empid,l_balance,l_branch,l_date,l_type, IF(status=5,'Sanctioned',if(status=2,'Declined','Pending')) as Status from leave_approve WHERE empid='$uid' ORDER by la_id desc ";
//                            echo $qr_sel;
                           if( $result = mysqli_query($link, $qr_sel))
                            
                           { 

//                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                    //            echo "here";
                                while($row = mysqli_fetch_array($result)) {
                                    
                                    $qr_na="select name from employee where id=".$row['empid'];
                                    $na_re= mysqli_query($link, $qr_na);
                                    if (mysqli_num_rows($na_re) > 0) {
                                        while($na_row = mysqli_fetch_array($na_re)) {
                                    
                                            
                                     

                        ?>
                                            
 