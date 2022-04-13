<?php
$servername = "localhost";
$username = "evoluo";
$password = "AOJJRaHDuU9p";
$dbname = "evoluo_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT testid, testname FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["testid"]. " - Name: " . $row["testname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>