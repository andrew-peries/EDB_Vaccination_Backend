<?php
include '../Connection/Connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user_registration WHERE uname = '".$username."' AND password = '".$password."'";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
	echo json_encode("Success");
}else{
	echo json_encode("Error");
}
