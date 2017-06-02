<?php

require_once "connection.php";

function checkIfExists($type, $value) {

	// $type define o tipo de check, 1 para email, 2 para username, 3 para nome de artigo
	// retorna false se não existir e true se existir ou houver outro erro

	global $sql_connection;

	switch ($type) {

		case 1:

			$sql_op = $sql_connection->prepare("SELECT email FROM users WHERE email = ?");

			break;

		case 2:

			$sql_op = $sql_connection->prepare("SELECT nome_user FROM users WHERE nome_user = ?");

			break;


		case 3:

			$sql_op = $sql_connection->prepare("SELECT nome_planta FROM plantas WHERE nome_planta = ?");

			break;

	}

	try {

		if (isset ($type) && isset($sql_op)) {

			$sql_op->bind_param('s', $value);

			if (!$sql_op->execute()) {

				throw new Exception('SQL query failure');

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

			throw new Exception('Type not defined');

		}

	}

	catch (Exception $exception) {

		echo("Error: $exception");

		return true;

	}

}

function registerUser($inputUser, $inputPass, $inputEmail) {

	// retorna verdadeiro se o registo foi feito com sucesso
	// caso contrário, retorna falso

	global $sql_connection;

	try {

		if (!isset ($sql_connection)) {

			throw new Exception('SQL Connection failure');

		}

		if (!isset($_POST['inputUsername']) || !isset($_POST['email']) || !isset($_POST['inputPassword']) || !isset($_POST['confirmPassword']) || $_POST['inputPassword'] != $_POST['confirmPassword']) {

			throw new Exception('One or more fields were incorrectly filled');

		}

		if(checkIfExists(1, $inputEmail)) {

			throw new Exception('Email already exists in database');

		}

		if(checkIfExists(2, $inputUser)) {

			throw new Exception('User already exists in database');

		}

		$hash = password_hash($inputPass, PASSWORD_DEFAULT);

		$sql_op = $sql_connection->prepare("INSERT INTO users (email, nome_user, password_hash, roles_id_roles) VALUES (?,?,?,1)");

		$sql_op->bind_param('sss', $inputEmail, $inputUser, $hash);

		if (!$sql_op->execute()) {

			throw new Exception('Cannot register user in database');

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

		$sql_op = $sql_connection->prepare("SELECT password_hash, roles_id_roles FROM users WHERE nome_user = ? LIMIT 1");

		$sql_op->bind_param('s', $inputUser);

		if (!$sql_op->execute()) {

			throw new Exception('SQL query error');

		}

		$sql_op->store_result();

		$sql_op->bind_result($db_hash, $role);

		$sql_op->fetch();

		if ($sql_op->num_rows === 1) {

			if (password_verify($inputPass, $db_hash)) {

				$_SESSION['username'] = $inputUser;

				$_SESSION['role'] = $role;

				return true;

			}

			else throw new Exception('No user found or password incorrect');

		}

		else throw new Exception('No user found or password incorrect');

	}

	catch(Exception $exception) {

		echo("Error: $exception");

		return false;

	}

}

function contentFetcher($pageId) {

	// define o array $plantData com os índices pageId, nomePlanta e textoPlanta

	global $plantData;

	global $sql_connection;

	try {

		$sql_op = $sql_connection->prepare("SELECT nome_planta, texto_planta FROM plantas WHERE id_plantas = ?");

		$sql_op->bind_param('i', $pageId);

		if (!$sql_op ->execute()) {

			throw new Exception('SQL query error');

		}

		$sql_op->store_result();

		$sql_op->bind_result($nome_planta, $texto_planta);

		$sql_op->fetch();

		$plantData = array('pageId'=>$pageId, 'nomePlanta'=>$nome_planta, 'textoPlanta'=>$texto_planta);

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

		$sql_op = $sql_connection->prepare("SELECT roles_id_roles FROM users WHERE nome_user = ?");

		$sql_op->bind_param('s', $user);

		if (!$sql_op->execute())  {

			throw new Exception('SQL query error');

		}

		$sql_op->store_result();

		$sql_op->bind_result($role);

		$sql_op->fetch();

		if ($level === $role) {

			return true;

		}

		else {

			throw new Exception('Permission not granted');

		}

	}

	catch (Exception $exception) {

		echo("Error: $exception");

		return false;

	}

}

function listArticles() {

	global $articleList;

	global $sql_connection;

	$sql_op = $sql_connection->query("SELECT nome_planta, id_plantas FROM plantas ORDER BY nome_planta ASC");

	for ($articleList = array (); $row = $sql_op->fetch_assoc(); $articleList[] = $row);

	}

function addArticle($plantName, $plantText, $plantType) {

	global $sql_connection;

	try {

		if (!isset ($sql_connection)) {

			throw new Exception('SQL Connection failure');

		}

		if(checkIfExists(3, $plantName)) {

			throw new Exception('Plant already exists in database');

		}

		$sql_op = $sql_connection->prepare("INSERT INTO plantas (nome_planta, texto_planta, tipos_planta_id_tipos_planta) VALUES (?,?,?)");

		$sql_op->bind_param('ssi', $plantName, $plantText, $plantType);

		if (!$sql_op->execute()) {

			throw new Exception('Cannot register plant in database');

		}

		else return true;

	}

	catch (Exception $exception) {

		echo ("Error: $exception");

		return false;

	}

}

function editArticle($articleId, $plantText) {

	global $sql_connection;

	try {

		$sql_op = $sql_connection->prepare("UPDATE plantas SET texto_planta = ? WHERE id_plantas = ?");

		$sql_op->bind_param('si', $plantText, $articleId);

		if (!$sql_op->execute()) {

			throw new Exception('Cannot update plant record in database');

		}

	}

	catch (Exception $exception) {

		echo ("Error: $exception");

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
