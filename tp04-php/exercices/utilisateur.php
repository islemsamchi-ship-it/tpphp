<?php
// Utilisateur de démonstration. Dans une vraie application, ces données
// doivent être stockées dans une base de données.
$utilisateur = [
    "username" => "admin",
    "password" => password_hash("123456", PASSWORD_DEFAULT)
];?>