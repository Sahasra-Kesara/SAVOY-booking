<?php
include "Database.php";
session_start();

// Check if username and password keys exist in the POST request
if(!isset($_POST['username']) || !isset($_POST['password']) || $_POST['username'] == '' || $_POST['password'] == ''){
    foreach ($_POST as $key => $value) {
        if(empty($value)){
            echo "<li>Please Enter " . htmlspecialchars($key) . ".</li>";
        }
    }
    exit();
}

$uname = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Hash the password (assuming passwords are stored as hashes in the database)
// $hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql_query = "SELECT count(*) as cntUser FROM user WHERE username='".$uname."' and password='".$password."'";
$result = mysqli_query($conn, $sql_query);

// Check for query execution errors
if (!$result) {
    echo "<li>Database query failed: " . mysqli_error($conn) . "</li>";
    exit();
}

$row = mysqli_fetch_array($result);
$count = $row['cntUser'];

if ($count > 0) {
    $_SESSION['uname'] = $uname;
    echo 1;
} else {
    echo "<li>Invalid Username or password.</li>";
    exit();
}
?>
