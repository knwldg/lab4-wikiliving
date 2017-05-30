<?php

require_once "connection.php";

function registerUser($inputUser, $inputPass, $inputEmail) {

	global $sql_connection;

	if (!isset ($sql_connection)) {

		throw new Exception("SQL Connection failure");

	}

	if (!isset($_POST["inputUsername"]) || !isset($_POST["email"]) || !isset($_POST["inputPassword"]) || !isset($_POST["confirmPassword"]) || $_POST["inputPassword"] != $_POST["confirmPassword"]) {

		throw new Exception("One or more fields were incorrectly filled");

	}

	try {

		$hash = password_hash($inputPass, PASSWORD_DEFAULT);

		$sql_op = $sql_connection->prepare("INSERT INTO users (email, username, password, roles_id_roles) VALUES (?,?,?,1)");

		$sql_op->bind_param("sss", $inputEmail, $inputUser, $hash);

		if (!$sql_op->execute()) {

			throw new Exception("Cannot register user in database");

		}

	}

	catch(Exception $exception) {

			echo "Error: " . $exception;

	}

}

function loginUser($inputUser, $inputPass) {

	global $sql_connection;

	try {

		$role = "";
		$db_hash = "";

		$sql_op = $sql_connection->prepare("SELECT password, roles_id_roles FROM users WHERE username = ? LIMIT 1");

		$sql_op->bind_param("s", $inputUser);

		$sql_op->store_result();

		$sql_op->bind_result($db_hash, $role);

		$sql_op->fetch();

		if ($sql_op->num_rows == 1) {

			if (password_verify($inputPass, $db_hash)) {

				$_SESSION['username'] = $inputUser;

				$_SESSION['role'] = $role;

				return true;

			}

		}

		else {

			throw new Exception("No user found or password incorrect");

		}

	}

	catch(Exception $exception) {

		echo "Error: " . $exception;

	}

}



