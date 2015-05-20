<?php
//session_start();
if (isset($_GET['currentUser']) && (isset($_GET['admin']))){
    $userID = get_user_by_id($_SESSION['currentUser'], $error);
	$adminID = get_admin_by_id($_SESSION['admin'], $error);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
	
}


?>
<nav>
    <ul class="sf-menu" id="nav">
        <li class="selected"><a href="index.php">Home</a></li>
        <li class="selected"><a href="allVenues.php">All Venues</a></li>

        <?php
        if (isset($_SESSION['currentUser'])) {
            ?>
			<li class="selected"><a href="insertVenue.php">Insert a Venue</a></li>
			<li class="selected"><a href="account.php">User Account</a></li>
            <li class="selected"><a href="logout.php">Logout</a></li>
			
            <?php
        } elseif (isset($_SESSION['admin'])){
			?>
			<li class="selected"><a href="adminAccount.php">Admin Account</a></li>
			<li class="selected"><a href="logout.php">logout</a></li>
			
            <?php
		}else{
			?>
            <li class="selected"><a href="index.php">Login</a></li>
                <?php
            }//End else
            ?>
    </ul>
</nav>