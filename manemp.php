<?php
    session_start();
    require_once "./db/config.php";
    
    $branch=$_SESSION['branch'];
    
    
    
    if(isset($_POST["accept"]))
    {
        $lid=$_POST['e_id'];
//        $ltype=$_POST['leavetype'];
//        $empid=$_POST['empid'];
        
//        echo "<script>alert($ltype);</script>";
//        echo "<script>alert('$ltype');</script>";
        
        $up_qry1="update employee set type=0 where id=".$lid;
        
        echo$up_qry1;
        if (mysqli_query($link,  $up_qry1)) {
            
           
                echo "New record changed successfully";
                 
                $message="Your registration approved.";
                $msg_qry="insert into messages(empid,message) values($lid,'$message')";
                if (mysqli_query($link, $msg_qry)) {
                    echo '<script>alert("New record created successfully");</script>';
                    header("location:manemp.php");
                }
                else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($link);
                }
            
            
                        
        } else {
            echo "Error: " .$up_qry1 . "<br>" . mysqli_error($link);
        }
        
//         mysqli_close($link);
    }
    if(isset($_POST["decline"]))
    {
        $lid=$_POST['e_id'];
        
        $up_qry2="update employee set type=5 where id=".$lid;
        
        if (mysqli_query($link,  $up_qry2)) {
            echo "New record changed successfully";
            
            $message="Your registration declined. Contact manager for further details.";
            $msg_qry="insert into messages(empid,message) values($lid,'$message')";
            if (mysqli_query($link, $msg_qry)) {
                echo '<script>alert("New record created successfully");</script>';
                header("location:manemp.php");
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
            
        } else {
            echo "Error: " .$up_qry2 . "<br>" . mysqli_error($link);
        }
        
//         mysqli_close($link);
    }
    
?>






                        <?php

                            $qr_sel="SELECT * FROM `employee` WHERE type=5 and branch='$branch' ORDER by id desc ";
//                            echo $qry;
                           if( $result = mysqli_query($link, $qr_sel))
                            
                           { 

//                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                    //            echo "here";
                                while($row = mysqli_fetch_array($result)) {
                                    
                                     

                        ?>
                                            
  