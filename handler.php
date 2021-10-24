<?php 
// Connect to MySQL database
$db_host = 'localhost';
$db_user = 'filedb';
$db_pass = 'rWJMcrSJJ4PAcLMK';
$db_name = 'filedb';
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Get POST form data
$name = $_POST['name'];
$website = $_POST['website'];
$country = $_POST['country'];
$type = $_POST['type'];
$payment = $_POST['payment'];
$cost = $_POST['cost'];
$currency = $_POST['currency'];
$validdate = $_POST['validdate'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$productkey = $_POST['productkey'];
$remarks = $_POST['remarks'];
// Insert a new line to table 'legitsoftware'
$sql = "INSERT INTO `legitsoftware` (`NAME`, `Website`, `Country`, `TYPE`, `Payment`, `Cost`, `Currency`, `ValidDate`, `FirstName`, `LastName`, `Email`, `Productkey`, `Remarks`) 
        VALUES ('$name','$website','$country','$type','$payment','$cost','$currency','$validdate','$firstname','$lastname','$email','$productkey','$remarks')";
echo "Your SQL Query is ".$sql;
$mysqli->query($sql);
echo "<br /><br />Query OK.";
echo "<meta http-equiv='Refresh' content='5;url=/'>";
// Close MySQL connection
$mysqli->close();
?>