const chiffreElement = document.getElementById('chiffre');
const btnAugmenter = document.getElementById('btnAugmenter');
const btnDiminuer = document.getElementById('btnDiminuer');

// Initialiser le chiffre
let chiffre = 0;

// Fonction pour mettre à jour l'affichage
function mettreAJourChiffre() {
    chiffreElement.textContent = chiffre;
}

// Ajouter des écouteurs d'événements aux boutons
btnAugmenter.addEventListener('click', () => {
    chiffre++; // Incrémenter le chiffre
    mettreAJourChiffre();
});

btnDiminuer.addEventListener('click', () => {
    chiffre--; // Décrémenter le chiffre
    mettreAJourChiffre();
});