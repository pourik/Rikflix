<?php
require_once('includes/Header.php');

$previewProvider = new PreviewProvider($con, $userLoggedIn);
echo $previewProvider->createPreviewVideo(null);

$previewCategories = new CategoryContainers($con, $userLoggedIn);
echo $previewCategories->showAllCategories();

?>