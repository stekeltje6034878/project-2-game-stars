<?php
$games = [
    "game1" => [
        "title" => "Minecraft",
        "genre" => ["Action", "Adventure"],
        "PEGI" => 16,
        "description" => "An action-packed adventure game.",
        "rating" => 4.5,
        "platform" => ["PC", "Xbox", "PlayStation"],
        "maker" => "Studio Alpha",
        "trailer" => 'https://www.youtube.com/embed/jMe3tdyjouM?si=TVMOY2qGY3rkFYWm',
        "reviews" => [
            ["name" => "John", "text" => "Great game!", "rating" => 5],
            ["name" => "Sarah", "text" => "Loved the action!", "rating" => 4],
            ["name" => "Mike", "text" => "Could be better.", "rating" => 3],
        ]
    ],
    "game2" => [
        "title" => "GTA5",
        "genre" => ["RPG", "Adventure"],
        "PEGI" => 18,
        "description" => "An action-packed open-world game.",
        "rating" => 4.8,
        "platform" => ["PC", "Xbox", "PlayStation"],
        "maker" => "Studio Gamma",
        "trailer" => 'https://www.youtube.com/embed/1122334455',
        "reviews" => [
            ["name" => "David", "text" => "Amazing storyline.", "rating" => 5],
            ["name" => "Emma", "text" => "The combat system could be better.", "rating" => 4],
            ["name" => "James", "text" => "Absolutely love it!", "rating" => 5],
        ]
    ],
    "game3" => [
        "title" => "Cyberpunk 2077",
        "genre" => ["Action", "Adventure"],
        "PEGI" => 16,
        "description" => "A futuristic action-packed adventure.",
        "rating" => 4.6,
        "platform" => ["PC", "Xbox", "PlayStation"],
        "maker" => "Studio Delta",
        "trailer" => 'https://www.youtube.com/embed/jMe3tdyjouM?si=TVMOY2qGY3rkFYWm',
        "reviews" => [
            ["name" => "Anna", "text" => "Incredible world-building!", "rating" => 5],
            ["name" => "Liam", "text" => "Breathtaking visuals.", "rating" => 4],
            ["name" => "Sophia", "text" => "Good story but buggy.", "rating" => 3],
        ]
    ],
    "game4" => [
        "title" => "Bannerlords",
        "genre" => ["Platformer"],
        "PEGI" => 3,
        "description" => "A fun and colorful platformer for all ages.",
        "rating" => 4.1,
        "platform" => ["PC", "Switch"],
        "maker" => "Studio Beta",
        "trailer" => 'https://www.youtube.com/embed/O4SGkSn9FDk?si=mHkGlBxe29Q2EKdp',
        "reviews" => [
            ["name" => "Lily", "text" => "Great for kids!", "rating" => 5],
            ["name" => "Jake", "text" => "Cute and fun.", "rating" => 4],
            ["name" => "Sophia", "text" => "Could use more levels.", "rating" => 3],
        ]
    ],
];

$pegi16Plus = array_filter($games, fn($game) => $game['PEGI'] >= 16);
$pegiUnder16 = array_filter($games, fn($game) => $game['PEGI'] < 16);

$selectedGames = array_slice($pegi16Plus, 0, 3);
$selectedGames[] = reset($pegiUnder16);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Reviews</title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        .review-slide { display: none; }
        .review-slide.active { display: block; }
    </style>
</head>
<body>
<h1>Latest Reviews</h1>
<div id="slideshow-container">
    <?php foreach ($selectedGames as $index => $game): ?>
        <div class="review-slide <?php echo $index === 0 ? 'active' : ''; ?>" id="slide-<?php echo $index; ?>">
            <h2><?php echo $game['title']; ?> (PEGI <?php echo $game['PEGI']; ?>)</h2>
            <p><strong>Genre:</strong> <?php echo implode(", ", $game['genre']); ?></p>
            <p><strong>Description:</strong> <?php echo $game['description']; ?></p>
            <p><strong>Average Rating:</strong> <?php echo $game['rating']; ?></p>
            <p><strong>Platform:</strong> <?php echo implode(", ", $game['platform']); ?></p>
            <p><strong>Maker:</strong> <?php echo $game['maker']; ?></p>

            <h3>User Reviews</h3>
            <ul>
                <?php foreach ($game['reviews'] as $review): ?>
                    <li><strong><?php echo $review['name']; ?>:</strong> <?php echo $review['text']; ?> (Rating: <?php echo $review['rating']; ?>/5)</li>
                <?php endforeach; ?>
            </ul>

            <iframe width="560" height="315" src="<?php echo $game['trailer']; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    <?php endforeach; ?>
</div>

<div>
    <button id="prev-slide">Previous</button>
    <button id="next-slide">Next</button>
</div>

<script>
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.review-slide');
    const totalSlides = slides.length;

    function showNextSlide() {
        slides[currentSlideIndex].classList.remove('active');
        currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
        slides[currentSlideIndex].classList.add('active');
    }

    function showPrevSlide() {
        slides[currentSlideIndex].classList.remove('active');
        currentSlideIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
        slides[currentSlideIndex].classList.add('active');
    }

    setInterval(showNextSlide, 5000);

    document.getElementById('next-slide').addEventListener('click', showNextSlide);
    document.getElementById('prev-slide').addEventListener('click', showPrevSlide);
</script>
</body>
</html>
