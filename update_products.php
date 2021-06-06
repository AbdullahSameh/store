<?php

if ($_SERVER['REQUEST_METHOD']  == 'POST') {

  $products = json_decode(file_get_contents(__DIR__ . '/products.json'), true);

  $id =  $_POST['id'];

  $productsUpdate = [];

  $data =  $_POST;
  $data['datetime'] = date('y-m-d h:i:s');

  foreach ($products as $key => $product) {
    if ($product['id'] == $id) {
      $products[$key]['name'] = $_POST['name'];
      $products[$key]['quantity'] = $_POST['quantity'];
      $products[$key]['price'] = $_POST['price'];
      $products[$key]['datetime'] = date('y-m-d h:i:s');
    }
  }
  file_put_contents(__DIR__ . '/products.json', json_encode($products));
}
