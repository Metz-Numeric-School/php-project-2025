<?php
// Config
require '../src/db_connect.php';

// Traitement et récupération des données
$pageTitle = 'Accueil';
$prenom = 'John';
$job = 'Développeur Web';

// Affichage de la page
require '../template/index.html.php';