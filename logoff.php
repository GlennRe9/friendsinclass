<?php
session_start();
$name = $_SESSION['name'];
session_destroy();
header("location:loggedoff.html?namenotlogged=$name");

?>