<?php
// Define game data
$games = [
    "planetCoaster" => [
        "title" => "Planet Coaster",
        "description" => "A theme park simulation game where you design, build, and manage your own amusement park.",
        "bannerImage" => "0824-planet-coaster.jpg?auto=format&fit=max&w=1200",
        "coverImage" => "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/493340/capsule_616x353.jpg?t=1725377481",
        "criticScore" => 84,
        "userScore" => 88,
        "about" => "Planet Coaster lets you unleash your creativity by building roller coasters, designing stunning parks, and managing visitor satisfaction. With a wide variety of tools and customizations, this game is perfect for fans of simulation and design.",
        "reviews" => [
            ["text" => "A truly immersive theme park simulator with endless creative options!", "author" => "CoasterFan99"],
            ["text" => "Building roller coasters has never been this fun.", "author" => "ThemeParkLover"],
            ["text" => "The level of detail is amazing, and the community features are excellent.", "author" => "SimMaster"],
        ],
    ],
    "zooTycoon" => [
        "title" => "Zoo Tycoon: Ultimate Animal Collection",
        "description" => "A simulation game that lets you build and manage your dream zoo with exotic animals and engaging exhibits.",
        "bannerImage" => "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/613880/header.jpg?t=1667851490",
        "coverImage" => "https://media.s-bol.com/3XMnPkglrL84/o2y2AyY/1200x675.jpg",
        "criticScore" => 78,
        "userScore" => 81,
        "about" => "Zoo Tycoon is a family-friendly game where you create a zoo from the ground up, take care of animals, and ensure your visitors are happy. It’s perfect for animal lovers and budding tycoons alike.",
        "reviews" => [
            ["text" => "A relaxing and fun game with lots of adorable animals.", "author" => "AnimalLover2020"],
            ["text" => "Great for families and anyone who loves zoo management games.", "author" => "ZooKeeper64"],
            ["text" => "A bit simple at times, but perfect for casual play.", "author" => "ChillGamer"],
        ],
    ],
];

// Dynamically select a game
$selectedGame = "zooTycoon"; // Change to "zooTycoon" for Zoo Tycoon and "planetCoaster" for planet coaster refresh the page afterwards

// Use a switch statement to select the game
switch ($selectedGame) {
    case "planetCoaster":
        $game = $games["planetCoaster"];
        break;
    case "zooTycoon":
        $game = $games["zooTycoon"];
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
        <a href="https://store.steampowered.com/">
            <button>Buy Now</button>
        </a>
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

