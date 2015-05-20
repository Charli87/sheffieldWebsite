<?php

require_once 'database.php';
//$mysqli = new mysqli(SQLHOST, SQLUSER, SQLPASSWORD, SQLDB);
$mysqli = mysqli_connect("localhost","root","","assignment");
if (isset($_POST['register'])) { //This is what happens when you click on register
    $username = $_POST['username']; //these are the collumns in the database
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $city = $_POST['city'];

    //getting the values from what you type in in the register page
    $sql = "INSERT INTO login 
       (username,password, firstName, lastName, email, dateOfBirth, city) values ('$username', '$password', '$firstName', '$lastName', '$email', '$dateOfBirth', '$city');";


    $insert_user = $mysqli->query($sql);

    if ($insert_user) {
        echo "User has been inserted";
    }
}
?>