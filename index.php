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
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/cart.js"></script>
</head>
<body>
<div class="first">
    <div class="container">
        <header>
            <div class="logo">
                ЭкоФерма
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#form">Асcортимент</a></li>
                        <li><a href="#info">О сервисе</a></li>
                        <li><a href="#kont">Контакты</a></li>
                        <li><a href="#kont">Доставка</a></li>
                    </ul>
                </nav>
            </div>
            <div id="show"></div>
            <div class="kran1">
                <ul class="mmenuu1">
                    <li>
                        <ul class="ssubmenuu1">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#form">Асcортимент</a></li>
                            <li><a href="#info">О сервисе</a></li>
                            <li><a href="#kont">Контакты</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="phone">8-904-027-96-74</div>
        </header>
        <div class="info">
            <h1>Продукты с заботой о вашем здоровье </h1>
            <p>магазин экологически чистого питания доступного каждому</p>
            <a href="#form">посмотреть товар</a>
        </div>
    </div>
</div>
    <div class="categories hidden">
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
    <div class="products hidden">
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

    <section class="second">
        <div class="container">
            <h2>Ассортимент</h2>
            <form action="php/order.php" method="post">
                <div id="cart" class="hidden">
                    <div class="container">
                        <table>
                            <tr>
                                <th></th>
                                <th>Название</th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th>Сумма</th>
                                <th></th>
                            </tr>
                            <?php if (isset($_SESSION['cart'])) showCart(); ?>
                            <tr>
                                <td><a href="#buy">Заказать</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <h3>Молочная продукция</h3>
                <div class="items milk">
                    <?php
                    $prod = getProducts();
                    foreach ($prod as $item) {
                        if ($item['CategoryID'] == 1)
                        {
                            echo '<div class="item">
                                    <div class="card">
                                        <img src="'.$item['Preview'].'" alt="">
                                        <h4>'.$item['ProductName'].'</h4>
                                        <h5>'.$item['Weight'].' кг</h5>
                                        <h6>'.$item['Price'].' руб</h6>
                                    </div>
                                    <a class="add" href="/" onclick="addToCart('.$item['id'].')">В корзину</a>
                    </div>';
                        }
                    }
                    ?>
                </div>
                <h3>Мясная продукция</h3>
                <div class="categories">
                    <div class="btn cat1"><p>Говядина</p></div>
                    <div class="btn cat2"><p>Свинина</p></div>
                    <div class="btn cat3"><p>Птица</p></div>
                    <div class="btn cat4"><p>Кролик</p></div>
                    <div class="btn cat5"><p>Баранина</p></div>
                </div>
                <div class="items meat">
                    <?php
                    echo '<div class="cat_1 visible">';
                    foreach ($prod as $item){
                        if ($item['CategoryID'] == 2){
                            echo '
                                <div class="item">
                                    <div class="card">
                                        <img src="'.$item['Preview'].'" onerror="standby()">
                                        <h4>'.$item['ProductName'].'</h4>
                                        <h5>'.$item['Weight'].' кг</h5>
                                        <h6>'.$item['Price'].' руб</h6>
                                    </div>
                                    <a class="add" href="/" onclick="addToCart('.$item['id'].')">В корзину</a>
                                </div>
                        ';
                        }
                    }
                    echo '</div>';
                    echo '<div class="cat_2 hidden">';
                    foreach ($prod as $item){
                        if ($item['CategoryID'] == 3){

                            echo '
                                <div class="item">
                                    <div class="card">
                                        <img src="'.$item['Preview'].'" onerror="standby()">
                                        <h4>'.$item['ProductName'].'</h4>
                                        <h5>'.$item['Weight'].' кг</h5>
                                        <h6>'.$item['Price'].' руб</h6>
                                    </div>
                                    <a class="add" href="/" onclick="addToCart('.$item['id'].')">В корзину</a>
                                </div>
                        ';
                        }
                    }
                    echo '</div>';
                    echo '<div class="cat_3 hidden">';
                    foreach ($prod as $item){
                        if ($item['CategoryID'] == 4){

                            echo '
                                <div class="item">
                                    <div class="card">
                                        <img src="'.$item['Preview'].'" onerror="standby()">
                                        <h4>'.$item['ProductName'].'</h4>
                                        <h5>'.$item['Weight'].' кг</h5>
                                        <h6>'.$item['Price'].' руб</h6>
                                    </div>
                                    <a class="add" href="/" onclick="addToCart('.$item['id'].')">В корзину</a>
                                </div>
                        ';
                        }
                    }
                    echo '</div>';

                    echo '<div class="cat_4 hidden">';
                    foreach ($prod as $item){
                        if ($item['CategoryID'] == 5){

                            echo '
                                <div class="item">
                                    <div class="card">
                                        <img src="'.$item['Preview'].'" onerror="standby()">
                                        <h4>'.$item['ProductName'].'</h4>
                                        <h5>'.$item['Weight'].' кг</h5>
                                        <h6>'.$item['Price'].' руб</h6>
                                    </div>
                                    <a class="add" href="/" onclick="addToCart('.$item['id'].')">В корзину</a>
                                </div>
                        ';
                        }
                    }
                    echo '</div>';
                    echo '<div class="cat_5 hidden">';
                    foreach ($prod as $item){
                        if ($item['CategoryID'] == 6){
                            echo '
                                <div class="item">
                                    <div class="card">
                                        <img src="'.$item['Preview'].'" onerror="standby()">
                                        <h4>'.$item['ProductName'].'</h4>
                                        <h5>'.$item['Weight'].' кг</h5>
                                        <h6>'.$item['Price'].' руб</h6>
                                    </div>
                                    <a class="add" href="/" onclick="addToCart('.$item['id'].')">В корзину</a>
                                </div>
                        ';
                        }
                    }
                    echo '</div>';

                    ?>
                </div>
                <h4 id="buy">Для оформления заказа</h4>
                <div class="cust">
                    <input type="text" name="name" required placeholder="Введите имя">
                    <input type="email" name="email" required placeholder="Введите email">
                    <input type="phone" name="phone" required placeholder="Введите телефон">
                    <input type="submit" value="Заказать">
                </div>
            </form>
            <div class="map">
                <div class="txt">* После заполнения формы на ваш E-mail и WhatsApp будет отправлено
                    информационное сообщение, с помощью которого вас уведомят о наличии/отсутствии
                    товара и сроках ближайшей доставки.</div>
                <div class="map_item">
                    <img src="img/map.jpg" alt="">
                </div>
            </div>
            <div class="about">
                <img src="img/about1.png" alt="">
                <p>Фермерское хозяйство находится в Тверской области Г. Кашин.
                    Животные проводят большое количество времени на воздухе и подлежат чуткому ежедневному уходу.
                    Благодаря удаленности от города, экологически чистой атмосфере и наблюлюдению ветеринаров, наша продукция соответсвует всем стандартам качества.
                </p>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
                <script src="js/categories.js"></script>
</body>
</html>