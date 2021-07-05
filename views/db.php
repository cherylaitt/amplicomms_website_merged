<?php

// Connect Database

// MySQL information MODIFY IT HERE.
 $db_name = "amplicomms";  	// Database name
 $host = "localhost"; 		// Database host 
 $db_user = "root"; 		// Database username
 $db_password = ""; 		// Database password
 
 $conn = mysqli_connect($host, $db_user,$db_password, $db_name);  
  
 // Database Connection DON'T MODIFY
 if (!$conn) { 
   	echo( "<p>Unable to connect to the database.</p>");    
    	exit();  
  }    
?> 