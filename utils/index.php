<?php

use App\BDD\DbConnexion;

require_once __DIR__ . "/../src/BDD/DbConnexion.php";
require_once __DIR__ . "/../src/BDD/bdd_connect.php";
require_once __DIR__ . "/../src/models/DAO/GroupeDAO.php";
/*
try {
    // Requete pour récupérer tous les candidats
    $query = $pdo->query("SELECT idCandidat, nom FROM candidat");
    $candidats = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    //Si erreur afficher le message
    die("Erreur de connexion : " . $e->getMessage());
}
*/
// Créez une instance de PDO via votre classe DbConnexion
$pdo = DbConnexion::getOrCreateInstance()->getPdo();

// Instanciez le DAO
$groupeDAO = new \App\models\DAO\GroupeDAO($pdo);

// Appelez la méthode du DAO pour récupérer les groupes
$groupes = $groupeDAO->getAllGroupe();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Election délégué</title>
    <link rel="stylesheet" href="../public/styles/app.css" />
</head>
<body>
<h1 class="Titre">Application élection des délégués</h1>
<h2 class="Titre2">Candidats</h2>
<div class="box">
    <div class="container1" >
        <h3 class="candidat1"></h3>
        <h4 class="counter1" id="counter">0</h4>
        <button class="addbtn1" id="btn">+</button>
    </div>
</div>
<?php
echo '<ul>';
foreach ($groupes as $groupe) {
    echo '<li>ID: ' . $groupe['idgroupe'] . ' - Nom: ' . $groupe['nomgroupe'] . '</li>';
}
echo '</ul>';
?>
<!--/*<div class="box">
     if (!empty($candidats)):
        foreach ($candidats as $candidat): ?>
            <div class="container1" >
                <h3 class="candidat1">= htmlspecialchars($candidat['nom']); ?></h3>
                <h4 class="counter1" id="counter">0</h4>
                <button class="addbtn1" id="btn">+</button>
            </div>
         endforeach; ?>
     else: ?>
        <p>Aucun candidat trouvé dans la base de données.</p>
     endif; ?>
</div>
-->
<?php

include_once "../templates/includes/footer.php";

?>
</body>
</html>

