<?php

$websiteName = "MOIL LIMITED";
$tagline = "India's Largest Manganese Ore Producer";

$services = [
    "Manganese Ore Mining",
    "Exploration Activities",
    "Mine Development",
    "Mineral Processing"
];

$about = "MOIL Limited is a major manganese ore producer in India.
The company is engaged in mining, exploration and production
of manganese ore, which is widely used in the steel industry.";

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>MOIL Limited | Official Website</title>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f6f8;
}

/* Header */

header {
    background-color: #123456;
    color: white;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h1 {
    font-size: 28px;
}

header p {
    font-size: 12px;
    margin-top: 5px;
}

/* Navigation */

nav {
    background-color: #e9a52b;
    padding: 15px;
    text-align: center;
}

nav a {
    color: #222;
    text-decoration: none;
    margin: 0 20px;
    font-weight: bold;
}

nav a:hover {
    color: white;
}

/* Banner */

.banner {
    height: 400px;
    background:
    linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
    url("https://images.unsplash.com/photo-1516937941344-00b4e0337589");

    background-size: cover;
    background-position: center;

    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
}

.banner h2 {
    font-size: 42px;
}

.banner p {
    font-size: 19px;
    margin-top: 15px;
}

/* Main Section */

main {
    padding: 40px;
}

/* About */

.about {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    margin-bottom: 30px;
}

.about h2 {
    color: #123456;
    margin-bottom: 16px;
}

/* Services */

.services {
    text-align: center;
    margin-bottom: 40px;
}

.services h2 {
    color:rgb(23, 68, 112);
    margin-bottom: 25px;
}

.service-box {
    display: inline-block;
    width: 220px;
    background-color: white;
    padding: 30px 15px;
    margin: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 8px #ccc;
}

.service-box h3 {
    color: #d18b16;
}

/* Achievements */

.achievement {
    background-color: #123456;
    color: white;
    padding: 35px;
    text-align: center;
    border-radius: 8px;
}

.achievement h2 {
    margin-bottom: 15px;
}

/* Footer */

footer {
    background-color: #101f30;
    color: white;
    padding: 25px;
    text-align: center;
    margin-top: 30px;
}

</style>

</head>

<body>

<!-- Header -->

<header>

    <div>
        <h1><?php echo $websiteName; ?></h1>
        <p><?php echo $tagline; ?></p>
    </div>

    <h3>Government of India Enterprise</h3>

</header>


<!-- Navigation -->

<nav>

    <a href="#home">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="services.php">Our Services</a>
    <a href="#achievement">Achievements</a>
    <a href="#contact">Contact Us</a>

</nav>


<!-- Banner -->

<section class="banner" id="home">

    <div>
        <h2>Welcome to MOIL Limited</h2>

        <p>
            Building India's Future Through Mineral Resources
        </p>
    </div>

</section>


<!-- Main Content -->

<main>

    <!-- About Section -->

    <section class="about" id="about">

        <h2>About MOIL Limited</h2>

        <p>
            <?php echo $about; ?>
        </p>

    </section>


    <!-- Services Section -->

    <section class="services" id="services">

        <h2>Our Services</h2>

        <?php foreach ($services as $service) { ?>

            <div class="service-box">

                <h3><?php echo $service; ?></h3>

            </div>

        <?php } ?>

    </section>


    <!-- Achievement Section -->

    <section class="achievement" id="achievement">

        <h2>Our Commitment</h2>

        <p>
            Committed to sustainable mining,
            industrial growth and national development.
        </p>

    </section>

</main>


<!-- Footer -->

<footer id="contact">

    <h3>MOIL LIMITED</h3>

    <p>Government of India Enterprise</p>

    <p>© 2026 MOIL Limited. All Rights Reserved.</p>

</footer>

</body>
</html>
