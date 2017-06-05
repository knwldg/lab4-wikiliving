<?php
session_start();

<<<<<<< HEAD
<<<<<<< HEAD
require_once 'generalControl.php';

if (loginUser($_POST['inputUsername'], $_POST['inputPassword'])) {

	header('Location: ../index_log.php');
=======
require_once "generalControl.php";
>>>>>>> ca2793cfdf520773504417d28997c175101a5420
=======
require_once "generalControl.php";
>>>>>>> ca2793cfdf520773504417d28997c175101a5420

loginUser($_POST["inputUsername"], $_POST["inputPassword"]);