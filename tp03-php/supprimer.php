<?php
session_start();
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id !== false && $id !== null && isset($_SESSION['etudiants'][$id])) {
    array_splice($_SESSION['etudiants'], $id, 1);
}
header('Location: index.php');
exit;
?>