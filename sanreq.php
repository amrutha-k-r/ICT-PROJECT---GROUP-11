<!DOCTYPE html>
<?php
    session_start();
    require_once "./db/config.php";
    
    $branch=$_SESSION['branch'];
    
    
?>

                        
                        <?php

                            $qr_sel="SELECT * FROM `leave_approve` WHERE status=5 and l_branch='$branch' ORDER by la_id desc ";
//                            echo $qry;
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
                                            
                        
                    
                    <?php
                                        }
                                    }
                                }
                            }
                            else
                            {
                                echo mysqli_error($link);
                            }
                    ?>
                            
                        
                   