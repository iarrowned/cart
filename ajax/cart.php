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

    if (isset($_POST['action']) && ($_POST['action'] == 'del'))
    {
        $id = $_POST['id'];
        $newCart = [];
        $cart = $_SESSION['cart'];

        for ($i = 0; $i < count($cart); $i++)
        {
            $idProduct = $cart[$i]['idProduct'];
            if ($id != $idProduct)
            {
                $newCart[count($newCart)] = $cart[$i];
            }
        }
        $_SESSION['cart'] = $newCart;
    }



