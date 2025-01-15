<?php
// Config
require '../src/db_connect.php';

// Traitement et récupération des données
$pageTitle = 'À propos';
$prenom = 'John';
$job = 'Développeur Web';

// Affichage de la page
require '../template/about.html.php';