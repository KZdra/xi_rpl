<?php
session_start();

if (!isset($_SESSION['nis'])) {
    header("Location: ../login");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/css/global.css">
    <link rel="stylesheet" href="../../dist/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css  ">
    <title>Dashboard</title>
</head>

<body>
    <?php

    include "../komponen/sidebar.php";

    ?>
    <div id="main-content">
        <?php
        
        include "../komponen/navbar.php"
        
        ?>


    </div>
    <script src="../../dist/js/global.js"></script>
</body>

</html>
