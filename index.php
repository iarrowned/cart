<?php
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
</body>
</html>