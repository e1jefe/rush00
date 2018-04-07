<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php Include "header.php"; ?>

<?php
//include "db_connect.php";
//function		connect()
//{
//    $link = mysqli_connect("localhost", "admin", "admin", "db-shop");
//    if (mysqli_connect_errno())
//        echo "Failed to connect to MySQL database : " . mysqli_connect_error();
//    return ($link);
//}
//function       display_products()
//{
//    $link = connect();
//    $result = mysqli_query($link, "SELECT * FROM products");
//    $new_url_get = '/mybasket.php';
//    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
<!--        <form method="post" action="--><?//= $new_url_get ?><!--">-->
<!--            <li>-->
<!--                <div style="display:inline-block;">-->
<!--                    <div><img width="290px" height="400px" src="--><?//= $row['img_url']; ?><!--"></div>-->
<!--                    <div><span>--><?//= $row['title']; ?><!--</span></div>-->
<!--                    <div><span>--><?//= $row['price']; ?><!--€</span></div>-->
<!--                    <div><input type="hidden" name="id" value="--><?//= $row['id_product']; ?><!--"></div>-->
<!--                    <div><input type="hidden" name="price" value="--><?//= $row['price']; ?><!--"></div>-->
<!--                    <div><input class="button" type="submit" name="submit" value="Add to cart"></div>-->
<!--                </div>-->
<!--            </li>-->
<!--        </form>-->
<!--    --><?php //endwhile;
//}?>

<?php
require_once 'db_connect.php';
?>


<?php

function get_cats($link)
{
    $sql = "SELECT * FROM products";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_all($result, 1);
    return $data;
}
?>
<?php
$cats = get_cats($link);
?>
<?php foreach ($cats as $v): ?>
    <li><?=$v["title"]?><img src=" <?=$v['img_url']?>"></li>
<?php endforeach; ?>

<?php
function		display_products($link, $category){
//{
//$result = mysqli_query($link, "SELECT * FROM `products`" . mysqli_real_escape_string($link, $category) . "''");
//while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
//?><!--<html><div>--><?//= $row['product']?><!--</div><br /></html>--><?php
}
//?>
<?php //session_start(); ?>
<!---->
<!--<body><a name="home"></a>-->
<!--<section class="home">-->
<!--    <div class="container">-->
<!--        <nav class="menu-top">-->
<!--            <div class="logo">-->
<!--                <div class="logo-icon">-->
<!--                    <img src="img/icon-hydric.png" alt="hydric-logo">-->
<!--                </div>-->
<!--                <p>-->
<!--                    Fructo-->
<!--                </p>-->
<!--            </div>-->
<!--            <input type="checkbox" id="menu-checkbox">-->
<!--            <label class="menu-btn" for="menu-checkbox"></label>-->
<!--            <div class="menu-items clearfix">-->
<!--                <a href="#home">Home</a>-->
<!--                <a href="#about">About</a>-->
<!--                <a href="#features">Features</a>-->
<!--                <a href="#buy" class="buy">Buy now</a>-->
<!--                --><?php
//                if($_SESSION['is_log'] == TRUE)
//                    echo "<a href='logout.php'>Logout: " . $_SESSION['loggued_on_user'] . '</a>';
//                else
//                    echo '<a href="sign_in.html" target="_self">Login/Register</a>';
//                ?>
<!--            </div>-->
<!--        </nav>-->
<!--        <div class="slogan">-->
<!--            Sweet and delicious exotic fruits-->
<!--        </div>-->
<!--        <div class="single-fruit">-->
<!--            <img src="img/hidric.png" alt="Hidric">-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="about"><a name="about"></a>-->
<!--    <div class="container">-->
<!--        <div class="about-title">-->
<!--            Internet shop exotic fruits-->
<!--        </div>-->
<!--        <div class="about-text">-->
<!--            <p>-->
<!--                More flavor and juiciness.-->
<!--            </p>-->
<!--        </div>-->
<!--        <div class="about-text">-->
<!--            <p>-->
<!--                Fresh tropical fruits!-->
<!--            </p>-->
<!--        </div>-->
<!--        <div class="about-pic">-->
<!--            <img src="img/srez.png" alt="hydric_lengthwise">-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="health"><a name="features"></a>-->
<!--    <div class="container">-->
<!--        <div class="health-title">-->
<!--            Pure health-->
<!--        </div>-->
<!--        <div class="health-text">-->
<!--            <p>-->
<!--                Treat yourself with no harm for body.-->
<!--            </p>-->
<!--        </div>-->
<!--        <div class="arbuz-ingridients">-->
<!--            <img src="img/arbuz.png" alt="arbuz">-->
<!--            <div class="protein">-->
<!--                <img src="img/protein.png" alt="protein" >-->
<!--                <p>-->
<!--                    Protein  0,63g-->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="calories">-->
<!--                <img src="img/calories.png" alt="calories" >-->
<!--                <p>-->
<!--                    Calories  35kcal-->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="water">-->
<!--                <img src="img/water.png" alt="water" >-->
<!--                <p>-->
<!--                    Water  92%-->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="fat">-->
<!--                <img src="img/fat.png" alt="fat" >-->
<!--                <p>-->
<!--                    Fat 0,63g-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="price"><a name="buy"></a>-->
<!--    <div class="container">-->
<!--        <div class="price-title">-->
<!--            By fructs-->
<!--        </div>-->
<!--        <div class="price-text">-->
<!--            <p>-->
<!--                Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
<!--            </p>-->
<!--        </div>-->
<!--        <div class="price-text">-->
<!--            <p>-->
<!--                Lorem ipsum dolor sit amet.-->
<!--            </p>-->
<!--        </div>-->
<!--        <div class="price-policy">-->
<!---->
<!---->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<footer>-->
<!--    <div class="container">-->
<!--        <nav class="menu-bottom">-->
<!--            <a href="#home">-->
<!--                Home-->
<!--            </a>-->
<!--            <a href="#about">-->
<!--                About-->
<!--            </a>-->
<!--            <a href="#features">-->
<!--                Features-->
<!--            </a>-->
<!--            <a href="#buy">-->
<!--                Buy now-->
<!--            </a>-->
<!--        </nav>-->
<!--        <div class="btn-home">-->
<!--            <a href="#home">-->
<!--                <img src="img/button_home.png" alt="home">-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="copyrights">-->
<!--            <p>-->
<!--                © 2018 Fructo. All rights reserved by dsheptun and inovykov.-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

</body>
</html>
