<?php

require_once "connection.php";

function checkIfExists($type, $value) {

	// $type define o tipo de check, 1 para email e 2 para username
	// retorna false se não existir e true se existir ou houver outro erro

	global $sql_connection;

	switch ($type) {

		case 1:

			$sql_op = $sql_connection->prepare("SELECT email FROM users where email = ?");

			break;

		case 2:

			$sql_op = $sql_connection->prepare("SELECT username FROM users where username = ?");

			break;

	}

	try {

		if (isset ($type)) {

			$sql_op->bind_param("s", $value);

			if (!$sql_op->execute()) {

				throw new Exception("SQL query failure");

			}

			$sql_op->store_result();

			$sql_op->bind_result($value_db);

			$sql_op->fetch();

			if ($sql_op->num_rows > 0) {

				return true;

			}

			else return false;

		}

		else {

			throw new Exception("Type not defined");

		}

	}

	catch (Exception $exception) {

		echo("Error: ");

		return true;

	}

}

function registerUser($inputUser, $inputPass, $inputEmail) {

	// retorna verdadeiro se o registo foi feito com sucesso
	// caso contrário, retorna falso

	global $sql_connection;

	try {


		if (!isset ($sql_connection)) {

			throw new Exception("SQL Connection failure");

		}

		if (!isset($_POST["inputUsername"]) || !isset($_POST["email"]) || !isset($_POST["inputPassword"]) || !isset($_POST["confirmPassword"]) || $_POST["inputPassword"] != $_POST["confirmPassword"]) {

			throw new Exception("One or more fields were incorrectly filled");

		}

		if(checkIfExists(1, $inputEmail)) {

			throw new Exception("Email already exists in database");

		}

		if(checkIfExists(2, $inputUser)) {

			throw new Exception("User already exists in database");

		}

		$hash = password_hash($inputPass, PASSWORD_DEFAULT);

		$sql_op = $sql_connection->prepare("INSERT INTO users (email, username, password, roles_id_roles) VALUES (?,?,?,1)");

		$sql_op->bind_param("sss", $inputEmail, $inputUser, $hash);

		if (!$sql_op->execute()) {

			throw new Exception("Cannot register user in database");

		}

		else return true;

	}

	catch (Exception $exception) {

			echo "Error: $exception";

			return false;

	}

}

function loginUser($inputUser, $inputPass) {

	global $sql_connection;

	try {

		/* Implementar depois de fazer página de logout

		if (isset($_SESSION["role"])) {

			throw new Exception("User is already logged in");

		}

		*/

		$sql_op = $sql_connection->prepare("SELECT password, roles_id_roles FROM users WHERE username = ? LIMIT 1");

		$sql_op->bind_param("s", $inputUser);

		if (!$sql_op->execute()) {

			throw new Exception("SQL query error");

		}

		$sql_op->store_result();

		$sql_op->bind_result($db_hash, $role);

		$sql_op->fetch();

		if ($sql_op->num_rows === 1) {

			if (password_verify($inputPass, $db_hash)) {

				$_SESSION['username'] = $inputUser;

				$_SESSION['role'] = $role;

				echo($_SESSION['username'] . $_SESSION['role']);

				return true;

			}

			else throw new Exception("No user found or password incorrect");

		}

		else {

			throw new Exception("No user found or password incorrect");

		}

	}

	catch(Exception $exception) {

		echo "Error: $exception";

		return false;

	}

}

/*

function resetPassword($type, $value) {

	// $type representa o tipo de autenticação que o user sabe
	// 1 para email (e enviar um email ao user com hash random)
	// 2 para username (e depois de confirmação de email enviar email ao user)

	switch($type) {

		case 1:



	}

}

*/

function contentFetcher($pageId) {

	global $plantData;

	global $sql_connection;

	try {

		$sql_op = $sql_connection->prepare("SELECT nome_planta, tipo_planta, instr_planta, usos_planta FROM plantas WHERE idplantas = ?");

		$sql_op->bind_param("i", $pageId);

		if (!$sql_op ->execute()) {

			throw new Exception("SQL query error");

		}

		$sql_op->store_result();

		$sql_op->bind_result($nome_planta, $tipo_planta, $instr_planta, $usos_planta);

		$sql_op->fetch();

		echo ("$pageId, $nome_planta, $tipo_planta, $instr_planta, $usos_planta");

		$plantData = array("pageId"=>$pageId, "nomePlanta"=>$nome_planta, "tipoPlanta"=>$tipo_planta, "instrucoesPlanta"=>$instr_planta, "usosPlanta"=>$usos_planta);

		return true;

	}

	catch (Exception $exception) {

		echo "Error: $exception";

		return false;

	}

}

function privilegeChecker($level, $user) {

	// 1 = user, 2 = editor, 3 = admin

	global $sql_connection;

	try {

		$sql_op = $sql_connection->prepare("SELECT roles_id_roles FROM users WHERE username = ?");

		$sql_op->bind_param("s", $user);

		if (!$sql_op->execute())  {

			throw new Exception("SQL query error");

		}

		$sql_op->store_result();

		$sql_op->bind_result($role);

		$sql_op->fetch();

		if ($level === $role) {

			return true;

		}

		else {

			throw new Exception("User is not authorized to view this page");

		}

	}

	catch (Exception $exception) {

		echo("Error : $exception");

		return false;

	}

}