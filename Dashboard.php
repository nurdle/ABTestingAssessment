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
<p style="text-align:center;">Welcome to the main dashboard! this allows you to see every choice a user has made so far. To change the images being</p>
<p style="text-align:center;">displayed, please access the server files and simply change the images inside the Img folder.</p>
<?php
    if(!isset($_COOKIE["username"])){
        echo $_COOKIE["username"];
        echo ("<script> window.location = 'http://abtesting.mertyrsolutions.com/index.html'; </script>");
    } else {
    $host_name = 'db5002042417.hosting-data.io';
    $database = 'dbs1662118';
    $user_name = 'dbu615958';
    $password = 'WalkersBomb99!';
    
    $link = new mysqli($host_name, $user_name, $password, $database);
    if ($link->connect_error) {
      die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
    }
    $sql = "SELECT * FROM OptionSelected";
    $result = $link->query($sql);
    $ACounter = 0;
    $BCounter = 0;
    $TotalClicks = 0;
    while($row = mysqli_fetch_array($result)){
        // if the 4th cell, end last row, and start new row
            echo
                "<td width='180px' height='100px'>"
                ."<div class = 'choices-made' style='text-align:center;'>";
            if($row['ChoiceMade'] == "Option A"){
                $ACounter = $ACounter + 1;
                $TotalClicks = $TotalClicks + 1;
            } elseif($row['ChoiceMade'] == "Option B"){
                $BCounter = $BCounter + 1;
                $TotalClicks = $TotalClicks + 1;
            }
    
        }
    $APercent = ($ACounter / $TotalClicks) * 100;
    $BPercent = ($BCounter / $TotalClicks) * 100;
    echo
    "<p style='text-align:center;'> Total no. choices for option A: $ACounter</p>"
    ."<p style='text-align:center;'> Total no. choices for option B: $BCounter</p>"
    ."<p style='text-align:center;'> Total no. page interactions: $TotalClicks</p>"
    ."<p style='text-align:center;'> Choices for A: $APercent% Choices for B: $BPercent%</p>"
    ;
    }





?>
<form class="col-sm-6 offset-sm-3 text-center"  action="DeleteAccount.php" method="post">
    <input type="submit" name = "submit" value = "Delete Account">
</form>
<form class="col-sm-6 offset-sm-3 text-center"  action="ClearResults.php" method="post">
    <input type="submit" name = "submit" value = "Clear Results">
</form>
<form class="col-sm-6 offset-sm-3 text-center"  action="Logout.php" method="post">
    <input type="submit" name = "submit" value = "Logout">
</form>
</body>
</html>