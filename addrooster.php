<?php

    require_once "./db/config.php";
    if(isset($_POST['save']))
    {
        $em_id=$_POST['eidd'];
        $r_date=$_POST['r_date'];
        $r_shift=$_POST['r_shift'];
        $ass_branch=$_POST['ass_branch'];
        
        $ins_qry="insert into schedule(empid,s_date,shift,branch) values($em_id,'$r_date','$r_shift','$ass_branch')";
        
        echo $ins_qry;
        
        if (mysqli_query($link, $ins_qry)) {
            echo "<script>alert('New record created successfully');<script>";
            header("location:admin.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        
        
    }

?>
<!DOCTYPE html>
<html lang="en" >
	<head>
		  <meta charset="UTF-8">
		  <title>TURNOSE</title>
		  <style>
 html {
            background-color: #dce8f1;
        }

        body {
          font-family: "Poppins", sans-serif;
          
          height: 100vh;
          
          
         
        }

        a {
          color: #92badd;
          display:inline-block;
          text-decoration: none;
          font-weight: 400;
        }

        h2 {
          text-align: center;
          font-size: 16px;
          font-weight: 600;
          text-transform: uppercase;
          display:inline-block;
          margin: 40px 8px 10px 8px; 
          /*color: #cccccc;*/
        }
 .wrapper {
          display: flex;
          align-items: center;
          flex-direction: column; 
          justify-content: center;
          width: 100%;
          min-height: 100%;
          padding: 20px;
        }

        #formContent {
          -webkit-border-radius: 10px 10px 10px 10px;
          border-radius: 10px 10px 10px 10px;
          background: #fff;
          padding: 30px;
          width: 90%;
          /*max-width: 600px;*/
          position: relative;
          padding: 0px;
          -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
          box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
          text-align: center;
	  margin-left:5%;
	  margin-top:5%;
        }

        #formFooter {
          background-color: #f6f6f6;
          border-top: 1px solid #dce8f1;
          padding: 25px;
          text-align: center;
          -webkit-border-radius: 0 0 10px 10px;
          border-radius: 0 0 10px 10px;
        }

    input[type=submit], input[type=reset]  {
          background-color: #56baed;
          border: none;
          color: white;
          padding: 5px 12px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          text-transform: uppercase;
          font-size: 14px;
          -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
          box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
          -webkit-border-radius: 5px 5px 5px 5px;
          border-radius: 5px 5px 5px 5px;
          margin: 5px 20px 40px 20px;
          -webkit-transition: all 0.3s ease-in-out;
          -moz-transition: all 0.3s ease-in-out;
          -ms-transition: all 0.3s ease-in-out;
          -o-transition: all 0.3s ease-in-out;
          transition: all 0.3s ease-in-out;
        }
         input[type=text],input[type=date] {
          background-color: #f6f6f6;
          border: none;
          color: #0d0d0d;
          padding: 5px 12px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 14px;
          margin: 5px;
          width: 85%;
          border: 2px solid #f6f6f6;
          -webkit-transition: all 0.5s ease-in-out;
          -moz-transition: all 0.5s ease-in-out;
          -ms-transition: all 0.5s ease-in-out;
          -o-transition: all 0.5s ease-in-out;
          transition: all 0.5s ease-in-out;
          -webkit-border-radius: 5px 5px 5px 5px;
          border-radius: 5px 5px 5px 5px;
          
          -moz-appearance:textfield;
        }
         select{
          background-color: #f6f6f6;
          border: none;
          color: #0d0d0d;
          padding: 5px 12px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 14px;
          margin: 5px;
          width: 95%;
          border: 2px solid #f6f6f6;
          -webkit-transition: all 0.5s ease-in-out;
          -moz-transition: all 0.5s ease-in-out;
          -ms-transition: all 0.5s ease-in-out;
          -o-transition: all 0.5s ease-in-out;
          transition: all 0.5s ease-in-out;
          -webkit-border-radius: 5px 5px 5px 5px;
          border-radius: 5px 5px 5px 5px;
          
          -moz-appearance:textfield;
          }

        input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
          background-color: #39ace7;
        }

        input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
          -moz-transform: scale(0.95);
          -webkit-transform: scale(0.95);
          -o-transform: scale(0.95);
          -ms-transform: scale(0.95);
          transform: scale(0.95);
        }


