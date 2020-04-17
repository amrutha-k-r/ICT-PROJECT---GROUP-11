<?php
    session_start();
    require_once "./db/config.php";
    
    $branch=$_SESSION['branch'];
    $id=$_SESSION['id'];
?>

                        <?php

                            $qry="SELECT * FROM `schedule` WHERE empid=$id ORDER by s_date ";
                            $result = mysqli_query($link, $qry);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                    //            echo "here";
                                while($row = mysqli_fetch_array($result)) {

                                     $det_sel_qry="select name , branch from employee where id=". $row['empid'];
//                                                         echo $det_sel_qry;
                                     $res_em=mysqli_query($link, $det_sel_qry);
                                     if (mysqli_num_rows($res_em) > 0) {

                                        while($emrow = mysqli_fetch_array($res_em)) {

                        ?>
                                            
   