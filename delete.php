<?php
if (!isset($_GET['id']) || empty($_GET['id']) ) {
    header('Location:index.php');
    exit;
}   

$sorgu = $db->prepare('DELETE FROM lessons WHERE id=? ');
$sorgu->execute([$_GET['id']]);
header('Location:index.php');


?>