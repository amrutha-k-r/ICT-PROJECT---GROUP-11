

    <?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}
 
// Include config file
require_once "./db/config.php";
 
if(isset($_POST['log']))
    {
        $eid=$_POST['eid'];
        $pass=$_POST['pass'];
        
        $qry="select * from employee";
        
        $result = mysqli_query($link, $qry);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
//            echo "here";
            while($row = mysqli_fetch_assoc($result)) {
                if(strcmp($row['empid'], $eid)==0 )
                {
                    if(password_verify($pass, $row['password']))
                    {
                        echo "login success'";
                        
                        if($row['type']==1)
                        {
                            header("location:admin.php");
                        }
                        else
                        {
                            header("location:home.php");
                        }
                    }
                    else
                    {
                        echo "<script>alert('Password Mismatch');</script>";
                        
                    }
                    
                }
                else
                { 
//                    echo "<br".$row['password'];
                    echo "<script>alert('Login Failed.. Invalid Details');</script>";
                    break;
                }
            }
        } else {
            echo "Error in Database Selection";
        }
    
        
    
    
    // Close connection
    mysqli_close($link);
}
?>

