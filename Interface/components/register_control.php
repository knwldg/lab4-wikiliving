<?php
session_start();

require_once "generalControl.php";

if (registerUser($_POST["inputUsername"], $_POST["inputPassword"], $_POST["email"])) {

	header("Location: ../index.html");

<<<<<<< HEAD
	header('Location: ../index.php');
=======
	exit;
>>>>>>> ca2793cfdf520773504417d28997c175101a5420

}