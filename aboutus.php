
<?php

$companyName = "MOIL LIMITED";

$tagline = "Adding Strength to Steel";

$about = "MOIL Limited is one of India's leading producers of manganese ore. 
The company was incorporated in 1962 and operates mines in Maharashtra 
and Madhya Pradesh. MOIL plays an important role in supplying manganese 
ore to India's steel and other industries.";

$history = [
    [
        "year" => "1896",
        "title" => "Beginning of Journey",
        "description" => "The organisation began as Central Province Prospecting Syndicate."
    ],
    [
        "year" => "1962",
        "title" => "MOIL Established",
        "description" => "MOIL was incorporated as Manganese Ore (India) Limited."
    ],
    [
        "year" => "2010",
        "title" => "Company Listed",
        "description" => "MOIL was listed on the National Stock Exchange and Bombay Stock Exchange in December 2010."
    ]
];

$values = [
    "Quality and Excellence",
    "Safety and Responsibility",
    "Environmental Protection",
    "Innovation and Technology",
    "Sustainable Development"
];

$vision = "To sustain market leadership in Indian Manganese industry and be a globally diversified enterprise through strategic alliances and technological up-gradation.";

$mission = "To create long-term value for stakeholders through exploration and development of natural resources in an efficient, safe, cost-effective and eco-friendly manner.";

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>About Us | MOIL Limited</title>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f4f7;
}

/* Header */

header {
    background-color: #123456;
    color: white;
    padding: 25px 40px;
}

header h1 {
    font-size: 30px;
}

header p {
    margin-top: 8px;
}

/* Navigation */

nav {
    background-color: #e9a52b;
    padding: 15px;
    text-align: center;
}

nav a {
    text-decoration: none;
    color: black;
    margin: 20px;
    font-weight: bold;
}

nav a:hover {
    color: white;
}

/* Banner */

.banner {
    background-color: #234b68;
    color: white;
    text-align: center;
    padding: 75px 20px;
}

.banner h2 {
    font-size: 38px;
    margin-bottom: 15px;
}

/* Main */

main {
    padding: 40px;
}

/* About Section */

.about {
    background-color: white;
    padding: 30px;
    margin-bottom: 30px;
    border-radius: 10px;
    line-height: 1.8;
}

.heading {
    color: #123456;
    margin-bottom: 20px;
}

/* History */

.history {
    background-color: white;
    padding: 30px;
    margin-bottom: 30px;
    border-radius: 10px;
}

.history-card {
    background-color: #f2f4f7;
    padding: 20px;
    margin: 15px 0;
    border-left: 5px solid #e9a52b;
}

.history-card h3 {
    color: #d18b16;
    margin-bottom: 8px;
}

/* Vision Mission */

.vision-mission {
    text-align: center;
    margin-bottom: 30px;
}

.info-box {
    display: inline-block;
    vertical-align: top;
    width: 42%;
    min-height: 190px;
    background-color: white;
    padding: 30px;
    margin: 15px;
    border-radius: 10px;
    box-shadow: 0 3px 10px #ccc;
    line-height: 1.7;
}

.info-box h3 {
    color: #d18b16;
    margin-bottom: 15px;
}

/* Values */

.values {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    margin-bottom: 30px;
}

.values ul {
    padding-left: 25px;
    line-height: 2;
}

/* Footer */

footer {
    background-color: #123456;
    color: white;
    text-align: center;
    padding: 25px;
    margin-top: 30px;
}

</style>

</head>

<body>

<!-- Header -->

<header>

    <h1><?php echo $companyName; ?></h1>

    <p><?php echo $tagline; ?></p>

</header>


<!-- Navigation -->

<nav>

    <a href="moil.php">Home</a>

    <a href="about.php">About Us</a>

    <a href="services.php">Services</a>

    <a href="contact.php">Contact</a>

</nav>


<!-- Banner -->

<section class="banner">

    <h2>About Us</h2>

    <p>Know More About MOIL Limited</p>

</section>


<main>

    <!-- Company Introduction -->

    <section class="about">

        <h2 class="heading">Who We Are</h2>

        <p>
            <?php echo $about; ?>
        </p>

    </section>


    <!-- Company History -->

    <section class="history">

        <h2 class="heading">Our History</h2>

        <?php foreach ($history as $item) { ?>

            <div class="history-card">

                <h3>
                    <?php echo $item["year"]; ?>
                </h3>

                <h4>
                    <?php echo $item["title"]; ?>
                </h4>

                <p>
                    <?php echo $item["description"]; ?>
                </p>

            </div>

        <?php } ?>

    </section>


    <!-- Vision and Mission -->

    <section class="vision-mission">

        <h2 class="heading">Our Vision & Mission</h2>

        <div class="info-box">

            <h3>Our Vision</h3>

            <p>
                <?php echo $vision; ?>
            </p>

        </div>

        <div class="info-box">

            <h3>Our Mission</h3>

            <p>
                <?php echo $mission; ?>
            </p>

        </div>

    </section>


    <!-- Core Values -->

    <section class="values">

        <h2 class="heading">Our Core Values</h2>

        <ul>

            <?php foreach ($values as $value) { ?>

                <li>
                    <?php echo $value; ?>
                </li>

            <?php } ?>

        </ul>

    </section>

</main>


<!-- Footer -->

<footer>

    <h3><?php echo $companyName; ?></h3>

    <p>Government of India Enterprise</p>

    <p>© 2026 MOIL Limited. All Rights Reserved.</p>

</footer>

</body>

</html>
