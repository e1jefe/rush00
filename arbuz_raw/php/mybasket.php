<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php Include "header.php"; ?>


<?php
require_once 'db_connect.php';
?>

<?php

function get_goods($link)
{
    $sql = "SELECT * FROM products";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_all($result, 1);
    return $data;
}

function add_product($product, $link)
{
    $query = "INSERT INTO products (title, price, category, img_url)
       VALUES ({$product['title']}, {$product['price']}, {$product['category']}, {$product['img_url']});";
    return (mysqli_query($link, $query));
}

function update_product($product, $link)
{
    $query = "UPDATE products
      SET title = {$product['title']}, price = {$product['price']}, category = {$product['price']}, img_url = {$product['img_url']}
      WHERE id_product = {$product['id_product']}";
    return (mysqli_query($link, $query));
}

function delete_product($product, $link)
{
    $query = "DELETE products
      FROM title = {$product['title']}, price = {$product['price']}, category = {$product['price']}, img_url = {$product['img_url']}
      WHERE id_product = {$product['id_product']}";
    return (mysqli_query($link, $query));
}

?>
<?php
$goods = get_goods($link);
?>
<?php foreach ($goods as $v): ?>
    <pre>
        <?php print_r($v); ?>
    </pre>
    <li><?=$v["title"]?><img src=" <?=$v['img_url']?>"> <?=$v["price"]."$"?></li>
<?php endforeach; ?>
</body>
</html>
