<?php

require_once 'database.php';
//$mysqli = new mysqli(SQLHOST, SQLUSER, SQLPASSWORD, SQLDB);
$mysqli = mysqli_connect("localhost","root","","assignment");
if (isset($_POST['addVenue'])) { //This is what happens when you click on register
    $venueName = $_POST['venueName']; //these are the columns in the database
    $city = $_POST['city'];
    $slogan = $_POST['slogan'];
    $description = $_POST['description'];
    $address = $_POST['address'];
    $postcode = $_POST['postcode'];
    $telephone = $_POST['telephone'];
    $googleMapsCode = $_POST['googleMapsCode'];
    $images = $_POST['images'];
    $userRating = $_POST['userRating'];
    $venueType = $_POST['venueType'];
	

    //getting the values from what you type in in the insert venue page
    $sql = "INSERT INTO venues
       (venueName,city, slogan, description, address, postcode, telephone, googleMapsCode, images, userRating, venueType) values ('$venueName', '$city', '$slogan', '$description', '$address', '$postcode', '$telephone', '$googleMapsCode', '$images', '$userRating', '$venueType');";
$insert_venue = $mysqli->query($sql);
}
?>