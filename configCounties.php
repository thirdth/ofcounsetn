<?php

// Create connection
$conn = mysqli_connect("mysql.ofcounseltn.com", "zglaser1", "Glockner605");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
