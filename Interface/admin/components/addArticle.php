<?php

session_start();

require_once ('../../components/generalControl.php');

if (isset($_POST['plantName']) && isset($_POST['plantText'])) {

	if(addArticle($_POST['plantName'], $_POST['plantText'], 1)) {

		header('Location: ../index.html');

		exit;

	}

	else {

		header('Location: ../index.html');

		exit;

	}

}