<?php
session_start();
include_once 'helpers/routes.php';
include_once 'helpers/functions.php';
$routes = Routes::getRoutes();

if (strpos($_SERVER['REQUEST_URI'], '/api') !== false) {
    run($_SERVER['REQUEST_URI'], $routes);
    return; // Stop further execution to prevent HTML rendering for API requests
}
?>

<!DOCTYPE html>
<html  class="scroll-smooth" lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Selamat Datang di laman ecommerce kami">
    <meta name="author" content="Ridho Akbar">
    <meta name="generator" content="Ridho Akbar">
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="http://localhost/pbl-mvc-alfin/assets/css/output.css">
    <title>e-Commerce</title>
   <?php
   if(isset($_SESSION['role_user']) && $_SESSION['role_user'] === 1){
    echo '<link rel="stylesheet" href="../assets/css/output.css" />';
   } else {
    echo '<link rel="stylesheet" href="http://localhost/pbl-mvc-alfin/assets/css/output.css" />';
    
   }
   ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;700;800&display=swap"
        rel="stylesheet" />

    <!-- Your Meta Tags, Title, Stylesheets, and Other Head Content -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>


    <?php
    run($_SERVER['REQUEST_URI'], $routes);
    ?>
    <!-- ini bagian tema gelap, terang dan auto -->
    <!-- ini bagian javascript -->

    <?php
    if(isset($_SESSION['role_user']) && $_SESSION['role_user'] === 1){
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>';
   } else {
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>';
    
   }
   ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>