<?php

$host_name = 'db5002042417.hosting-data.io';
$database = 'dbs1662118';
$user_name = 'dbu615958';
$password = 'WalkersBomb99!';

$link = new mysqli($host_name, $user_name, $password, $database);
if ($link->connect_error) {
  die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
}

$uname = $_POST["uname"];
$pword = $_POST["pword"];
$sql = "SELECT Username, Password FROM Users WHERE Username='$uname'";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $hashed = $row["Password"];
        if(password_verify($pword, $hashed)){
            setcookie("username", $uname, time() + 1800);
            echo"PASSWORD ACCEPTED";
            echo ("<script> window.location = 'http://abtesting.mertyrsolutions.com/Dashboard.php'; </script>");
            die();
            exit();
        }else {
            echo"$hashed";
            echo"$pword";
            }
    
    }}

?>