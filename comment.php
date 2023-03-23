<?php
$Name = "Name";
$Message = "Message";
$conn = new mysqli('localhost','root','','customer');
if($conn->connect_error)
{
	die('Connection failed:'.$conn ->connect_error);
}
echo "";
$Name = $_POST['Name'];
$Message = $_POST['Message'];
$sql = "insert into comments (Name,Message)values('$Name','$Message')";
if ($conn->query($sql) === TRUE) {
  echo "Comment sent";
} else {
  echo  "Error: " . $sql . "<br>" . $conn->error;
}

?>