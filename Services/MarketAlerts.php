<?php
include '../Connection/Connection.php';



//print_r($_POST['image']);
$country = $_POST['country'];
$travel = $_POST['travel'];
$anyspecial = $_POST['anyspecial'];
$newopportunities = $_POST['newopp'];
$exportpromotion = $_POST['exportpromotion'];
$identifiedexport = $_POST['identifiedexport'];
$anyother = $_POST['anyother'];
$source = $_POST['source'];
$cotactperson = $_POST['contactperson'];
$relateddoc = $_POST['relateddoc'];
$currentstatus = $_POST['currentstatus'];

$imagee = $_FILES['file_field']['name'];
$temp_name = $_FILES['file_field']['temp_name'];

if (isset($_FILES['file_field'])) {

    if (!empty($imagee)) {
        $imagePath = 'uploads/';
    }

    if (move_uploaded_file($temp_name, $imagePath . $imagee)) {
        echo 'uploaded';
    }
} else {
    echo 'image not uploaded';
}





$insert = "INSERT INTO market_alerts(country,travel,anyspecial,newopp,exportpromotion,identifiedexport,anyother,source,contactperson,relateddoc,currentstatus,image)VALUES('" . $country . "','" . $travel . "','" . $anyspecial . "','" . $newopportunities . "','" . $exportpromotion . "','" . $identifiedexport . "','" . $anyother . "','" . $source . "','" . $cotactperson . "','" . $relateddoc . "','" . $currentstatus . "','" . $imagee . "')";
$query = mysqli_query($conn, $insert);
if ($query) {
    echo 'success';
}
