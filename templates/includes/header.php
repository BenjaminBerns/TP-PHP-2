<?php
declare(strict_types=1);

use App\BDD\DbConnexion;

if(session_status() === PHP_SESSION_NONE){
    session_start();
}
require_once __DIR__.'/../vendor/autoload.php';

$pdo = DbConnexion::getOrCreateInstance()->getPdo();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Election délégué</title>
    <link rel="stylesheet" href="../../public/styles/app.css" />
</head>

