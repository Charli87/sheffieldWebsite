<?php
session_start();
error_reporting(0);
require_once "venue_repository3.php";
require_once "header.php";
if (isset($_GET['currentUser']) && (isset($_GET['admin']))) {
    $userID = get_user_by_id($_SESSION['currentUser'], $error);
	$adminID = get_admin_by_id($_SESSION['admin'], $error);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

//if your logged in as a user or admin then this form will appear
if (isset($_SESSION['currentUser']) || (isset($_SESSION['admin']))) {
    ?>
    <h2>Add a venue </h2>
    <?php
    if ($insert_venue) {
        echo "Venue has been inserted";
    }
    ?>
    <form action="insertVenue.php" method="POST">
        <table width="400" border="0" cellspacing="1" cellpadding="2">
            <tr>
                <td width="100">Venue Name</td>
                <td><input name="venueName" type="text" id="venueName"></td>
            </tr>
            <tr>
                <td width="100">City</td>
                <td><input name="city" type="text" id="city"></td>
            </tr>
            <tr>
                <td width="100">Slogan</td>
                <td><input name="slogan" type="text" id="slogan"></td>
            </tr>
            <tr>
                <td width="100">Description</td>
                <td><input name="description" type="text" id="description"></td>
            </tr>
            <tr>
                <td width="100">Address</td>
                <td><input name="address" type="text" id="address"></td>
            </tr>
            <tr>
                <td width="100">Post Code</td>
                <td><input name="postcode" type="text" id="postcode"></td>
            </tr>
            <tr>
                <td width="100">Telephone</td>
                <td><input name="telephone" type="text" id="telephone"></td>
            </tr>
            <tr>
                <td width="100">Google Maps Code</td>
                <td><input name="googleMapsCode" type="text" id="googleMapsCode"></td>
            </tr>
            <tr>
                <td width="100">Images</td>
                <td><input name="images" type="text" id="images" /></td>
            </tr>
            <tr>
                <td width="100">User Rating</td>
                <td><input name="userRating" type="integer" id="userRating"></td>
            </tr>
            <tr>
                <td width="100">Venue Type</td>
                <td><input name="venueType" type="text" id="venueType"></td>
            </tr>
            <tr>
                <td width="100"> </td>
                <td>
                    <input name="addVenue" type="submit" id="addVenue" value="Add Venue">
                </td>
            </tr>
        </table>

    </form>
    <?php
} else { //if your not logged in then it will take you to the index page as you have to be logged in to add a venue.
    header("Location: index.php");
}//End else
?>
<?php require_once "footer.php"; ?>