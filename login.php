<?php
session_start();
require_once 'user_repository.php';
require_once 'header.php';
$error = null;

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //get the associative array for the user.
    $user = autheticate_user($username, $password, $error);

    //No error means valid password here.
    if (!$error) {
        $_SESSION['currentUser'] = $user['id'];
        header("Location: account.php");
        exit();
    }
}
?>
<h1>Login</h1>
<form method="POST">
    Username: <input name="username"/>
    Password: <input name="password" type="password"/>
    <input type="submit"/>
    <?php if ($error): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>

</form>
<?php require_once "footer.php"; ?>