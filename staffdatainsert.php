<html>
	<head>
		<title>Page Redirection</title>
	</head>
	<body>
		<pre>
		<?php
			print_r($_POST);
		?>
		</pre>
		<br/>
		
		
        
        
        <?php
	//1. Create a database connection
	DEFINE("DB_SERVER", "localhost");
	DEFINE("DB_USER", "root");  
	DEFINE("DB_PASS", "");   	    // Put your database password here if any.
	DEFINE("DB_NAME", "signup");  			
	
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);   // $connection points to the database we have connected
	// Test if connection occured
	if(mysqli_connect_errno()){  // If there is an error name then there is a problem
		// mysqli_connect_error() returns an empty string if there is no error else it returns the error string.
		die( "Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
	}
?>
		

        <?php
	// If the employee data has been submitted
	if(isset($_POST['submit'])){
		$query = "INSERT INTO staff (destination,dated,sourced,flight) VALUES ('{$_POST['destination']}', '{$_POST['dated']}','{$_POST['source']}', '{$_POST['flight']}' )";
		$result = mysqli_query($connection,$query); 
		if($result){  // If there are no query error
			echo "Data successfully inserted";
		      header('Location: staff.html');    
            exit();
        
        }
		else{
			echo "Data insertion failed";
		}
	}
?>
        
        


        
	</body>
</html>