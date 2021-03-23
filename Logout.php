<?php
setcookie("username", $uname, time() - 3600);
echo ("<script> window.location = 'http://abtesting.mertyrsolutions.com/index.html'; </script>");
?>