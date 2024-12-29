<?php

if (isset($_GET['votes']) && is_array($_GET['votes'])) {
    $votes = $_GET['votes']; 
    foreach ($votes as $candidatId => $voteCount) {
        echo "Candidat ID: $candidatId, Votes: $voteCount<br>";
    }
}
var_dump($_GET['votes']);