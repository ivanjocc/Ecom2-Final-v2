<?php
session_start();
include_once 'public/header.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $viewPath = 'views/' . $page . '.php';

    if (file_exists($viewPath)) {
        include_once $viewPath;
    } else {
        echo 'La página solicitada no existe.';
    }
} else {
    // Carga una vista predeterminada si no se especifica 'page'
    include_once 'views/home.php';
}
?>
