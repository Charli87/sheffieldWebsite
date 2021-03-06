<?php

require_once "database.php";

function getVenueReviewsById($venueID, &$error) {

   // $mysqli = mysqli_connect("localhost","root","root","b3028327_db1");
	$mysqli = mysqli_connect("localhost","root","","assignment");
    $sql = "SELECT login.username as username, venues.venueID as venueID, venues.venueName as venueName, reviews.review as review, reviews.rating as rating
			FROM reviews
			INNER JOIN login
			ON reviews.id=login.id
			INNER JOIN venues
			ON reviews.venueID=venues.venueID
			WHERE reviews.venueID={$venueID};";

    $result = query($sql);

    $reviews = array();
    while ($row = $result->fetch_assoc()) {
        array_push($reviews, $row);
    }
    $result->close();
    return $reviews;
}

?>