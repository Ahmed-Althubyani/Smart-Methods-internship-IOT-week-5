<?php
$servername = "localhost";

// REPLACE with your Database name
$dbname = "control";
// REPLACE with Database user
$username = "user";
// REPLACE with Database user password
$password = "password";

if (isset($_GET["submit"])) {
    try {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT value FROM control WHERE id=(SELECT MAX(id) FROM control);";
        $result = $conn->query($sql);
        $result = $result->fetch_assoc();
        $massage = $result["value"];
        $conn->close();
    } catch (Exception $e) {
        $massage = "error: connection error";
    }
} else {
    $massage =  "error: no value in the GET";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control</title>
</head>

<body>
    <p><?= $massage ?></p>
</body>

</html>