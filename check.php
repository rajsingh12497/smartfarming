<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "smart_farming";
		//$name=$_POST["name"];
		//$cname=$_POST["comname"];
		//$uname=$_POST["uname"];
		//$phone=$_POST["phone"];
		//$email=$_POST["mail"];
		//$pass=$_POST["password"];
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
          $user=$_POST['username'];
          $sql="SELECT * FROM user_info where u_name LIKe '$user'";
          $result = $conn->query($sql);
            if ($result->num_rows) {
                      echo "Username Exist";
		}
		else{
		    echo 'Available';
		}		

		
		$conn->close();
	?>
