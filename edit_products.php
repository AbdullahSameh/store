<?php

if ($_GET['id']) {
  $products = json_decode(file_get_contents(__DIR__ . '/products.json'), true);

  $id =  $_GET['id'];
  foreach ($products as $product) {
    if ($product['id'] == $id) {
      echo json_encode($product);
    }
  }
  return null;
}
