<?php
session_start();
    require 'ajax/cart.php';
    require 'main.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="css/null.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/cart.js"></script>
</head>
<body>
    <div class="categories">
        <div class="container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Category name</th>
                </tr>
                <?= showCategory(); ?>
            </table>
        </div>
    </div>
    <div class="products">
        <div class="container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Weight</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>???</th>
                </tr>
                <?= showProducts(); ?>
            </table>
        </div>
    </div>
    <?php pr(); ?>
</body>
</html>