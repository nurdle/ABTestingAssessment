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
  <title>AB Testing - Dashboard</title>
</head>
<body style="background-color: grey;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">AB Testing Playground</a>
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
<?php
    if(!isset($_COOKIE[$cookie_name])){
        echo"<p>ERROR: 403. You do not have permission to view this page. Please log in</p>";
    } else {
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
    $sql = "SELECT * FROM OptionSelected";
    $result = $link->query($sql);
    $counter = 1;
    while($row = mysqli_fetch_array($result)){
        // if the 4th cell, end last row, and start new row
            if ($counter%3==1){
                echo "</tr><tr>";
            }
            echo
                "<td width='180px' height='200px'>"
                ."<div class = 'fruit_image'>"
                ."<img src='"
                .$row['ChoiceMade'];
            // increase the counter
            $counter++;
        }
    }


    }


?>
