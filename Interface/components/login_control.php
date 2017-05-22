<?php
session_start();

echo ($_POST["inputUsername"] . " " . $_POST["inputPassword"]);

$sql_server = "localhost";
$sql_username = "root";
$sql_password = "";

$sql_connection = new mysqli($sql_server, $sql_username, $sql_password, "deca_16l4_69");

if (!$sql_connection) {

	die("Connection failure: " . mysqli_connect_error());

}

$inputUsername = $_POST["inputUsername"];
$inputPassword = $_POST["inputPassword"];