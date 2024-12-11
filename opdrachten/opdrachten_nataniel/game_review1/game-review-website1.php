<?php
// Define game data
$games = [
    "dyingLight1" => [
        "title" => "Dying Light",
        "description" => "An open-world first-person survival horror game set in a city overrun by a vicious outbreak.",
        "bannerImage" => "../../../assets/Dying-Light-1.jpg",
        "coverImage" => "../../../assets/Dying-Light-1-img-2.jpg",
        "criticScore" => 75,
        "userScore" => 82,
        "about" => "Dying Light combines parkour movement with intense combat and survival mechanics. Scavenge for supplies, craft weapons, and face hordes of infected in a world where danger lurks around every corner.",
        "reviews" => [
            ["text" => "The parkour mechanics are fluid, and the night gameplay is truly terrifying!", "author" => "ZombieHunter42"],
            ["text" => "The story is decent, but the gameplay more than makes up for it.", "author" => "SurvivorFan"],
            ["text" => "One of the best zombie games ever made!", "author" => "GamerGeek2022"],
        ],
    ],
    "dyingLight2" => [
        "title" => "Dying Light 2 Stay Human",
        "description" => "A first-person action survival game that expands on its predecessor with a larger world and more complex choices.",
        "bannerImage" => "../../../assets/Dying-Light-2.jpg",
        "coverImage" => "../../../assets/Dying-Light-img-2.jpg",
        "criticScore" => 76,
        "userScore" => 73,
        "about" => "Dying Light 2 Stay Human takes the parkour mechanics and intense survival gameplay of the first game and adds a branching narrative. Your choices shape the fate of the city and its survivors.",
        "reviews" => [
            ["text" => "The graphics and atmosphere are stunning, but the story feels a bit weak.", "author" => "ApocalypseFan"],
            ["text" => "The new decision system adds replayability, but the combat feels clunky at times.", "author" => "ParkourPro"],
            ["text" => "Overall, a worthy sequel with some room for improvement.", "author" => "ZombieSlayer"],
        ],
    ],
];

// Dynamically select a game
$selectedGame = "dyingLight1"; // Change to "dyingLight2" for Dying Light 2 and refresh the page afterwards

// Ensure the selected game exists
if (array_key_exists($selectedGame, $games)) {
    $game = $games[$selectedGame];
} else {
    die("Invalid game selection. Please check the selected game key.");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $game["title"]; ?></title>
    <link rel="stylesheet" href="../../../css/stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Game review page for <?php echo $game['title']; ?>.">
    <meta name="keywords" content="Dying light 1, Dying light 2, zombies, parkour, game review">
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
        <h2><?php echo $game["title"]; ?></h2>
        <p><?php echo $game["description"]; ?></p>
        <a href="https://store.steampowered.com/">
            <button>Buy Now</button>
        </a>
    </div>
    <img id="front-page-img-game-review-nataniel" src="<?php echo $game["bannerImage"]; ?>" alt="Game Banner">
</section>

<!-- Main Content -->
<main class="main-content-game-review-nataniel">
    <!-- Scores Section -->
    <section class="scores-section-game-review-nataniel">
        <h2>Game Scores</h2>
        <div class="score-card-game-review-nataniel">
            <h3>Critic Score</h3>
            <p id="criticScore" class="score-value-game-review-nataniel"><?php echo $game["criticScore"]; ?></p>
        </div>
        <div class="score-card-game-review-nataniel">
            <h3>User Score</h3>
            <p id="userScore" class="score-value-game-review-nataniel"><?php echo $game["userScore"]; ?></p>
        </div>
    </section>

    <!-- Game Details -->
    <section class="details-game-review-nataniel">
        <div class="details-image-game-review-nataniel">
            <img id="game-image-game-review-nataniel" src="<?php echo $game["coverImage"]; ?>" alt="Game Cover">
        </div>
        <div class="details-info-game-review-nataniel">
            <h3>About the Game</h3>
            <p><?php echo $game["about"]; ?></p>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews-section-game-review-nataniel">
        <h3>What Players Are Saying</h3>
        <div class="review-cards-game-review-nataniel">
            <?php foreach ($game["reviews"] as $review): ?>
                <div class="review-card-game-review-nataniel">
                    <p>"<?php echo $review["text"]; ?>"</p>
                    <span>- <?php echo $review["author"]; ?></span>
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
</body>
</html>
