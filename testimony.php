<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $rating = $_POST['rating'];
        
    }

    // database details
    $host = "localhost";
    $username = "exceptio";
    $password = "Ln*-QLoyf5H808";
    $dbname = "exceptio_wp524";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (id, name, description, rating) VALUES ('0', '$name', '$description', '$rating')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Testimonial added!";
    }
  
    // close connection
    mysqli_close($con);

?>

