<?php

session_start();
setcookie(session_name(), '', 100);
$_SESSION = array();
session_unset();
session_destroy();

header('Location: ../index.php');