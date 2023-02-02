<?php
        $name = $_POST['name'];
        $description = $_POST['description'];
        $rating = $_POST['rating'];
        
    }

    // database details
    $host = "localhost";
    $username = "exceptio";
    $password = "Ln*-QLoyf5H808";
    $dbname = "exceptio_testimony";

    // Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, description, rating) values(?, ?, ?)");
		$stmt->bind_param("sssssi", $name, $description, $rating);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>

