<?php
session_start();
require_once "user_repository.php";
require_once "header.php";
$users = getUsers();

if (!isset($_SESSION["admin"])) { 
    header("Location: adminLogin.php");
    exit();
}

$active = array(1 => "Activated", 0 => "Deactivated");

?>

<table>
    <colgroup>
        <col span="1" style="width: 30%;">
        <col span="1" style="width: 30%;">
        <col span="1" style="width: 40%;">
    </colgroup>
    <tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Active</th></tr>
    <?php foreach ($users as &$user): ?>
        <tr>
            <td><?php echo $user["username"]; ?></td>
            <td><?php echo $user["firstName"]; ?></td>
            <td><?php echo $user["lastName"]; ?></td>
            <td><?php echo $user["email"]; ?></td>
			<td><?php echo $active[$user['active']];?></td>
			<td><a href="updateDetails.php">Update</a></td>
    <?php endforeach; ?>
</table>
<?php require_once "footer.php"; ?>