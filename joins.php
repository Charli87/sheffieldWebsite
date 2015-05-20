<?php

require_once "database.php";

function getReviews() {
$mysqli = mysqli_connect("localhost","root","","assignment");
//$mysqli = new mysqli(SQLHOST, SQLUSER, SQLPASSWORD, SQLDB);
    $sql1 = "
SELECT login.username as username, venues.venueName as venueName, reviews.review, reviews.rating
FROM reviews
inner join login
 on reviews.id=login.id
 inner join venues
 on reviews.venueID=venues.venueID;";

    $results = $mysqli->query($sql1);

    if ($results->num_rows) {
        while ($row = $results->fetch_object()) {
            echo "{$row->username}  {$row->venueName} {$row->review} {$row->rating} <br> ";
        }
    } else {
        echo "No Results";
    }
}

?>