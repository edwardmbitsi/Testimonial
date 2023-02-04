<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

class testimony{
        $name = $_POST['name'];
        $description = $_POST['description'];
        $rating = $_POST['rating'];
        

    // database details
    $host = "localhost";
    $username = "exceptio";
    $password = "";
    $dbname = "exceptio_wp524";

    // Database connection
	$conn = new mysqli('localhost','exceptio','','exceptio_wp524');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, description, rating) values(?, ?, ?)");
		$stmt->bind_param("ssi", $name, $description, $rating);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
}
?>

