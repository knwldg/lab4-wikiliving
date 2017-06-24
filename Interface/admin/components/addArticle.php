<?php

session_start();

require_once ("../../components/generalControl.php");

if (isset($_POST["plantName"]) && isset($_POST["plantText"]) && isset($_POST['articleSubtitle']) && isset($_POST['authorName'])) {

	if(addArticle($_POST["plantName"], $_POST["plantText"], $_POST['plantType'])) {

		echo "Article successfully added";

	}

}