/*        font{
            color: #111111;
        }		
			*/
			#m_head
			{
				background-color:white;
				border: solid;
				border-color:grey;
				border-radius:3px;
	
				/*height:150px;*/
				width:80%;
	
				margin-left:10%;
			}
			#m_body
			{
				background-color:white;
				border: solid;
				border-color:grey;
				border-radius:3px;
	
				height:800px;
				width:80%;
	
				margin-left:10%;
			}
                        
                        #navli {
                            list-style-type: none;
                            list-style-type: none;
                            margin: 0;
                            padding: 0;
                            overflow: hidden;
                            background-color: #39ace7;
                            /*#333333;*/
                        }

                        li {
                          float: left;
                        }

                        li a {
                          display: block;
                          color: white;
                          text-align: center;
                          padding: 16px;
                          text-decoration: none;
                        }

                        li a:hover {
                          background-color: #111111;
                        }
                        
                        .homered{
                            background-color: red;
                        }
                        .homeblack{
                            background-color: #39ace7;
                        }th{
                            background-color: chartreuse;
                        }
                        tr:hover{
                            background-color: #ffcccc;
                        }

		  </style>


	</head>
	<body >
		<div id="m_head">
                    
                    <ul id="navli">
                        <li><a class="homeblack" href="admin.php">HOME</a></li>
                        <li><a class="homeblack" href="rooster.php">View Rooster</a></li>
                        <li><a class="homered" href="addrooster.php">Add Rooster</a></li>
                        <li><a class="homeblack" href="leavereq.php">Leave Requests</a></li>
                        <li><a class="homeblack" href="addemp.php">Add Employee</a></li>
                        
<!--                        <li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
                        <li><a class="homeblack" href="empleave.php">Employee Leave</a></li>-->
                        <li><a class="homeblack" href="logout.php">Log Out</a></li>
                    </ul> 
			
		</div>
		<div id="m_body">
		
			<div id="formContent">
				
                                    <h1>
                                        <!--Add Rooster--> 

                                    </h1>
                                    <h2>
                                        <div id="formContent">
				
					<table align="center" cellpadding="8px" >
                                            <caption><h1>Add Rooster</h1></caption>
                                            <tr>
                                                <!--<th>Employee ID</th>-->
                                                <th>Name</th>
                                                <th>Branch</th>
                                                <th>Date</th>
                                                <th>Shift</th>
                                                <th>Assign to</th>
                                                <th>Save</th>
                                                
                                            </tr>
                                        <?php
                                                
                                                //selecting branch
                                                
                                                $qry="select * from employee where type!=1";
                                                $result = mysqli_query($link, $qry);

                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row
                                        //            echo "here";
                                                    while($row = mysqli_fetch_array($result)) {
                                                        
                                                       ?>
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                                                        <tr>
                                                            
                                                            <td><input type="hidden" name="eidd" value="<?php echo $row['id'];?>">
                                                                <input type="hidden" name="name" value="<?php echo $row['name'];?>"><?php echo $row['name'];?></td>

                                                            <td><input type="hidden" name="branch" value="<?php echo $row['branch'];?>"><?php echo $row['branch'];?></td>

                                                            <td><input type="date" name="r_date" required></td>
                                                            <td><input type="text" name="r_shift" required></td>
                                                            <td>
                                                                <select id="branch" class="fadeIn second" name="ass_branch" required>
                                                                    <option value="" disabled selected hidden>Branch</option>
                                                                    <option value="Myer Centre">Myer Centre</option>
                                                                    <option value="Queens Street">Queens Street</option>
                                                                    <option value="Kelvin Grove">Kelvin Grove</option>
                                                                    <option value="Coopers Plains">Coopers Plains</option>
                                                                </select>
                                                            </td>

                                                            <td><input type="submit" value="Save" name="save"></td>

                                                           

                                                                                                               


                                                        </tr>
                                                         </form>
                                                       <?php 
                                                    }
                                                }
                                               


                                        ?>

                                </table>					
				
				
			</div>
                                    </h2>
				
			</div>

		
		</div>

	</body>
</html>

