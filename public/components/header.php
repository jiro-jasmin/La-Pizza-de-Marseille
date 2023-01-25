<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // demarre la session que si elle n'a pas deja ete demaree
}
require_once dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'nav.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Florian Giraud">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/common.css">
    <title>
        <?php if (isset($title)) : ?>
            <?= $title; ?>
        <?php else : ?>
            Exercice PHP
        <?php endif; ?>
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-0 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php" style="font-family: 'Great Vibes', cursive">La Pizza de Marseille</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <?= nav_menu('nav-link'); ?>
                </ul>
            </div>
        </div>
    </nav>

<main>
    