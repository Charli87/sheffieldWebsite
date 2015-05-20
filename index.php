<?php
require_once "header.php";
session_start();
require_once 'user_repository.php';

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
<ul id="images">
    <li><img src="images/1.jpg" width="600" height="300" alt="Sheffield Skyline"/></li>
    <li><img src="images/22.jpg" width="600" height="300" alt="Woodlands"/></li>
    <li><img src="images/3.jpg" width="600" height="300" alt="Graffiti Art"/></li>
    <li><img src="images/4.jpg" width="600" height="300" alt="Sheffield Cathedral"/></li>
    <li><img src="images/5.jpg" width="600" height="300" alt="Western Park Gardens"/></li>
    <li><img src="images/6.jpg" width="600" height="300" alt="Sheffield Hallam University"/></li>
</ul>           
<div id="sidebar_container">
    <img class="paperclip" src="images/paperclip.png" alt="paperclip" />
    <div class="sidebar">
        <br>
        <h1>Login/Register </h1>
        <?php if ($error): ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            Username: <input name="username"/>
            Password: <input name="password" type="password"/>
            <input type="submit"/>
			<br>
            <p><a href="register.php">Register</a></p>
        </form>

    </div>
</div>
<div class="content">
    <span class="center"><h1>England's greenest city, and is set in a unique Peak District landscape.</h1></span>
    <span class="center"><p>Whether you're planning a flying visit or you're looking for a longer stay, you're in for a treat. Sheffield offers pulse-racing extreme sports; international cultural events, museums, galleries and theatres; exquisite boutique hotels; delicious food; and attractions for people of any age on any budget. It is also home to the National Pub of the Year 2008 and 2009. If there's one place that has it all, it has to be Sheffield.</p></span>
    <p><span class="center"><img src="images/11.jpg" width="600" height="300" /></span></p>
    <?php require_once "footer.php"; ?>