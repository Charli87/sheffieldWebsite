<?php
require_once 'header.php';
error_reporting(0);
require_once "register_repository.php";
?>
<h2>Register</h2>
<?php
    if ($insert_user) {
        echo "User has been inserted";
	}
    ?>
<form action="register.php" method="POST">
    <table width="400" border="0" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100">First Name</td>
            <td><input name="firstName" type="text" id="firstName"></td>
        </tr>
        <tr>
            <td width="100">Last Name</td>
            <td><input name="lastName" type="text" id="lastName"></td>
        </tr>
        <tr>
            <td width="100">Date Of Birth</td>
            <td><input name="dateOfBirth" type="date" id="dateOfBirth"></td>
        </tr>
        <tr>
            <td width="100">Email</td>
            <td><input name="email" type="email" id="email"></td>
        </tr>
        <tr>
            <td width="100">City</td>
            <td><input name="city" type="text" id="city"></td>
        </tr>
        <tr>
            <td width="100">Username</td>
            <td><input name="username" type="text" id="username"></td>
        </tr>
        <tr>
            <td width="100">Password</td>
            <td><input name="password" type="text" id="password"></td>
        </tr>
        <tr>
            <td width="100"> </td>
            <td>
                <input name="register" type="submit" id="register" value="Register">
            </td>
        </tr>
    </table>

</form>
<?php
require_once 'footer.php';

?>