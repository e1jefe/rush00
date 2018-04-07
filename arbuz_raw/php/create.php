<?php

session_start();

$file = 'user_base/passwd';
if (file_exists($file) === FALSE)
	mkdir('user_base');
if ($_POST['login'] !== "" && $_POST['passwd'] !== "" && $_POST['phone-nbr'] !== "" && $_POST['email'] !== "" && $_POST['name'] !== "" && $_POST['submit'] == 'OK')
{
	if (strlen($_POST['phone-nbr']) == 12 && strpos($_POST['phone-nbr'], "+380") !== FALSE)
	{
		$email = test_input($_POST['email']);
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			if (preg_match("/^[a-zA-Z'-]/", $_POST['name']))
			{
				$arr['login'] = $_POST['login'];
				$arr['passwd'] = hash('whirlpool', $_POST['passwd']);
				$arr['phone-nbr'] = $_POST['phone-nbr'];
				$arr['email'] = $_POST['email'];
				$arr['name'] = $_POST['name'];
				
				$file_cont = unserialize(file_get_contents($file));
				foreach ($file_cont as $key => $value)
				{
					if ($value['login'] === $_POST['login'])
					{
						$message = "This login has already taken";
						$error = 1;
						return ;
					}
				}
				if ($error !== 1)
				{
					$file_cont[] = $arr;
					$message = "Your account is created. Now, please ";
				}
				$serializedData = serialize($file_cont);
				file_put_contents($file, $serializedData);
			}
			else
				$message = "Only latin symbols";
		}
		else
			$message = "Invalid email format";
	}
	else
		$message = "Wrong phone number";
}
else
{
	$message = "Please fill all fields";
	return ;
}

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
			<?php echo $message;?>
		<?php 
			if ($error !== 1)
				echo '<a href="../sign-in.html">login.</a>';
			else
				echo '<a href="../create.html">Create an account</a>';
		?>
		</p>
	</div>
</body>
</html>