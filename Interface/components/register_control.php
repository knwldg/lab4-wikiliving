<?php
session_start();

require_once "generalControl.php";

registerUser($_POST["inputUsername"], $_POST["inputPassword"], $_POST["email"]);
