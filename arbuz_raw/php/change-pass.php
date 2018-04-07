<?php

$file = 'user_base/passwd';

if ($_POST['login'] !== "" && $_POST['oldpw'] !== "" && $_POST['newpw'] !== "" && $_POST['submit'] == 'OK' && $_POST['oldpw'] !== $_POST['newpw'])
{
	$error = 1;
	$file_cont = unserialize(file_get_contents($file));
	foreach ($file_cont as $key => $value)
	{
		if ($value['login'] === $_POST['login'])
		{
			if ($value['passwd'] === hash('whirlpool', $_POST['oldpw']))
			{
				$file_cont[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
				$serializedData = serialize($file_cont);
				file_put_contents($file, $serializedData);
				$error = 0;
				$message = "Password was successfully changed. ";
			}
		}
	}
}
if ($error === 1)
	$message = "Oups, please try againe";

?>
<html>
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
	<style>
		body{
			background: #76b852; /* fallback for old browsers */
			background: -webkit-linear-gradient(right, #528354, #314e32);
			background: -moz-linear-gradient(right, #528354, #314e32);
			background: -o-linear-gradient(right, #528354, #314e32);
			background: linear-gradient(to left, #528354, #314e32);
			font-family: "MyriadPro", sans-serif;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;      
		}
		.container {
			margin: 50px auto;
			padding: 10%;
		}
		.message {
			font-size: 50px;
			color: #fff;
			display: block;
			margin: 0 auto;
			text-align: center;
		}
		a {
			text-decoration: none;
			color: #fff;
			font-style: italic;
		}
		a:hover, a:active {
		    outline: none;
			background: rgba(0, 0, 0, 0.4);
						-moz-transition-property: rgba(0, 0, 0, 0.4); /*SMOOTH CHANGE BG FOR HOVER*/
						-moz-transition-duration: 0.8s;
						-moz-transition-timing-function: ease-out;
						-webkit-transition-property: rgba(0, 0, 0, 0.4);
						-webkit-transition-duration: 1s;
						-o-transition-property: rgba(0, 0, 0, 0.4);
						-o-transition-duration: 0.8s;
		}
	</style>
</head>
<body>
	<div class="container">
		<p class="message">
		<?php 
			if ($error === 0)
				echo $message . '<a href="../index.php"> Back to shopping.</a>';
			else
				echo '<a href="change-pass.php">' . $message . '</a>';
		?>
		</p>
	</div>
</body>
</html>