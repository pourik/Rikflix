<?php
require_once('includes/Header.php');

if(!isset($_GET["id"])){
    ErrorMessage::show('No ID passed into page');
}

$entityId = $_GET["id"];
$entity = new Entity($con, $entityId);

$previewProvider = new PreviewProvider($con, $userLoggedIn);
echo $previewProvider->createPreviewVideo(null);

$seasonProvider = new SeasonProvider($con, $userLoggedIn);
echo $seasonProvider->create($entity);

?>