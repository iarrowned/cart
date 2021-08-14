<?php
    session_start();
    header('Location: /');
    require_once '../main.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $customer = $name.' '.$email.' '.$phone."\n";
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
    $totalPrice = 0;
    $message = $customer."\r\n";
    $fname = '../orders/'.uniqid('ord_').'.txt';
    $file = fopen($fname, 'w');
    fwrite($file, $customer);
    foreach (order($ids) as $item)
    {
        $str = $item['ProductName'].' |цена: '.$item['Price'].' |количество: '.$_POST['quantity'.$item['id']].' |сумма: '.$_POST['quantity'.$item['id']]*$item['Price'];
        fwrite($file, $str."\n");
        $totalPrice += $_POST['quantity'.$item['id']]*$item['Price'];
        $message .= $str."\r\n";
    }
    fwrite($file, "Сумма заказа: $totalPrice");
    fclose($file);
    $message .= "Сумма заказа: $totalPrice \r\n";

    mail('14krabik14@gmail.com', 'Test subj', $message, 'From: kyznetsovkk@gmail.com');
