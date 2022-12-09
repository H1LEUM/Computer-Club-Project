<?php 
 include 'dbconn.php';		                                                   
   $delete_ic=$_GET['ic']; 
   $query = "DELETE FROM student WHERE ic='$delete_ic'";		
	   $result = mysqli_query( $conn,$query) or die("Query failed");	
       if ($result)	{						                      
          echo "<script> alert('Record Successfully Deleted!');</script>";
		  header("Refresh:0; url=viewStudent.php");
	   }
		else
          echo "Problem occured !"; 

    mysqli_close($conn);   
?>
