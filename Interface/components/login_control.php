<?php
session_start();

require_once "generalControl.php";

loginUser($_POST["inputUsername"], $_POST["inputPassword"]);