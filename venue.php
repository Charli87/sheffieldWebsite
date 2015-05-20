<?php
session_start();
error_reporting(0);
if(isset($_GET['currentUser'])){
    $userID = get_user_by_id($_SESSION['currentUser'], $error);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
require_once "venue_repository.php";
$venueID = $_GET['venueID'];

$venues = getVenueById($venueID, $error);
require_once "review_repository2.php";

require_once "review_repository.php";
$reviews = getVenueReviewsById($venueID, $error);
require_once 'user_repository.php';

require_once "header.php";
?>
<!--Show single Venues when you have clicked on the name slogan or image-->
<div id='single_product'>
    <?php foreach ($venues as &$venue): ?>
        <h2>Venue Name: <?php echo $venue["venueName"] ?></h2>
        <br>
            <img src=<?php echo $venue["images"]; ?> width='400px' height='300px' align="left"/>
        <p> Description of venue: <?php echo $venue["description"]; ?></p><br>
            <p> Telephone Number: <?php echo $venue["telephone"]; ?></p>
        <p><br><br><br><br><br><br><br><br>
            <?php echo $venue["googleMapsCode"]; ?><br></p>
        <a href='allVenues.php' style='float:left'>Go Back</a>
            <br>
            
    <?php endforeach; ?>
</div>


<!-- This section shows the reviews for the venue you have clicked on -->
<div id='single_review'>
<table>
    <tr><th>Venue Name</th><th>Username</th><th>Review</th><th>Rating</th></tr>
    <?php foreach ($reviews as &$review):?>
        <tr>
            <td><?php echo $review["venueName"]; ?></td>
            <td><?php echo $review["username"]; ?></td>
            <td><?php echo $review["review"]; ?></td>
			<td><?php echo $review["rating"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</div>

<?php


//Show the Welcome or the form
if(isset($_SESSION['currentUser']) || (isset($_SESSION['admin']))){
?>
<h2> Insert a review</h2>
<?php
    if ($insert_review) {//if the form below has been submitted into the database then a message will say Review has been inserted
        echo "Review has been inserted";
    }
    ?>
<form action="venue.php?venueID=<?php echo $venue['venueID']; ?>" method="POST">
    <table width="400" border="0" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100">Review</td>
            <td><input name="review" type="text" id="review"></td>
        </tr>
        <tr>
            <td width="100">Rating</td>
            <td><input name="rating" type="text" id="rating"></td>
        </tr>
        <tr>
            <td width="100"> </td>
            <td>
                <input name="addReview" type="submit" id="addReview" value="addReview">
            </td>
        </tr>
    </table>

</form>
<?php
}//end of if statement
?>

<?php require_once "footer.php"; ?>