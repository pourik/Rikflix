<?php
require_once('includes/config.php');
require_once('includes/classes/PreviewProvider.php');
require_once('includes/classes/Entity.php');
require_once('includes/classes/EntityProvider.php');
require_once('includes/classes/CategoryContainers.php');
require_once('includes/classes/ErrorMessage.php');
require_once('includes/classes/SeasonProvider.php');

if(!isset($_SESSION["userLoggedIn"])) {
    header("Location: login.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rikflix</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/f383e3af4a.js" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </head>
    <body>
        <div class="wrapper">