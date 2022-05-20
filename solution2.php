<?php
require_once "db.php";

function get_order($id)
{
    global $db;
//    $orders_query = $db->prepare("SELECT * FROM `order` WHERE id = ?");
//    $orders_query->execute($id); the execute() method do not accept any argument

    $orders_query = $db->prepare("SELECT * FROM `order` WHERE id = '$id'"); // it is preferred to pass in the id here.
    $orders_query->execute();
    $result = $orders_query->fetchAll();

    return json_encode($result,JSON_PRETTY_PRINT, 30);
}

function get_orders()
{
    global $db;
    $orders_query = $db->prepare("SELECT * FROM `order`");
    $orders_query->execute();
    $result = $orders_query->fetchAll();

    return json_encode($result,JSON_PRETTY_PRINT, 30);
}

//echo get_orders(32); this method do not accept any parameter
//echo get_orders(); this is how you call the get_orders() method.

echo get_order(10248);
