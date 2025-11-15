<?php
session_start();
include_once __DIR__ . '/../constants.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'ReparaTodo'; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/styles.css">
    <link rel="icon" href="<?= BASE_URL ?>/img/icono-removebg.png" type="image/x-icon">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <a href="<?= BASE_URL ?>/index.php" class="brand">
                    <img src="<?= BASE_URL ?>/img/icono-removebg.png" alt="Icono ReparaTodo" class="brand-icon">
                    <span class="brand-name"><?= NAME_APP_HEADER ?></span>
                </a>
                <nav class="main-nav">
                    <ul>
                        <li><a href="<?= BASE_URL ?>/pages/cursos.php">Cursos</a></li>
                        <li><a href="<?= BASE_URL ?>/pages/servicios.php">Planes</a></li>
                        <li><a href="<?= BASE_URL ?>/pages/contacto.php">Contacto</a></li>
                    </ul>
                </nav>
                <a href="#" class="btn btn-primary">Iniciar Sesión</a>
            </div>
        </div>
    </header>
    <main></main>