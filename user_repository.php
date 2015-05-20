<?php
require_once 'database.php';

function autheticate_user($username, $password, &$error) {
    $sql = "select * from login where username='${username}'";
    $sql .= " and password='{$password}' ";
    $sql .= "and active = 1;";
    $result = query($sql);

    if ($result->num_rows != 1) {
        $error = "Username or password was incorrect.";
        return null;
    }
    return $result->fetch_assoc();
}

function autheticate_admin($username, $password, &$error) {
    $sql = "select * from login where username='${username}'";
    $sql .= " and password='{$password}'";
    $sql .= "and active = 1";
    $sql .= " and type=1;";
    $result = query($sql);

    if ($result->num_rows != 1) {
        $error = "You need to be logged in as an admin to view this page";
        return null;
    }
    return $result->fetch_assoc();
}

function get_user_by_id($id, &$error) {
    $sql = "select * from login where id={$id} limit 1;";
    $result = query($sql);

    return $result->fetch_assoc();

}
function get_admin_by_id($id, &$error) {
    $sql = "select * from login where id=$id limit 1;";
    $result = query($sql);

    return $result->fetch_assoc();
}

function getUsers() {

    $sql = "SELECT * ";
    $sql .= "FROM login ";

    $result = query($sql);
    $users = array();
    while ($row = $result->fetch_assoc()) {
        array_push($users, $row);
    }
    $result->close();
    return $users;
}
?>