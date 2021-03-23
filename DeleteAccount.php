<?php
$host_name = 'db5002042417.hosting-data.io';
$database = 'dbs1662118';
$user_name = 'dbu615958';
$password = 'WalkersBomb99!';
$link = new mysqli($host_name, $user_name, $password, $database);
if ($link->connect_error) {
    die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
}
$uname = $_COOKIE["username"];
$sql = "DELETE FROM Users WHERE Username='$uname'";
if (mysqli_query($link, $sql)){
    setcookie("username", $uname, time() - 3600);
    echo"User Deleted";
    echo ("<script> window.location = 'http://abtesting.mertyrsolutions.com/index.html'; </script>");

}
?>