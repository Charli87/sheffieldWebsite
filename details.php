<?php
require_once "header.php";
session_start();
require_once 'user_repository.php';

$error = null;

if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['dateOfBirth']) && isset($_POST['city'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $city = $_POST["city"];

    //get the associative array for the user.
    $user = updateUserDetails($id, $username, $password, $firstName, $lastName, $email, $dateOfBirth, $city);

    //No error means valid password here.
    if (!$error) {
        $_SESSION['currentUser'] = $user2['id'];
        header("Location: index.php");
        exit();
    }
}

$user2 = get_user_by_id($_SESSION["currentUser"], $error);
?>

<h1>Update User Details <?php echo $user2["username"]; ?></h1>
<p>User ID: <?php echo $user2["id"]; ?></p>
Username: <?php echo $user2["username"]; ?><br>
Password: <?php echo $user2["password"]; ?><br>
First Name: <?php echo $user2["firstName"]; ?><br>
Last Name: <?php echo $user2["lastName"]; ?><br>
Email: <?php echo $user2["email"]; ?><br>
Date Of Birth: <?php echo $user2["dateOfBirth"]; ?><br>
City: <?php echo $user2["city"]; ?><br>
<a href="updateDetails.php">Update Details</a>
<!--             <input type="submit"/><br>
?php if ($error):?>
<p>?php echo $error;?></p>
?php endif; ?> -->

</form>