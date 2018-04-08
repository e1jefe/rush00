<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="
	width=device-width,
	height=device-height,
	initial-scale=1,
	minimum-scale=1,
	maximum-scale=1,
	user-scalable=0"/>
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/admin.css">
	<title>Fructo_ADM</title>
</head>
<body>
<div class="container">
	<table class="user-holder" cellpadding="5" cellspacing="5">
		<caption>All registered users</caption>
		<tr class="user-titels">
			<td>Name</td>
			<td>email</td>
			<td>phone nbr</td>
			<td>login</td>
		</tr>
        <?php
        require_once 'db_connect.php';
        ?>
<?php session_start(); 
$file = 'user_base/passwd';
$file_cont = unserialize(file_get_contents($file));
foreach ($file_cont as $key => $v): 
	if ($v['login'] === 'admin')
		continue ;
		?>
		<tr class="user">
			<td class="user-info">
				<?=$v["name"]?>
			</td>
			<td class="user-info">
				<?=$v["email"]?>
			</td>
			<td class="user-info">0
				<?=$v["phone-nbr"]?>				
			</td>
			<td class="user-info">
				<?=$v["login"]?>
			</td>
			<td><a href="admin-delet.php?id=<?=$v['login']?>">DELETE</a></td>
		</tr>
<?php endforeach; ?>
        <?php
        function get_goods1($link, $param)
        {
            $sql = "SELECT * FROM products";
            $result = mysqli_query($link, $sql);
            $data = mysqli_fetch_all($result, 1);
            return $data;
        }
        ?>
        <?php
        $gds = get_goods1($link, $_POST['products']);
        ?>
        <?php
        foreach ($gds as $key => $v):
        ?>
            <tr class="user">
                <td class="user-info">
                <?=$v["id_product"]?>
            </td>
                <td class="user-info">
                <?=$v["title"]?>
            </td>
                <td class="user-info">
                <?=$v["price"]?>
            </td>
                <td class="user-info">
                <?=$v["category"]?>
            </td>
                <td class="user-info">
                    <img src="<?=$v['img_url']?>" style="height: 100px; width: 100px;">
            </td>
        </tr>
        <?php endforeach; ?>
	</table>
</div>
</body>
</html>

<?php
function add_product($product, $link) {
$query = "INSERT INTO products (title, price, category, img_url)
  VALUES ({$product[title]}, $product[price], $product[category], $product[img_url]);";
    return (mysqli_query($link, $query));
}

function update_product($product, $link) {
$query = "UPDATE products
  SET title = {$product['title']}, price = {$product['price']}, category = {$product['price']}, img_url = {$product['img_url']}
  WHERE id_product = {$product['id_product']}";
    return (mysqli_query($link, $query));
}

function delete_product($product, $link) {
$query = "DELETE products
  FROM title = {$product['title']}, price = {$product['price']}, category = {$product['price']}, img_url = {$product['img_url']}
  WHERE id_product = {$product['id_product']}";
    return (mysqli_query($link, $query));
}
?>