<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="pragma" content="no-cache" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  <link rel="stylesheet" href="css/Styles.css" >
  <title>Mertyr Software Solutions</title>
</head>
<body style="background-color: grey;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">AB Testing Playground</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.html">Home</a>
      <a class="nav-item nav-link active" href="Login.php">Login<span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>

<form class="col-sm-6 offset-sm-3 text-center" action="Login.php" method="post">
    <p>Hello, please enter your username and password to continue: </p>
Username: <input type="text" name="uname">
<br>
password: <input type="password" name="pword">
<input type="submit" value="Log in" name="Login-Button">
</form>
<form class="col-sm-6 offset-sm-3 text-center" action="CreateAccount.php" method="post">
<div class="Login-button"><input type="Submit" name="Create New Account" value="Create New Account"></div>
</form>


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

function Validate($uname, $pword, $link){
    $sql = "SELECT * FROM Users WHERE (Username =:'$uname')";
    $result = $link->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if(password_verify($pword, $row["Password"])){
                echo("PASSWORD ACCEPTED");
            }}}
}
if(isset($_POST["Login-Button"])){
    Validate($_POST["uname"], $_POST["pword"], $link);
}

?>
</body>