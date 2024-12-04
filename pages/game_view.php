<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voeg hier een beschrijving van je pagina toe.">
    <meta name="keywords" content="sleutelwoord1, sleutelwoord2, sleutelwoord3">
    <meta name="author" content="Thijs Stekelenburg">
    <link rel="stylesheet", href="../css/stylesheet.css">
    <title>easy_backend</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <?php

    $games = array(
        'id1' => array(
            'name' => 'God Of War Ragnarok',
            'img' => '../assets/god-of-war-ragnarok.avif'
        ),
        'id2' => array(
            'name' => 'Stardew Valley',
            'img' => '../assets/Stardew-Valley.png'
        ),
        'id3' => array(
            'name' => 'Assasins Creed Valhalla',
            'img' => '../assets/assasins-creed-valhalla.avif'
        )
    );

    $selectedgame = 'id2';

    if (array_key_exists($selectedgame, $games)) {
        $name = $games[$selectedgame]['name'];
        $img = $games[$selectedgame]['img'];
    }
    ?>
</head>

<body>
<header id="reviewheader">
    <h1 class="gameName"><?php echo $name ?></h1>
</header>
<section>
    <img id="reviewImg" src= <?php echo $img ?> ''>
</section>
</body>

</html>
