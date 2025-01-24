<?php
// Define game data
$games = [
    "assassinsCreedValhalla" => [
        "title" => "Assassin's Creed Valhalla",
        "pegi" => "Pegi rating: 16",
        "gameAuthor" => "Ubisoft",
        "description" => "An action RPG where you play as Eivor, a Viking warrior exploring a vast open world of England during the Viking Age.",
        "bannerImage" => "https://ubistatic19-a.akamaihd.net/ubicomstatic/en-us/global/game-info/valhalla-keyart-banner.jpg",
        "coverImage" => "https://image.api.playstation.com/vulcan/img/rnd/202011/0918/PrJ1R2fbJLo5eh4P8t9UjKXi.jpg",
        "criticScore" => 85,
        "userScore" => 90,
        "about" => "Forge alliances, lead raids, and build your settlement in this immersive Viking RPG. Dive into epic battles and unravel the story of Norse mythology.",
        "genre" => "Action, RPG",
        "platforms" => "PC, PS4, PS5, Xbox One, Xbox Series X/S",
        "youtubeLink" => "https://www.youtube.com/watch?v=ssrNcwxALS4",
        "reviews" => [
            ["text" => "A stunning and engaging Viking saga with a vast world to explore!", "author" => "NordicGamer"],
            ["text" => "Ubisoft delivers an epic experience blending history and mythology.", "author" => "GameCriticPro"],
            ["text" => "The combat, exploration, and storytelling are top-notch.", "author" => "RPGFanatic"],
        ],
    ],
    "theWitcher3" => [
        "title" => "The Witcher 3: Wild Hunt",
        "pegi" => "Pegi rating: 16",
        "gameAuthor" => "CD Projekt Red",
        "description" => "A story-driven open-world RPG where you play as Geralt of Rivia, a monster hunter on a quest to find his adopted daughter.",
        "bannerImage" => "https://image.api.playstation.com/vulcan/img/rnd/202010/1310/Zg2X4C3Xr9h3FwD9cGFf3sPG.png",
        "coverImage" => "https://cdn.cloudflare.steamstatic.com/steam/apps/292030/header.jpg?t=1638451363",
        "criticScore" => 92,
        "userScore" => 95,
        "about" => "Experience a rich and immersive fantasy world filled with deep characters, dangerous monsters, and complex decisions that shape your journey.",
        "genre" => "Action, RPG",
        "platforms" => "PC, PS4, PS5, Xbox One, Xbox Series X/S, Nintendo Switch",
        "youtubeLink" => "https://www.youtube.com/watch?v=HtVdAasjOgU",
        "reviews" => [
            ["text" => "An RPG masterpiece with an unforgettable story.", "author" => "FantasyFanatic"],
            ["text" => "Every decision you make has weight and consequence.", "author" => "RPGAdventurer"],
            ["text" => "Incredible world-building and character depth.", "author" => "OpenWorldLover"],
        ],
    ],
];

// Dynamically select a game
$selectedGame = "assassinsCreedValhalla"; // Change to "theWitcher3" for The Witcher 3

