<?php
function estConnecte(): bool
{
    return isset($_SESSION['connecte']) && $_SESSION['connecte'] === true;
}

function protegerPage(): void
{
    if (!estConnecte()) {
        header('Location: login.php');
        exit;
    }
}