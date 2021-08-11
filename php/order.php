<?php
    session_start();
    require_once '../main.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    echo $name.' '.$email.' '.$phone."\n";
    $ids = $_SESSION['cart'];

    function order($id)
    {
        $prods = getProducts();
        $ord = [];
        for ($i = 0; $i <= count($prods); $i++)
        {
            foreach ($id as $k)
            {
                if ($prods[$i]['id'] == $k['idProduct'])
                {
                    array_push($ord, $prods[$i]);
                }
            }
        }
        return $ord;
    }
    foreach (order($ids) as $item)
    {
        $str = $item['ProductName'].' '.$item['Price'].' '.$_POST['quantity'.$item['id']];
        echo $str;
    }



