<?php

// Inclure la classe DbConnexion
require_once __DIR__ . '/DbConnexion.php';

use App\BDD\DbConnexion;

// Initialiser une connexion à la base de données
try {
    $dbInstance = DbConnexion::getOrCreateInstance();
    $pdo = $dbInstance->getPdo();
} catch (RuntimeException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}