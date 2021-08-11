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
    $query = $connection->prepare("SELECT p.id `id`, p.ProductName `ProductName`, p.Weight `Weight`, p.Price `Price`, p.CategoryID `CategoryID` , c.CategoryName `CategoryName`
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
         echo '<tr>
                    <td>'.$i['ProductName'].'</td>
                    <td>'.$i['Price'].'</td>
                    <td class="qua">
                    <button type="button" class="minus" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">-</button>
                    <input readonly type="number" min="1" value="1" name="quantity'.$i['id'].'">
                    <button type="button" class="plus" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">+</button></td>
                    <td>Сумма</td>
                    <td><a href="/" onclick="del('.$i['id'].')">X</a></td>
                </tr>';
    }
}

