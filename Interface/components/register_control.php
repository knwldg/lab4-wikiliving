<?php

session_start();

require_once 'generalControl.php';

if (registerUser($_POST['inputUsername'], $_POST['inputPassword'], $_POST['email'])) {

	header('Location: ../index.html');

	exit;

}

else exit;