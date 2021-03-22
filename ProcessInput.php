<html>
<body>
<?php 
$host_name = 'db5002042417.hosting-data.io';
$database = 'dbs1662118';
$user_name = 'dbu615958';
$password = $_ENV["DB_PASS"];

$link = new mysqli($host_name, $user_name, $password, $database);
echo"Code Running";
if ($link->connect_error) {
  die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
} else {
  echo '<p>Connection to MySQL server successfully established.</p>';
}

$PostChoice = $_POST["Submit"];
echo"<p>$PostChoice</p>";
$sql = "INSERT INTO OptionSelected (ChoiceMade, TimeOnSite) VALUES('$PostChoice', 0)";

if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }
?>



</body>
</html>