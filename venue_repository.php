<?php

require_once "database.php";

function getVenues() {

    $sql = "SELECT * ";
    $sql .= "FROM venues ";

    if (!empty($_GET['filterVenues']) && (empty($_GET['filterStar']) && (empty($_GET['filterOrder'])))) {
        $filterVenues = $_GET["filterVenues"];
        $sql .= "WHERE venueType = '$filterVenues' ";
        $sql .= "ORDER BY venueName ASC";
    } elseif (empty($_GET['filterVenues']) && (!empty($_GET['filterStar']) && (empty($_GET['filterOrder'])))) {
        $filterStar = $_GET["filterStar"];
        $sql .= "WHERE userRating = '$filterStar' ";
        $sql .= "ORDER BY venueName ASC";
    } elseif (empty($_GET['filterVenues']) && (empty($_GET['filterStar']) && (!empty($_GET['filterOrder'])))) {
        $filterOrder = $_GET["filterOrder"];
        $sql .= "ORDER BY venueName ${filterOrder} ";
    } elseif (!empty($_GET['filterVenues']) && (!empty($_GET['filterStar']) && (empty($_GET['filterOrder'])))) {
        $filterVenues = $_GET["filterVenues"];
        $filterStar = $_GET["filterStar"];
        $sql .= "WHERE venueType = '$filterVenues' ";
        $sql .= "and userRating = '$filterStar' ";
        $sql .= "ORDER BY venueName ASC";
    } elseif (!empty($_GET['filterVenues']) && (empty($_GET['filterStar']) && (!empty($_GET['filterOrder'])))) {
        $filterVenues = $_GET["filterVenues"];
        $filterOrder = $_GET['filterOrder'];
        $sql .= "WHERE venueType = '$filterVenues' ";
        $sql .= "ORDER BY venueName ${filterOrder}";
    } elseif (empty($_GET['filterVenues']) && (!empty($_GET['filterStar']) && (!empty($_GET['filterOrder'])))) {
        $filterStar = $_GET["filterStar"];
        $filterOrder = $_GET['filterOrder'];
        $sql .= "WHERE userRating = '$filterStar' ";
        $sql .= "ORDER BY venueName ${filterOrder}";
    } elseif (!empty($_GET['filterVenues']) && (!empty($_GET['filterStar']) && (!empty($_GET['filterOrder'])))) {
        $filterVenues = $_GET["filterVenues"];
        $filterStar = $_GET["filterStar"];
        $filterOrder = $_GET['filterOrder'];
        $sql .= "WHERE venueType = '$filterVenues' ";
        $sql .= "and userRating = '$filterStar' ";
        $sql .= "ORDER BY venueName ${filterOrder}";
    } elseif (empty($_GET['filterVenues']) && (empty($_GET['filterStar']) && (empty($_GET['filterOrder'])))) {
        $sql .= "ORDER BY venueName ASC";
    }

    $result = query($sql);
    $venues = array();
    while ($row = $result->fetch_assoc()) {
        array_push($venues, $row);
    }
    $result->close();
    return $venues;
}

function getVenueById($venueID, &$error) {
    $sql = "select * from venues where venueID={$venueID} limit 1;";
    $result = query($sql);

    $venues = array();
    while ($row = $result->fetch_assoc()) {
        array_push($venues, $row);
    }
    $result->close();
    return $venues;
}

?>