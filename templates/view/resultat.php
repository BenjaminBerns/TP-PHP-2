<?php

if (isset($_GET['votes']) && is_array($_GET['votes'])) {
    $votes = $_GET['votes']; // Contient les votes des candidats sous forme d'un tableau
    foreach ($votes as $candidatId => $voteCount) {
        echo "Candidat ID: $candidatId, Votes: $voteCount<br>";
    }
}
var_dump($_GET['votes']);