// Use a switch statement to select the game
switch ($selectedGame) {
    case "assassinsCreedValhalla":
        $game = $games["assassinsCreedValhalla"];
        break;
    case "theWitcher3":
        $game = $games["theWitcher3"];
        break;
    default:
        die("Invalid game selection. Please check the selected game key.");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $game["title"] ?></title>
    <link rel="stylesheet" href="../../../css/stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Game review page for <?= $game['title'] ?>.">
    <meta name="keywords" content="Planet Coaster, Zoo Tycoon, simulation games, family-friendly, game review">
    <meta name="author" content="Nataniel Bialek">
</head>
<body class="body-game-review-nataniel">
<!-- Navigation Bar -->
<nav class="topbar">
    <ul class="bar">
        <li class="icon"><a href="/"><img src="../../../assets/logo.png" alt="Logo"></a></li>
    </ul>

    <ul class="sidebar">
        <li class="hide-button" onclick="hideSidebar()">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 96 960 960" width="32">
                    <path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/>
                </svg></a>
        </li>
        <li><a href="../../../pages/index.html">HOME</a></li>
        <li><a href="../../../pages/games.html">GAMES</a></li>
        <li><a href="../../../pages/contact.html">CONTACT</a></li>
        <li><a href="../../../pages/merchandise.html">SHOP</a></li>
    </ul>

    <ul class="bar">
        <li class="hideOnMobile"><a href="../../../pages/index.html">HOME</a></li>
        <li class="hideOnMobile"><a href="../../../pages/games.html">GAMES</a></li>
        <li class="hideOnMobile"><a href="../../../pages/contact.html">CONTACT</a></li>
        <li class="hideOnMobile"><a href="../../../pages/merchandise.html">SHOP</a></li>
        <li class="menu-button" onclick="showSidebar()">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                    <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/>
                </svg></a>
        </li>
    </ul>
</nav>

<!-- Front Section -->
<section class="front-page-game-review-nataniel">
    <div class="front-page-content-game-review-nataniel">
        <h2><?= $game["title"] ?></h2>
        <p><?= $game["description"] ?></p>
    </div>
    <img id="front-page-img-game-review-nataniel" src="<?= $game["bannerImage"] ?>" alt="Game Banner">
</section>

<!-- Main Content -->
<main class="main-content-game-review-nataniel">
    <!-- Scores Section -->
    <section class="scores-section-game-review-nataniel">
        <h2>Game Scores</h2>
        <div class="score-card-game-review-nataniel">
            <h3>Critic Score</h3>
            <p id="criticScore" class="score-value-game-review-nataniel"><?= $game["criticScore"] ?></p>
        </div>
        <div class="score-card-game-review-nataniel">
            <h3>User Score</h3>
            <p id="userScore" class="score-value-game-review-nataniel"><?= $game["userScore"] ?></p>
        </div>
    </section>

    <!-- Game Details -->
    <section class="details-game-review-nataniel">
        <div class="details-image-game-review-nataniel">
            <img id="game-image-game-review-nataniel" src="<?= $game["coverImage"] ?>" alt="Game Cover">
        </div>
        <div class="details-info-game-review-nataniel">
            <h3>About the Game</h3>
            <p><?= $game["about"] ?></p>
            <p><strong></strong> <span id="game-author-game-review-nataniel"><?= $game["gameAuthor"] ?></span></p>
            <p><strong></strong> <span id="game-pegi-game-review-nataniel"><?= $game["pegi"] ?></span></p>
            <p><strong>Genre:</strong> <span id="game-genre-game-review-nataniel"><?= $game["genre"] ?> </span></p>
            <div class="youtube-link-game-review-nataniel">
                <p><strong><?= $game["youtubeLink"] ?></strong></p>
            </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews-section-game-review-nataniel">
        <h3>What Players Are Saying</h3>
        <div class="review-cards-game-review-nataniel">
            <?php foreach ($game["reviews"] as $review): ?>
                <div class="review-card-game-review-nataniel">
                    <p>"<?= $review["text"] ?>"</p>
                    <span>- <?= $review["author"] ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- a Review Form -->
    <section class="review-form-section-game-review-nataniel">
        <h3>Submit Your Review</h3>
        <form id="reviewForm-game-review-nataniel">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required>
            <label for="userReview">Your Review:</label>
            <textarea id="userReview" name="userReview" rows="4" required></textarea>
            <label for="userRating">Rating:</label>
            <select id="userRating" name="userRating" required>
                <option value="10">10 - Excellent</option>
                <option value="9">9 - Great</option>
                <option value="8">8 - Good</option>
                <option value="7">7 - Decent</option>
                <option value="6">6 - Fair</option>
                <option value="5">5 - Okay</option>
                <option value="4">4 - Mediocre</option>
                <option value="3">3 - Bad</option>
                <option value="2">2 - Horrible</option>
                <option value="1">1 - Unplayable</option>
            </select>
            <button type="submit">Submit Review</button>
        </form>
    </section>
</main>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-contact">
            <h4>Contact</h4>
            <p style="margin: auto">Email: <a href="mailto:info@gamestar.com">info@gamestar.com</a></p>
            <p style="margin: auto">Phone: <a href="tel:+1234567890">+928 479 98272</a></p>
        </div>
        <div class="footer-social">
            <h4>Follow Us</h4>
            <p style="margin: auto"><a href="https://facebook.com" target="_blank" class="social-icon">Facebook</a></p>
            <p style="margin: auto"><a href="https://twitter.com" target="_blank" class="social-icon">Twitter</a></p>
            <p style="margin: auto"><a href="https://instagram.com" target="_blank" class="social-icon">Instagram</a></p>
        </div>
    </div>
</footer>
</body>
</html>