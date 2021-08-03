<?php
    session_start();

    if (isset($_POST['action']) && ($_POST['action'] == 'add'))
    {
        $cart = $_SESSION['cart'];
        $id = $_POST['id'];
        $newProduct['idProduct'] = $id;
        if (!in_array($newProduct, $cart))
        {
            $cart[count($cart)] = $newProduct;
        }
        $_SESSION['cart'] = $cart;
    }
    function pr(){
        print_r($_SESSION['cart']);
    }