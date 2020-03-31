<?php
session_start();
include('includes/head.php');
include('controller.php');
if (isset($_GET['logout'])) {
    var_dump($_GET);
    getUserLogout();
}
?>

<?php

$team1 = [
    'joueur1' => [
        "name" => "juljuljul",
        "skill" => "i believe i can fly 🦅",
        'life' => 100,
        'atk' => 10,
        'life_point' => 5
    ],
    'joueur2' => [
        "name" => "Paracelse",
        "skill" => "oublis d'eteindre son micro🎤",
        'life' => 100,
        'atk' => 10,
        'life_point' => 5
    ],
    'joueur3' => [
        "name" => "Johnny",
        "skill" => "Escalade un arbre sans mains (et sans pieds)🐵.",
        'life' => 100,
        'atk' => 10,
        'life_point' => 5
    ],
    'joueur4' => [
        "name" => "Anaïs",
        "skill" => "convertit tout en emojis 🐲",
        'life' => 100,
        'atk' => 10,
        'life_point' => 5
    ],
    'life' => 100,
    'atk' => 10,
    'life_point' => 5
];

$team2 = [
    'joueur1' => [
        "name" => "Jim",
        "skill" => "Prends du poids sans bouger💯",
        'life' => 100,
        'atk' => 10,
        'life_point' => 5
    ],
    'joueur2' => [
        "name" => "Anne",
        "skill" => "Court 🏃‍♀️",
        'life' => 100,
        'atk' => 10,
        'life_point' => 5
    ],
    'joueur3' => [
        "name" => "Varapone",
        "skill" => "Oublié 🕳",
        'life' => 100,
        'atk' => 10,
        'life_point' => 5
    ],
    'joueur4' => [
        "name" => "Anonyme",
        "skill" => "Boucle percé ! ",
        'life' => 100,
        'atk' => 10,
        'life_point' => 5
    ],
    'life' => 100,
    'atk' => 10,
    'life_point' => 5
];

$team3 = [
    'joueur1' => [
        "name" => "Jenny",
        "skill" => "Yo yo yo Paris c'est ghetto gotham",
        'life' => 100,
        'atk' => 10,
        'life_point' => 5
    ]
];

//atkPlayer($team3, $team1);    

//-> J'appelle // kick($team1, $team2);
// -> controller JE DEFINIE LA METHODE ET SES PARAMETRES
// kick($attaquant, $defenseur)
//echo getLifePoint($team2); 

// SANDRINE :
kick($team2['joueur4'], $team1['joueur3']);
  
// JOHNNY : 
kick($team1['joueur3'], $team2['joueur4']);

?>
<div class="container">
    <h1 style="font-size : 50px;">WELL DONE ALL !!! 🤙🤙🤙🤙🤙🤙🤙🤙🤙</h1>
</div>