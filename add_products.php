<?php

if ($_SERVER['REQUEST_METHOD']  == 'POST') {

  $products = json_decode(file_get_contents(__DIR__ . '/products.json'), true);

  $data =  $_POST;
  $data['id'] = count($products) + 1;
  $data['datetime'] = date('y-m-d h:i:s');

  $products[] = $data;

  file_put_contents(__DIR__ . '/products.json', json_encode($products));
}
