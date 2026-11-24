<?php
// Entrada opcional para un servidor PHP local. GitHub Pages utiliza index.html.
// La demostración sigue siendo estática y no requiere base de datos.
header('Content-Type: text/html; charset=UTF-8');
readfile(__DIR__ . '/index.html');
