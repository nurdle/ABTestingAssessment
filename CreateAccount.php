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

<form class="col-sm-6 offset-sm-3 text-center" action="InsertAccount.php" method="post">
    <p>Hello, please enter your username and password to continue: </p>
Username: <input type="text" name="uname">
<br>
password: <input type="password" name="pword">
<br>
Email: <input type="text" name="email">
<div class="Create-button"><input type="Submit" name="Create New Account" value="Create New Account"></div>
</form>

