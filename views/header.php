<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href=”https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css” rel=”stylesheet”>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../view/css/index.css">
    <script src='./script.js'></script>
    <title>Document</title>
</head>

<body>
    <!-- header -->
    <div style="width: 100%; height: 10px; background-color: black; border-top-left-radius: 25px; border-top-right-radius:25px "></div>
    <section class="header">
        <a href="#" class="logo">Fashion.</a>
        <ul class="navbar" style="list-style-type: none">
            <a class="item" href="#">Home</a>
            <a class="item" href="./aboutPage.php">About</a>
            <a class="item" href="./packages.php">Packages</a>
            <a class="item" href="./book.php">Book</a>
        </ul>
        <div id="menu-btn" class="fa-solid fa-bars"></div>
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