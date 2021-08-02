<?php
    $host = 'localhost';
    $dbname = 'shop';
    $login = 'root';
    $pass = 'root';

try {$connection = new PDO('mysql:host='.$host.';dbname='.$dbname, $login, $pass);}
catch (PDOException $e) {die("Error!: " . $e->getMessage()); }

function getCategories(){
    global $connection;
    $query = $connection->prepare("SELECT * FROM categories");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function getProducts(){
    global $connection;
    $query = $connection->prepare("SELECT p.id `id`, p.ProductName `ProductName`, p.Weight `Weight`, p.Price `Price`, c.CategoryName `CategoryName`
FROM `goods` p
INNER JOIN `categories` c ON c.id = p.CategoryID;");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function showProducts(){
    foreach (getProducts() as $item){
        echo '<tr>
                    <td>'.$item['id'].'</td>
                    <td>'.$item['ProductName'].'</td>
                    <td>'.$item['Weight'].' кг</td>
                    <td>'.$item['Price'].' руб</td>
                    <td>'.$item['CategoryName'].'</td>
                    <td><a href="/" onclick="addToCart('.$item['id'].')">Add to cart</a></td>
                </tr>';
    }
}
function showCategory(){
    foreach (getCategories() as $item){
        echo '<tr>
                    <td>'.$item['id'].'</td>
                    <td>'.$item['CategoryName'].'</td>
                </tr>';
    }
}

function getProductById($id){
    global $connection;
    $query = $connection->prepare("");
    }

