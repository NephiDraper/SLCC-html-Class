<?php
$servername = "mysql.nephidraper.slccwebdev.com";
$username = "nehpi_100";
$password = "S1gnm31n!";
$dbname = "nehpi_db_100";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO persons (Name, Email, Website, Comments, Gender)
  VALUES ('Name', 'Email', 'Website', 'Comments', 'Gender')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>





