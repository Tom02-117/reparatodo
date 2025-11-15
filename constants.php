<?php
define("BASE_URL", "http://localhost/reparatodo"); // ¡Asegúrate que esta URL sea correcta para tu entorno local!
?>```

#### `templates/header.php`
```php
<?php require_once __DIR__ . '/../constants.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'ReparaTodo'; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/styles.css">
    <link rel="icon" href="<?= BASE_URL ?>/img/icono-removebg.png">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <a href="<?= BASE_URL ?>/index.php" class="brand">
                    <img src="<?= BASE_URL ?>/img/icono-removebg.png" alt="Icono" class="brand-icon">
                    <span class="brand-name">ReparaTodo</span>
                </a>
                <nav class="main-nav">
                    <a href="<?= BASE_URL ?>/pages/cursos.php">Cursos</a>
                    <a href="<?= BASE_URL ?>/pages/planes.php">Planes</a>
                    <a href="<?= BASE_URL ?>/pages/contacto.php">Contacto</a>
                </nav>
            </div>
        </div>
    </header>
    <main></main>