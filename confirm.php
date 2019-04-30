<?php
session_start();
$_SESSION["text"]=$_POST["utext"];

echo "hi ";
echo $_SESSION['uname'];
echo "<br>";
echo "your typed text:";
echo "Nafeesa is a good girl";
echo  $_SESSION['text'];
session_destroy();
?>	