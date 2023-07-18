<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php print($title) ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php print($description) ?>">
    <meta name="author" content="<?php print($app_author) ?>">
    <link rel="shortcut icon" href="<?php print(asset('images/favicon.png')) ?>">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="<?php print(asset('fontawesome/js/all.min.js')) ?>"></script>

    <!-- Plugins CSS -->
    <!--link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css"-->
    <link rel="stylesheet" href="<?php print(asset('plugins/simplelightbox/simple-lightbox.min.css')) ?>">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php print(asset('css/theme.css')) ?>">

</head>

<body class="
    <?php if (isset($body_class)) {
        print($body_class);
    } ?>">