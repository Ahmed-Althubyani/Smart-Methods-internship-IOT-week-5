<?php
$servername = "localhost";

// REPLACE with your Database name
$dbname = "control";
// REPLACE with Database user
$username = "user";
// REPLACE with Database user password
$password = "password";

if (isset($_POST["submit"])) {
  $value = test_value($_POST["submit"]);

  if (in_array($value, ["Forward", "Left", "Stop", "Right", "Backward"])) {
    $query = strtolower($value[0]);
    try {
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      $sql = "INSERT INTO control (value) VALUES ('$query')";
      $conn->query($sql);
      $massage = $value;
      $conn->close();
    } catch (Exception $e) {
      $massage = "error: connection error";
    }
  } else {
    $massage = "error: value not correct";
  }
}

function test_value($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Robot Control</title>
  <style>
    body {
      background: linear-gradient(0deg, #5b25f1, #a585ff) fixed;
      text-align: center;
    }

    div {
      display: inline-block;

    }

    h1 {
      color: white;
      font-size: 5vw;
    }

    p{
      color: white;
    }

    .button {
      box-shadow: inset 0px 39px 0px -15px #a685ff;
      background-color: #9878fa;
      border-radius: 10px;
      border: 1px solid #ffffff;
      display: inline-block;
      cursor: pointer;
      color: #ffffff;
      font-family: Arial;
      font-size: 3vw;
      padding: 6px 0px;
      margin: 3vw;
      width: 20vw;
      text-decoration: none;
      text-shadow: 0px 1px 0px #5b25f1;
    }

    .button:hover {
      background-color: #8865f0;
    }

    .button:active {
      position: relative;
      top: 1px;
    }
  </style>
</head>

<body>
  <div>
    <h1>Robot Control</h1>
    <form action="index.php" method="post">
      <input class="button" type="submit" name="submit" value="Forward" />
      <br />
      <input class="button" type="submit" name="submit" value="Left" />
      <input class="button" type="submit" name="submit" value="Stop" />
      <input class="button" type="submit" name="submit" value="Right" />
      <br />
      <input class="button" type="submit" name="submit" value="Backward" />
    </form>
  </div>
  <p><?= $massage?></p>
</body>

</html>