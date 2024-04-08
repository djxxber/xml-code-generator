<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerName = $_POST['customer-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $orderId = $_POST['order-id'];
    $productName = $_POST['product-name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $notes = $_POST['notes'];
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
<order>
  <customer>
    <name>' . htmlspecialchars('aaaaaaaaaaaaaaaaaaaa') . '</name>
    <email>' . htmlspecialchars($email) . '</email>
    <phone>' . htmlspecialchars($phone) . '</phone>
    <address>' . htmlspecialchars($address) . '</address>
  </customer>
  <order-details>
    <id>' . htmlspecialchars($orderId) . '</id>
    <product>
      <name>' . htmlspecialchars($productName) . '</name>
      <quantity>' . htmlspecialchars($quantity) . '</quantity>
      <price>' . htmlspecialchars($price) . '</price>
    </product>
    <notes>' . htmlspecialchars($notes) . '</notes>
  </order-details>
</order>';
     file_put_contents('generated_order.xml', $xml);
}
?>
