<?php

$title = config("APP_NAME") . " - Light weight framework for PHP";
$description = "The best framework for your simple things to keep simpler. Developed by KRAG for php developers as a alternate for LARAVEL for light-weight websites.";
$app_author = config("APP_AUTHOR");

?>

<?php require_once __DIR__ . "/layouts/start.php"; ?>

<?php require_once __DIR__ . "/layouts/navbar.php"; ?>

<?php require_once __DIR__ . "/components/header.php"; ?>

<?php require_once __DIR__ . "/components/content.php"; ?>

<?php require_once __DIR__ . "/components/donations.php"; ?>

<?php require_once __DIR__ . "/layouts/footer.php"; ?>

<?php require_once __DIR__ . "/layouts/end.php"; ?>