<?php
require_once 'user_repository.php';
require_once 'database.php';
require_once 'venue_repository.php';
//require_once 'admin_repository.php';
$venueID = $_GET['venueID'];
//$mysqli = new mysqli(SQLHOST, SQLUSER, SQLPASSWORD, SQLDB);
$mysqli = mysqli_connect("localhost","root","","assignment");

 if (isset($_POST['addReview']) && (isset($_SESSION['admin']))) { //This is what happens when you click on register and when admin user is logged in
    $adminID = $_SESSION['admin']; //these are the collumns in the database
    echo "2: ".json_encode($adminID);
    $venueID = $_GET['venueID'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];

    //getting the values from what you type in in the register page
    $sql = "INSERT INTO reviews
       (id, venueID, review, rating) values ('$adminID', '$venueID', '$review', '$rating');";
 echo "3: ".json_encode($adminID);
    $insert_review = $mysqli->query($sql);
	
}elseif (isset($_POST['addReview']) && (isset($_SESSION['currentUser']))) { //This is what happens when you click on register and a user is logged in
    $userID = $_SESSION['currentUser']; //these are the collumns in the database
    echo "2: ".json_encode($userID);
    $venueID = $_GET['venueID'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];

    //getting the values from what you type in in the register page
    $sql = "INSERT INTO reviews
       (id, venueID, review, rating) values ('$userID', '$venueID', '$review', '$rating');";

    $insert_review = $mysqli->query($sql); 

}

?>