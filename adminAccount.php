<?php
session_start();
require_once 'user_repository.php';
require_once 'header.php';
$error = null;

if (!isset($_SESSION["admin"])) { 
    header("Location: adminLogin.php");
    exit();
}

$user = get_admin_by_id($_SESSION["admin"], $error);
?>
        <h1>Admin Account</h1>
        <p>Hello <?php echo $user["username"]; ?></p>
        		
        <a href="allUsers.php">View all Users</a><br>
        <br>
    <a href="insertVenue.php">Insert a Venue</a>
<?php
require_once 'footer.php';
?>