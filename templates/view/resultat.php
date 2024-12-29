<?php

if (isset($_GET['idGroupe']) && is_array($_GET['idGroupe'])) {
    $votes = $_GET['idGroupe'];
    foreach ($votes as $candidatId => $voteCount) {
        echo "Candidat ID: $candidatId, Votes: $voteCount<br>";
    }
}
var_dump($_GET['idGroupe']);