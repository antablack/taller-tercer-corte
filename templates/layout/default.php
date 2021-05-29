<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>

<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Datos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Clientes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Conductores</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Vehiculos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Servicios</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Reparaciones</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Infracciones</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="taller">Taller</a>
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Clientes PDF</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Otros</a>
                </li>
            </ul>

        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>
