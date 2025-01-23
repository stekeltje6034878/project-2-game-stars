<?php
$games = [
    [
        'id' => 1,
        'title' => 'God of war',
        'genre' => ['Action', 'Adventure'],
        'photos' => ['../../../assets/god1.jpg', '../../../assets/god2.jpg', '../../../assets/god3.jpg'],
        'pegi' => 16,
        'description' => 'An epic action-adventure game.',
        'rating' => 4.5,
        'trailer' => 'https://www.youtube.com/watch?v=ARrYcVeaGt0',
        'platform' => ['PC', 'PS5'],
        'developer' => 'Studio One'
    ],
    [
        'id' => 2,
        'title' => 'The Witcher 3: Wild Hunt',
        'genre' => ['RPG', 'Fantasy'],
        'photos' => ['../../../assets/witcher1.jpg', '../../../assets/witcher2.jpg', '../../../assets/witcher3.jpg'],
        'pegi' => 14,
        'description' => 'A magical role-playing experience.',
        'rating' => 4.8,
        'trailer' => 'https://www.youtube.com/watch?v=xx8kQ4s5hCY',
        'platform' => ['Xbox', 'Switch'],
        'developer' => 'Studio Two'
    ]
];

$currentGameId = 2;
foreach ($games as $game) {
    if ($game['id'] === $currentGameId) {
        $selectedGame = [$currentGameId];
        break;
    }
}

$age = 18;

if ($age >= $selectedGame['pegi']) {
    echo "<h1>{$selectedGame['title']}</h1>";
    echo "<p>Genre: " . implode(', ', $selectedGame['genre']) . "</p>";
    echo "<p>Description: {$selectedGame['description']}</p>";
    echo "<p>PEGI: {$selectedGame['pegi']}</p>";
    echo "<p>Rating: {$selectedGame['rating']}</p>";
    echo "<p>Platforms: " . implode(', ', $selectedGame['platform']) . "</p>";
    echo "<p>Developer: {$selectedGame['developer']}</p>";
    echo "<iframe src='{$selectedGame['trailer']}'></iframe>";
    echo "<div>";
    foreach ($selectedGame['photos'] as $photo) {
        echo "<img src='$photo' alt='Game Image' />";
    }
    echo "</div>";
} else {
    echo "<p>You are not old enough to view this game.</p>";
}
?>
