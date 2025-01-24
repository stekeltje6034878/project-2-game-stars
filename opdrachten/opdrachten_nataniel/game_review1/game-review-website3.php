<?php
// Define game data
$games = [
    "horizonZeroDawn" => [
        "title" => "Horizon Zero Dawn",
        "pegi" => 16,
        "gameAuthor" => "Guerrilla Games",
        "description" => "An action-adventure game set in a post-apocalyptic world overrun by robotic creatures. Play as Aloy, a hunter, as she uncovers the mysteries of her world.",
        "bannerImage" => "https://thethinair.net/wp-content/uploads/2017/04/3079328-horizonzerodawn_e32016_thunderjaw_tallneck_1465873632.jpg",
        "coverImage" => "https://cdn.cloudflare.steamstatic.com/steam/apps/1151640/capsule_616x353.jpg?t=1673556104",
        "gameScreenshot" => "https://static1.thegamerimages.com/wordpress/wp-content/uploads/2024/10/mixcollage-03-oct-2024-03-19-pm-2057.jpg",
        "criticScore" => 89,
        "userScore" => 91,
        "about" => "Explore a breathtaking open world, engage in thrilling combat, and uncover a gripping story. Horizon Zero Dawn is a must-play for fans of action RPGs.",
        "genre" => "Action, RPG",
        "platforms" => "PC, PS4, PS5",
        "youtubeLink" => "https://www.youtube.com/embed/wzx96gYA8ek?si=NI1mwlkyB-UjpAZR",
        "reviews" => [
            ["text" => "An outstanding blend of exploration, combat, and storytelling.", "author" => "OpenWorldExpert"],
            ["text" => "Stunning visuals and a deeply immersive world.", "author" => "GamerGirl2021"],
            ["text" => "Aloy is one of the best protagonists in gaming.", "author" => "StoryLover"],
        ],
    ],
    "assassinsCreedOdyssey" => [
        "title" => "Assassin's Creed Odyssey",
        "pegi" => 16,
        "gameAuthor" => "Ubisoft",
        "description" => "Embark on an epic journey through Ancient Greece. Play as Alexios or Kassandra, a Spartan mercenary, and make choices that shape your story.",
        "bannerImage" => "https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6ahHnOGe0X5rvgay2ecnlC/7e3c1e18ec9e0c240c6140e5de49d119/acod-hero-video-thumbnail-v1.jpg",
        "coverImage" => "https://www.rgj.com/gcdn/presto/2018/10/11/PREN/6de5939d-7015-41c0-8e25-66dae72eeb6f-AC_Odyssey_Screenshot_05.jpg?crop=1920,1080,x17,y0&width=1600&height=800&format=pjpg&auto=webp",
        "gameScreenshot" => "https://imageio.forbes.com/blogs-images/games/files/2018/09/ac-odyssey1.png?format=png&height=600&width=1200&fit=bounds",
        "criticScore" => 87,
        "userScore" => 88,
        "about" => "Dive into an open-world RPG where your choices matter. Fight epic battles, explore iconic landmarks, and uncover the mysteries of Greek mythology.",
        "genre" => "Action, RPG",
        "platforms" => "PC, PS4, Xbox One",
        "youtubeLink" => "https://www.youtube.com/watch?v=s_SJZSAtLBA",
        "reviews" => [
            ["text" => "An ambitious and visually stunning game set in Ancient Greece.", "author" => "HistoryBuff"],
            ["text" => "A rich world filled with quests and engaging combat.", "author" => "OpenWorldFan"],
            ["text" => "A masterpiece of storytelling and exploration.", "author" => "GameCritic"],
        ],
    ],
];

// Dynamically select a game
$selectedGame = "horizonZeroDawn"; // Change to "assassinsCreedOdyssey" or "horizonZeroDawn" for the games

$userAge = 16; // Replace with actual input

// Switch statement to change game
switch ($selectedGame) {
    case "horizonZeroDawn":
    case "assassinsCreedOdyssey":
        $game = $games[$selectedGame];
        break;
    default:
        die("Invalid game selection. Please check the selected game key.");
}

// Check age restriction
if ($userAge < $game["pegi"]) {
    die("You are not old enough to view details for this game. Minimum age is " . $game["pegi"] . ".");
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
    <meta name="keywords" content="Horizon Zero Dawn, Shadow Of The TombRaider, game review">
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
            <p><strong>Author:</strong> <span id="game-author-game-review-nataniel"><?= $game["gameAuthor"] ?></span></p>
            <p><strong>Pegi Rating: </strong><span id="game-pegi-game-review-nataniel"><?= $game["pegi"] ?></span></p>
            <p><strong>Genre:</strong> <span id="game-genre-game-review-nataniel"><?= $game["genre"] ?> </span></p>
            <div class="youtube-link-game-review-nataniel">
                <p><strong>Trailer link: <?= $game["youtubeLink"] ?></strong></p>
            </div>
    </section>
    <section class="game-screenshot-game-review-nataniel">
        <h3>Game Snapshot</h3>
        <img id="game-screenshot-game-review-nataniel" src="<?= $game["gameScreenshot"] ?>" alt="Additional Game Snapshot">
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