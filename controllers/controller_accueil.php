<?php
require 'config/connexion.php';
require 'models/model_accueil.php';
$connexion = connexionBd();

/* SPECIALITES */

$specialites = [];
for ($i = 1; $i<4;$i++) {
    $specialites[] = getRandomPlatFromTypeId($connexion, $i)[0];
}

/* EVENEMENTS */

$evenements = array(
    0 => array(
        'nom' => 'Fêtes d\'anniversaire',
        'img' => '../assets/img/event-birthday.jpg',
        'prix' => 69,
        'italic' => 'Nous faisons de votre anniversaire un moment mémorable',
        '1' => 'choix d\'un gâteau sur mesure',
        '2' => 'animations pour les enfants',
        '3' => 'prise en compte des régimes particuliers',
        'p' => 'Notre équipe sera aux petits soins pour s\'assurer que vous ne manquiez de rien'
    ),
    1 => array(
        'nom' => 'Soirées privées',
        'img' => '../assets/img/event-private.jpg',
        'prix' => 120,
        'italic' => 'Vous serez accueillis par un intérieur sophistiqué et les sourires chaleureux
         de notre merveilleuse équipe.',
        '1' => 'un endroit agréable et intimiste',
        '2' => 'des serveurs qui veillent au grain',
        '3' => 'de la nourriture qui ravira tout un chacun',
        'p' => 'Notre restaurant est disponible exclusivement pour vous, en faisant le lieu idéal pour les évènements
        de ce genre'
    ),
    2 => array(
        'nom' => 'Fêtes d\'entreprise',
        'img' => '../assets/img/event-custom.jpg',
        'prix' => 143,
        'italic' => 'Notre restaurant vous promet une expérience agréable et unique avec vos collègues et 
        chefs d\'entreprise',
        '1' => 'un encadrement de votre consommation d\'alcool pour que vous puissiez vous amuser sans avoir à y penser',
        '2' => 'des animations originales',
        '3' => 'une ambiance légère',
        'p' => 'La pression diminuera et vos collègues vous remercieront de nous avoir choisi.'
    ),

);