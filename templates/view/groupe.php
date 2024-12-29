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
if (!empty($groupe)) {
    foreach ($groupe as $groupes) {
        ?>
        <form method="get" action="/groupe">
            <button type="submit" id="btn" name="idGroupe" value="<?php echo $groupes->getIdGroupe(); ?>">
                <?php echo $groupes->getIdGroupe() . ' --- ' . $groupes->getLibelleGroupe(); ?>
            </button>
        </form>
        <?php
    }
} else {
    echo "Aucun groupe trouvé.";
}
?>

<?php

include_once "templates/includes/footer.php";

?>
</body>
</html>
