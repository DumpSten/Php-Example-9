<?php 

include_once 'baglan.php';

if (!isset($_GET['sayfa'])) {
    $_GET['sayfa'] = 'index';
}

switch ($_GET['sayfa']) {
    case 'index':
        include_once 'homepage.php';
        break;
    case 'insert':
        include_once 'insert.php';
        break;
    case 'read':
        include_once 'read.php';
        break;    
    case 'update':
        include_once 'update.php';
        break;
    case 'delete':
        include_once 'delete.php';
        break;
}

?>