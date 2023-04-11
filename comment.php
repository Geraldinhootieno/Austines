<?php
$Name = "Name";
$Email = "Email";
$Message = "Message";
$conn = new mysqli('localhost','root','','Austine');
if($conn->connect_error)
{
  die('Connection failed:'.$conn ->connect_error);
}
echo "";
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$sql = "insert into comment (Name,Email,Message)values('$Name','$Email','$Message')";
if ($conn->query($sql) === TRUE) {
  echo "Comment succesfuly sent and saved";
} else {
  echo  "Error: " . $sql . "<br>" . $conn->error;
}

?>
