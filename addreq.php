<!DOCTYPE html>
<?php
    session_start();
    require_once "./db/config.php";
    
    $branch=$_SESSION['branch'];
    $id=$_SESSION['id'];
    $sname=$_SESSION['name'];
    
    if(isset($_POST['req']))
    {
        $reqdate=$_POST['lv_date'];
        $rtype=$_POST['lv_type'];
        
        $l_bal = substr($rtype, strpos($rtype, "-") + 1); 
        $reqtype = substr($rtype,0, strpos($rtype, "-"));
        
        $ins="insert into leave_approve(empid,l_type,l_balance,l_date,l_branch) values($id,'$reqtype','$l_bal','$reqdate','$branch')";
        
//        echo "<script>alert('$l_bal');</script>";
//        echo "<script>alert('$ins');</script>";
        if (mysqli_query($link, $ins)) {
            echo "New record created successfully";
            header("location:home.php");
        } else {
            echo "Error: " . $ins . "<br>" . mysqli_error($link);
        }
        
//         mysqli_close($link);
        
        
    }
    
