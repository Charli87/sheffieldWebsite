<?php
session_start();
require_once 'user_repository.php';
require_once 'header.php';
$error = null;

if (!isset($_SESSION["currentUser"])) {
    header("Location: index.php");
    exit();
}

$users = get_user_by_id($_SESSION["currentUser"], $error);
?>

<h1>User Account</h1> 
        <p>User ID: <?php echo $users["id"]; ?></p>
        <p>Username: <?php echo $users["username"]; ?></p>
        <p>First Name: <?php echo $users["firstName"]; ?></p>
        <p>Last Name: <?php echo $users["lastName"]; ?></p>
        <p>Email Address: <?php echo $users["email"]; ?></p>
        <p>City: <?php echo $users["city"]; ?></p>
    
    <?php
    require_once 'footer.php';
    ?>