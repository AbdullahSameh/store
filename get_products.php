<?php

$products = json_decode(file_get_contents(__DIR__ . '/products.json'), true);

uasort($products, function ($a, $b) {
  return $a['datetime'] < $b['datetime'];
});

if (count($products) > 0) {

  $total = 0;

  foreach ($products as $product) { ?>

    <tr>
      <td><?php echo $product['name'] ?></td>
      <td><?php echo $product['quantity'] ?></td>
      <td><?php echo $product['price'] ?></td>
      <td><?php echo $product['datetime'] ?></td>
      <td><?php echo $product['price'] * $product['quantity'] ?></td>
      <td>
        <button data-id="<?php echo $product['id'] ?>" onclick="editProduct(event)" class="btn btn-info del-btn">Edit</button>
      </td>
    </tr>

  <?php
    $total = $total + $product['price'] * $product['quantity'];
  } ?>

  <tr>
    <td colspan="4" class="text-center">Total</td>
    <td colspan="2">
      <?php echo $total ?>
    </td>
  </tr>

<?php } else { ?>
  <tr>
    <td colspan="6">No Product Founded</td>
  </tr>
<?php
}
