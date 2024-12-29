<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Election délégué</title>
    <link rel="stylesheet" href="../public/styles/app.css" />

</head>
<body>
<h1>Gestion des Votes</h1>
<div class="box">
    <form method="get" action="/resultat">
    <?php if (!empty($candidats)):
        foreach ($candidats as $index => $candidat): ?>
                <div class="container1">
                    <h3 class="candidat1"><?php echo $candidat->getNomCandidat(); ?> <?php echo $candidat->getPrenomCandidat(); ?></h3>
                    <h4 class="counter1" id="counter-<?php echo $index; ?>"><?php echo $candidat->getVote(); ?></h4>
                    <button class="addbtn1" type="button" data-id="<?php echo $index; ?>">+</button>
                    <button class="rmvbtn1" type="button" data-counter-id="<?php echo $index; ?>">-</button>
                </div>
        <?php endforeach;?>

    <?php else: ?>
        <p>Aucun candidat trouvé dans la base de données.</p>
    <?php endif; ?>
                <button type="submit" id="btn" class="confirm" name="idGroupe" value="<?php echo $candidat->getGroupe()->getIdGroupe(); ?>">
                    Confirmer
                </button>
            </form>
</div>


<!-- Tableau pour afficher le total des votes -->
<table>
    <tr>
        <th>Total des Votes</th>
        <td id="totalVotes">0</td>
    </tr>
</table>

<script>
    function updateTotalVotes() {
        const counters = document.querySelectorAll(".counter1");
        let total = 0;

        counters.forEach((counter) => {
            total += parseInt(counter.textContent, 10);
        });

        document.getElementById("totalVotes").textContent = total;
    }

    function incrementVote(index) {
        const counter = document.getElementById(`counter-${index}`);
        counter.textContent = parseInt(counter.textContent, 10) + 1;
        updateTotalVotes();
    }

    function decrementVote(index) {
        const counter = document.getElementById(`counter-${index}`);
        const currentValue = parseInt(counter.textContent, 10);
        if (currentValue > 0) {
            counter.textContent = currentValue - 1;
            updateTotalVotes();
        }
    }

    document.querySelectorAll('.addbtn1').forEach(button => {
        button.addEventListener('click', function () {
            const index = this.getAttribute('data-id');
            incrementVote(index);
        });
    });

    document.querySelectorAll('.rmvbtn1').forEach(button => {
        button.addEventListener('click', function () {
            const index = this.getAttribute('data-counter-id');
            decrementVote(index);
        });
    });

    updateTotalVotes();

    function incrementVote(index) {
        const counter = document.getElementById(`counter-${index}`);
        let currentValue = parseInt(counter.textContent, 10);
        const totalVotes = parseInt(document.getElementById("totalVotes").textContent, 10);
        const totalCandidats = document.querySelectorAll('.counter1').length;

        if (totalVotes < totalCandidats) {
            if (!isNaN(currentValue)) {
                counter.textContent = currentValue + 1;
            } else {
                console.error("Valeur invalide");
            }
            updateTotalVotes();
        } else {
            alert("Le nombre total de votes ne peut pas dépasser le nombre de candidats !!!");
        }
    }

</script>
<?php
include_once "templates/includes/footer.php";
?>
</body>
</html>