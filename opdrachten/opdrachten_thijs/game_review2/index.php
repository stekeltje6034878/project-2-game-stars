<?php
$games = [
    [
        'title' => 'The forest',
        'pegi' => 18,
        'description' => 'A thrilling action-adventure game.',
        'photos' => ['../../../assets/the_forest1.jpg', '../../../assets/the_forest2.jpg']
    ],
    [
        'title' => 'GTA 5',
        'pegi' => 18,
        'description' => 'An epic RPG with a rich storyline.',
        'photos' => ['../../../assets/gta1.jpg', '../../../assets/gta2.jpg']
    ]
];

$selectedGame = 1;

switch ($selectedGame) {
    case 1:
        $game = $games[0];
        break;
    case 2:
        $game = $games[1];
        break;
    default:
        $game = $games[0];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Thijs Stekelenburg">
    <title>Game Review2 - PHP</title>
</head>
<body>
<h1><?= $game['title'] ?></h1>
<p>PEGI Rating: <?= $game['pegi'] ?></p>
<p>Description: <?= $game['description'] ?></p>
<div>
    <img src="<?= $game['photos'][0] ?>" alt="<?= $game['title'] ?> Photo 1">
    <img src="<?= $game['photos'][1] ?>" alt="<?= $game['title'] ?> Photo 2">
</div>
</body>
</html>