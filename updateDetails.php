<?php
require_once "header.php";
session_start();
require_once 'user_repository.php';
$users = getUsers();

$error = null;

if (!isset($_SESSION["admin"])) { 
    header("Location: adminLogin.php");
    exit();
}

if (isset($_POST["id"]) && isset($_POST["username"]) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['type']) && isset($_POST['active'])) {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
	$type = $_POST["city"];
	$active = $_POST["city"];

    //get the associative array for the user.
    $user = updateUserDetails($id, $password, $email, $city);

    //No error means valid password here.
    if (!$error) {
        $_SESSION['currentUser'] = $user['id'];
        header("Location: index.php");
        exit();
    }
}
?>

<h1>Update User Details <?php echo $user["username"]; ?></h1>
<p>User ID: <?php echo $user["id"]; ?></p>
<p>Username: <?php echo $user["username"]; ?></p>
<p>First Name: <?php echo $user["firstName"]; ?></p>
<p>Last Name: <?php echo $user["lastName"]; ?></p>
<p>Date Of Birth: <?php echo $user["dateOfBirth"]; ?></p>
<form method="POST" action="index.php">
    <p>Password: <input type="password" name="password"/></p>

    <p>Email: <input type="text" name="email"/></p>

    <p>City: <input type="text" name="city"/></p>
    <input type="submit"/><br>
    <?php if ($error): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>

</form>