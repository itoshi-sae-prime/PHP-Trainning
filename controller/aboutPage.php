<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href=”https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css” rel=”stylesheet”>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./index.css">
    <script src='./script.js'></script>
    <title>Document</title>
</head>

<body>
    <!-- header -->
    <div style="width: 100%; height: 10px; background-color: black; border-top-left-radius: 25px; border-top-right-radius:25px "></div>
    <section class="header">
        <a href="#" class="logo">Fashion.</a>
        <ul class="navbar" style="list-style-type: none">
            <a class="item" href="./IndexPage.php">Home</a>
            <a class="item" href="./aboutPage.php">About</a>
            <a class="item" href="packages.php">Packages</a>
            <a class="item" href="book.php">Book</a>
        </ul>
        <div id="menu-btn" class="fa-solid fa-bars"></div>
    </section>

    <!-- content -->
    <section class="content">
        <div>hihi</div>
    </section>
    <!-- footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a class="item-footer" href="home.php"><i class="fa-solid fa-minus"></i> Home</a>
                <a class="item-footer" href="about.php"><i class="fa-solid fa-minus"></i> About</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-minus"></i> Packages</a>
                <a class="item-footer" href="book.php"><i class="fa-solid fa-minus"></i> Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a class="item-footer" href="home.php"><i class="fa-solid fa-minus"></i> Ask question</a>
                <a class="item-footer" href="about.php"><i class="fa-solid fa-minus"></i> About us</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-minus"></i> Privacy policy</a>
                <a class="item-footer" href="book.php"><i class="fa-solid fa-minus"></i> Terms of us</a>
            </div>
            <div class="box">
                <h3>Contack Links</h3>
                <a class="item-footer" href="home.php"><i class="fa-solid fa-chevron-right"></i> +123-456-7890</a>
                <a class="item-footer" href="about.php"><i class="fa-solid fa-chevron-right"></i> +111-222-3333</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-chevron-right"></i> Kinsofoolish</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-chevron-right"></i>Thaodien/5555/5</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a class="item-footer" href="about.php"><i class="fa-solid fa-chevron-right"></i> Facebook</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-chevron-right"></i> Twitter</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-chevron-right"></i> Instagram</a>
                <a class="item-footer" href="packages.php"><i class="fa-solid fa-chevron-right"></i>Linkedin</a>
            </div>
        </div>
        <div class="credit">Created by Kin-PHP-2024 | All Right Reserved!</div>
    </section>
    <script>
        let menu = document.querySelector('#menu-btn');
        let navbar = document.querySelector('.header .navbar');

        function toggleMenu() {
            menu.classList.toggle('fa-xmark');
            navbar.classList.toggle('active');
        }

        menu.onclick = toggleMenu;
    </script>
</body>

</html>