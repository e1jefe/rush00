<?php

session_start();

function auth($login, $passwd)
{
	if ($login !== "" && $passwd !== "")
	{
		$file = 'user_base/passwd';
		$pass_hash = hash('whirlpool', $passwd);
		$file_cont = unserialize(file_get_contents($file));
		foreach ($file_cont as $key => $account)
		{
			if ($account['login'] === $login)
			{
				if ($account['passwd'] === $pass_hash)
					return TRUE;
			}  
		}
	}
	return FALSE;
}

if (auth($_GET['login'], $_GET['passwd']) === TRUE)
{
	$_SESSION['loggued_on_user'] = $_GET['login'];
	echo "OK\n";
}
else
{
	$_SESSION['loggued_on_user'] = "";
	echo "ERROR\n";
}

?>