<?php

function init_cart()
{
    $_SESSION['init'] = "init";
    $con = connect();
    if (!mysqli_select_db($con, "db_test"))
        return (0);
    $elements = mysqli_num_rows(mysqli_query($con, "SELECT * FROM products"));
    for ($i=1; $i < $elements + 1; $i++) {
        if (!$_SESSION["'".$i."'"])
            $_SESSION["'".$i."'"] = 0;
    }
}
?>

CREATE TABLE `products` (
`id_product` int(11) NOT NULL,
`title` varchar(64) NOT NULL,
`img_url` varchar(512) NOT NULL,
`price` decimal(10,2) NOT NULL,
`category` varchar(128) NOT NULL,
`sub_category` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
