<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voeg hier een beschrijving van je pagina toe.">
    <meta name="keywords" content="sleutelwoord1, sleutelwoord2, sleutelwoord3">
    <meta name="author" content="Thijs Stekelenburg">
    <link rel="stylesheet" href="../../../css/stylesheet.css">
    <title>easy_backend</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <?php
    // Associatieve array met game info
    $games = [
        'id1' => [
            'name' => 'God Of War Ragnarok',
            'img' => '../assets/god-of-war-ragnarok.avif',
        ],
        'id2' => [
            'name' => 'Stardew Valley',
            'img' => '../assets/Stardew-Valley.png',
        ],
        'id3' => [
            'name' => 'The Witcher 3: Wild Hunt',
            'img' => '../assets/witcher3.png',
        ],
    ];

    // Variabele om een game te selecteren
    $selectedgame = 'id2'; // Verander deze waarde om een andere game te tonen

    // Game-info ophalen op basis van geselecteerde game
    if (array_key_exists($selectedgame, $games)) {
        $name = $games[$selectedgame]['name'];
        $img = $games[$selectedgame]['img'];
    } else {
        $name = 'Game niet gevonden';
        $img = '../assets/default.png';
    }
    ?>
</head>

<body>
<header id="reviewheader">
    <h1 class="gameName"><?= $name ?></h1>
</header>
<section>
    <img id="reviewImg" src="<?= $img ?>" alt="Afbeelding van <?= $name ?>">
</section>
</body>
</html>
