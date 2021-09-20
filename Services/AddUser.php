<?php
include '../Connection/Connection.php';

$uname = $_POST['uname'];
$telnumber = $_POST['telnumber'];
$password = $_POST['password'];

$sql = "SELECT uname FROM user_registration WHERE uname = '" . $uname . "'";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo json_encode("Error");
} else {
    $insert = "INSERT into user_registration(uname,Telnumber,password) values('" . $uname . "','" . $telnumber . "','" . $password . "')";
    $query = mysqli_query($conn, $insert);
    if ($query) {
        echo json_encode("Success");
    }
}

// $conn->query("INSERT into user_registration(uname,Telnumber,password) values('" . $uname . "','" . $telnumber . "','" . $password . "')");
