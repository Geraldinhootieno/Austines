<?php 
$FirstName = "FirstName";
$LastName = "LastName";
$PhoneNumber = "PhoneNumber";
$Gender = "Gender";
$Location = "Location";
$Orders = "Orders";
$Date = "Date";

$conn = new mysqli('localhost','root','','customer');
if($conn->connect_error)
{
	die('Connection failed:'.$conn ->connect_error);
}
echo "";
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$PhoneNumber = $_POST['PhoneNumber'];
$Gender = $_POST['Gender'];
$Location = $_POST['Location'];
$Orders = $_POST['Orders'];
$Date = $_POST['Date'];

$sql = "Insert into `customers` (FirstName,LastName,PhoneNumber,Gender,Location,Orders,Date) VALUES ('$FirstName','$LastName','$PhoneNumber','$Gender','$Location','$Orders','$Date')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo  "Error: " . $sql . "<br>" . $conn->error;
}
?>

