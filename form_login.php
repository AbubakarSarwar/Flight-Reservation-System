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
else
{
    
}
?>
        
        
        
        
          <?php
			// detect form submission
			if(isset($_POST["submit"])){
				
				
				// set default value
				
					$username = $_POST["email"];
					$password = $_POST["password"];
                
			}		
		?>
        
        
        
        
        <?php
//perform query'
$count = "false";
    $query = "select * from login ";

    $result = mysqli_query($connection , $query);

//test query error    

if(!$result)
    {
        die("Database query failed!");
    }
else
{
    while($row = mysqli_fetch_assoc($result))
    {
        var_dump($row);
        echo "<hr />";
        
        if($row["username"] == $username AND $row["pasword"] == $password )
        {
            echo "its a match";
            $count = "true";
            echo $count;
                break;
            
            
        }
        else
        {
            echo "its not a match";
        }
        
    }
    
    
    if($count == "true")
    {
        echo "its a match";
        
        
        
    }
   
    
}

        ?>
        

       
        
       
        
		
   
	</body>
</html>