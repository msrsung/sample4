<?php
echo 'hello!!';

$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
$dpport = 3306;

// Create connection
$db = new mysqli($servername, $username, $password, $database, $dpport);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
echo "Connection successfully (".$db->host_info.")";

$sql = "INSERT INTO dep (dept_no, dept_name)
VALUES (1, 'datase1')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();

?>