
<?php

$companyName = "MOIL LIMITED";

$services = [

    [
        "title" => "Manganese Ore Mining",
        "description" => "MOIL is engaged in the mining and production of manganese ore. Manganese is an important mineral used in steel manufacturing."
    ],

    [
        "title" => "Exploration Activities",
        "description" => "Exploration activities help identify new mineral resources and assess the availability of manganese ore."
    ],

    [
        "title" => "Underground Mining",
        "description" => "Underground mining is used to extract manganese ore from mineral deposits located deep below the earth's surface."
    ],

    [
        "title" => "Open Cast Mining",
        "description" => "Open cast mining is used to extract manganese ore from deposits located near the earth's surface."
    ],

    [
        "title" => "Mineral Processing",
        "description" => "Manganese ore is processed and graded according to its quality and industrial requirements."
    ],

    [
        "title" => "Environmental Management",
        "description" => "MOIL undertakes environmental protection and sustainable mining activities to reduce the impact of mining."
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>MOIL Limited - Our Services</title>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color:rgb(201, 208, 219);
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

/* Banner */

.banner {
    background-color: #234b68;
    color: white;
    text-align: center;
    padding: 70px 20px;
}

.banner h2 {
    font-size: 38px;
    margin-bottom: 15px;
}

/* Services */

main {
    padding: 40px;
}

.heading {
    text-align: center;
    color: #123456;
    margin-bottom: 30px;
}

.service-container {
    text-align: center;
}

.service-card {
    display: inline-block;
    width: 300px;
    min-height: 190px;
    vertical-align: top;
    background-color: white;
    padding: 25px;
    margin: 12px;
    border-radius: 10px;
    box-shadow: 0 3px 10px #ccc;
}

.service-card h3 {
    color: #d18b16;
    margin-bottom: 15px;
}

.service-card p {
    color: #555;
    line-height: 1.6;
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

<header>

    <h1><?php echo $companyName; ?></h1>

    <p>Government of India Enterprise</p>

</header>


<nav>

    <a href="moil.php">Home</a>

    <a href="about.php">About Us</a>

    <a href="services.php">Services</a>

    <a href="contact.php">Contact</a>

</nav>


<section class="banner">

    <h2>Our Services</h2>

    <p>
        Excellence in Mining, Exploration and Mineral Production
    </p>

</section>


<main>

    <h2 class="heading">Our Major Services</h2>

    <div class="service-container">

        <?php foreach ($services as $service) { ?>

            <div class="service-card">

                <h3>
                    <?php echo $service["title"]; ?>
                </h3>

                <p>
                    <?php echo $service["description"]; ?>
                </p>

            </div>

        <?php } ?>

    </div>

</main>


<footer>

    <h3>MOIL LIMITED</h3>

    <p>Government of India Enterprise</p>

    <p>© 2026 MOIL Limited. All Rights Reserved.</p>

</footer>

</body>

</html>
