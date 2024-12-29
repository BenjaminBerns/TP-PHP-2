<?php

echo '<ul>';
foreach ($groupes as $groupe) {
    echo '<li>ID: ' . $groupe['idgroupe'] . ' - Nom: ' . $groupe['nomgroupe'] . '</li>';
}
echo '</ul>';
