<?php
    $host = 'localhost';
    $dbname = 'shop';
    $login = 'root';
    $pass = 'root';

    $cart = [];

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

function getCart(array $id)
{
    $all = getProducts();
    global $cart;
    for ($i = 0; $i <= count($all); $i++)
    {
        foreach ($id as $k)
        {
            if ($all[$i]['id'] == $k)
            {
                array_push($cart, $all[$i]);
            }
        }
    }
    return $cart;
}
function showCart(){
    $id = [];
    foreach ($_SESSION['cart'] as $item) {
        array_push($id, $item['idProduct']);
    }
    foreach (getCart($id) as $i)
    {
         echo '<h1>'.$i['ProductName'].'</h1>
                <a href="#">'.$i['id'].'</a>
            ';
    }
}

