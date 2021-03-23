<?php
$host_name = 'db5002042417.hosting-data.io';
$database = 'dbs1662118';
$user_name = 'dbu615958';
$password = 'WalkersBomb99!';

$link = new mysqli($host_name, $user_name, $password, $database);
if ($link->connect_error) {
  die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
} else {
  echo '<p>Connection to MySQL server successfully established.</p>';
}
$uname = $_POST["uname"];
$pword = $_POST["pword"];
$email = $_POST["email"];

$HashPass = password_hash($pword, PASSWORD_DEFAULT);
$sql = "INSERT INTO Users(Username, Email, Password) VALUES('$uname','$email','$HashPass')";
echo"<p>Query Created</p>";
if (mysqli_query($link, $sql)){
  echo"User account created";
  setcookie("username", $uname, time() + 1800, "/");
  echo ("<script> window.location = 'http://abtesting.mertyrsolutions.com/Dashboard.php'; </script>");
  die();
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

?>