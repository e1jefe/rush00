<?php

session_start();

if($_GET['id'] == 1)
{
	header("location: https://send.monobank.com.ua/2tWzbzQhr");
}
else
{
	echo "You need to login or signin before doing a purcheses.";
	header("refresh:3;url=sign-in.php");
}

?>