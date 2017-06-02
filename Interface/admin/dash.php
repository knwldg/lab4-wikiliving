<!DOCTYPE html>
<?php

session_start();

require_once "../components/generalControl.php";

if (!isset($_SESSION["role"])) {

    die("User is not logged in");

}

if (!privilegeChecker(3, $_SESSION["username"])) {

    die ("You do not have the necessary permissions to view this page");

}

?>

<html>
<head>
<meta http-equiv="refresh" content="0;url=pages/index.html">
<title>SB Admin 2</title>
<script language="javascript">
    window.location.href = "index.php"
</script>
</head>
<body>
Go to <a href="index.php">index.php</a>
</body>
</html>
