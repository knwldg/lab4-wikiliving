<?php

session_start();

require_once 'generalControl.php';

if (loginUser($_POST['inputUsername'], $_POST['inputPassword'])) {

	header('Location: ../index.html');

	exit;

}

else exit;