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
			<td class="user-info">
				<?=$v["phone-nbr"]?>				
			</td>
			<td class="user-info">
				<?=$v["login"]?>
			</td>
			<td><a href="admin-delet.php?id=<?=$v['login']?>">DELETE</a></td>
		</tr>
<?php endforeach; ?>
	</table>
</div>
</body>
</html>