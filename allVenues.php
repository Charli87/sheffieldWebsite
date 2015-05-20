<?php
session_start();
require_once "venue_repository.php";
require_once "header.php";
$venues = getVenues();
?>

<form id="filterVenue" method="GET">
    <select id="filterVenues" name="filterVenues" onchange='this.form.submit()'>
        <option value="0" selected="selected">--All Venues--</option>
        <option value="cafe">Coffee & Cakes</option>
        <option value="bar">Ale & Cocktails</option>
        <option value="cinema">Movie & Treats</option>
        <option value="food">Food & Wine</option>
        <option value="shop">Wraggs & Riches</option>
    </select>
    <select id="filterStar" name="filterStar" onchange='this.form.submit()'>
        <option value="0" selected="selected">--All User Ratings--</option>
        <option value="5">5 Stars</option>
        <option value="4">4 Stars</option>
        <option value="3">3 Stars</option>
        <option value="2">2 Stars</option>
        <option value="1">1 Star</option>
    </select>
    <select id="filterOrder" name="filterOrder" onchange='this.form.submit()'>
        <option value="0" selected="selected">--Order By--</option>
        <option value="ASC">Ascending</option>
        <option value="DESC">Descending</option>
    </select>
    <noscript><input type="submit" value="Submit"></noscript>
</form>

<script type="text/javascript">
    document.getElementById('filterVenues').value = "<?php echo $_GET['filterVenues']; ?>";
    document.getElementById('filterStar').value = "<?php echo $_GET['filterStar']; ?>";
    document.getElementById('filterOrder').value = "<?php echo $_GET['filterOrder']; ?>";
</script>

<!--Show Venues-->
<table>
    <colgroup>
        <col span="1" style="width: 30%;">
        <col span="1" style="width: 30%;">
        <col span="1" style="width: 40%;">
    </colgroup>
    <tr><th>Venue Name</th><th>Slogan</th><th>Images</th></tr>
    <?php foreach ($venues as &$venue): ?>
        <tr>
            <td><a href="venue.php?venueID=<?php echo $venue['venueID']; ?>" style='float:left'><?php echo $venue["venueName"]; ?></a></td>
            <td><a href="venue.php?venueID=<?php echo $venue['venueID']; ?>" style='float:left'><?php echo $venue["slogan"]; ?></a></td>
            <td><a href="venue.php?venueID=<?php echo $venue['venueID']; ?>" style='float:left'><img src="<?php echo $venue["images"]; ?>"  width="350"/></a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php require_once "footer.php"; ?>