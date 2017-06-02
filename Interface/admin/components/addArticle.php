<?php

session_start();

require_once ("../../components/generalControl.php");

if (isset($_POST["plantName"]) && isset($_POST["plantText"])) {

	if(addArticle($_POST["plantName"], $_POST["plantText"])) {

		echo "Article successfully added";

	}

}