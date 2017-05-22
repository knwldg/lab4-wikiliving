<?php
session_start();



$sql_server = "localhost";
$sql_username = "root";
$sql_password = "";

$sql_connection = new mysqli($sql_server, $sql_username, $sql_password, "deca_16l4_69");

if (!$sql_connection) {

	die("Connection failure: " . mysqli_connect_error());

}

if (!isset($_POST["inputUsername"]) || !isset($_POST["email"]) || !isset($_POST["inputPassword"]) || !isset($_POST["confirmPassword"]) || $_POST["inputPassword"] != $_POST["confirmPassword"]) {

	die("One or more require fields were not filled in, or the passwords did not match.");

}

$inputUsername = $_POST["inputUsername"];
$inputPassword = $_POST["inputPassword"];
$inputEmail = $_POST["inputEmail"];

$user_password_hash = password_hash($inputPassword, PASSWORD_DEFAULT);

$sql_op = $sql_connection->prepare("INSERT INTO users (email, username, password) VALUES (?,?,?)");

$sql_op->bind_param("sss", $inputEmail, $inputUsername, $user_password_hash);

if ($sql_op->execute() == true) {

	/* do stuff */

}

else {

	/* handle error */

}

/*
echo ($_POST["inputUsername"] . " " . $_POST["inputPassword"] . " " . $_POST["confirmPassword"] . " " . $_POST["email"]);
*/
