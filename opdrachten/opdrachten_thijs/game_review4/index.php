<?php
$games = [
    "game1" => [
        "title" => "minecraft",
        "genre" => ["Action", "Adventure"],
        "PEGI" => 16,
        "description" => "An action-packed adventure game.",
        "rating" => 4.2,
        "platform" => ["PC", "Xbox", "PlayStation"],
        "maker" => "Studio Alpha"
    ],
    "game2" => [
        "title" => "god of war",
        "genre" => ["Puzzle", "Strategy"],
        "PEGI" => 12,
        "description" => "A challenging puzzle strategy game.",
        "rating" => 3.8,
        "platform" => ["PC", "Mobile"],
        "maker" => "Studio Beta"
    ]
];

$selectedGameId = isset($_GET['selectedGameId']) ? $_GET['selectedGameId'] : 1;

$selectedGameId = ($selectedGameId == 1 || $selectedGameId == 2) ? $selectedGameId : 1;

$gameKey = "game" . $selectedGameId;
$game = $games[$gameKey];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $rating = $_POST['rating'];

    $reviewsFile = 'reviews.json';
    if (file_exists($reviewsFile)) {
        $reviewsData = json_decode(file_get_contents($reviewsFile), true);
    } else {
        $reviewsData = [];
    }

    $newReview = [
        "name" => $name,
        "description" => $description,
        "rating" => $rating,
    ];


    $game['rating'] = array_reduce($reviewsData[$gameKey], function($sum, $review) {
            return $sum + $review['rating'];
        }, 0) / count($reviewsData[$gameKey]);

    echo "<h3>Review geplaatst!</h3>";
    echo "<p><strong>Naam:</strong> $name</p>";
    echo "<p><strong>Beschrijving:</strong> $description</p>";
    echo "<p><strong>Rating:</strong> $rating</p>";
    echo "<p><strong>Nieuw Gemiddelde:</strong> " . number_format($game['rating'], 1) . "</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Review - <?php echo $game['title']; ?></title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<h1>Game Review: <?php echo $game['title']; ?></h1>

<p><strong>Genre:</strong> <?php echo implode(", ", $game['genre']); ?></p>
<p><strong>PEGI:</strong> <?php echo $game['PEGI']; ?></p>
<p><strong>Description:</strong> <?php echo $game['description']; ?></p>
<p><strong>Platform:</strong> <?php echo implode(", ", $game['platform']); ?></p>
<p><strong>Maker:</strong> <?php echo $game['maker']; ?></p>
<p><strong>Average Rating:</strong> <?php echo $game['rating']; ?></p>

<h2>Leave a Review</h2>
<form method="POST">
    <label for="name">Naam:</label>
    <input type="text" name="name" id="name" required><br>
    <label for="description">Beschrijving:</label><br>
    <textarea name="description" id="description" rows="5" cols="40" required></textarea><br>
    <p>Rating:</p>
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <label>
            <input type="radio" name="rating" value="<?php echo $i; ?>" required> <?php echo $i; ?>
        </label>
    <?php endfor; ?><br>
    <button type="submit">Submit</button>
</form>

<a href="../game_review_latest%20Reviews/index.php">Bekijk de laatste reviews</a>
</body>
</html>
