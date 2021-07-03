<?php

$servername = "localhost";
$username = "root";
$password = "";
$db ="robot1";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
echo "conn";	
}
?>

<?php
if (isset($_POST['SAVE'])) {

$sql = "INSERT INTO `table` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES ('".$_POST['A']."', '".$_POST['B']."', '".$_POST['C']."', '".$_POST['D']."', '".$_POST['E']."', '".$_POST['F']."')";
$result = $conn->query($sql);
 }

 ?>
 <?php
if (isset($_POST['on'])) {

$sql = "INSERT INTO `on` (`on`) VALUES ('1')";
$result = $conn->query($sql);
 }

 ?>
 
  <?php
if (isset($_POST['off'])) {

$sql = "INSERT INTO `on` (`on`) VALUES ('0')";
$result = $conn->query($sql);
 }

 ?>
 <?php  
$sql = "SELECT * FROM `table`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

	    echo "<br> control = ".$row["motor1"]."<br>";
        echo "control = ".$row["motor2"]."<br>";
		echo "control = ".$row["motor3"]."<br>";
		echo "control = ".$row["motor4"]."<br>";
		echo "control = ".$row["motor5"]."<br>";
		echo "control = ".$row["motor6"]."<br>";
		 
    }
  }
?>
