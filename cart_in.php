<?php
    require_once 'customer.php';
    require_once 'cart_dao.php';
    // var_dump($_POST);
    
    session_start();
    $login_customer = $_SESSION['login_customer'];
    
    // var_dump($login_customer);
    
    $customer_id = $login_customer->id;
    $item_id = $_POST['item_id'];
    $number = $_POST['number'];
    
    // print '顧客番号は' . $customer_id;
    // print '商品番号は' . $item_id;
    // print 'カートに入れる個数は' . $number;
    
    $cart = new Cart($customer_id, $item_id, $number);
    
    CartDAO::insert($cart);
    
    $_SESSION['flash_messsage'] = '商品をカートに追加しました';
    header('Location: mypage.php');
    exit;
    
    