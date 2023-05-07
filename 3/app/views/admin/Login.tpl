<!DOCTYPE html>
<html lang="pl">
	<head>
	<meta charset="utf-8"/>
	<link rel="shortcut icon" href="../inc/images/favicon.ico">
	<link rel="stylesheet" href="{$location}/css/admin.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand"/>
	<title>{$name} | {$title}</title>
	</head>
	<body>
		<div id="pasek">
			<img src='https://bluemc.pl/inc/images/logo_male.png' class='logo'/>
		</div>
		<div class="box">
			<a href="https://bluemc.pl"><img src='https://bluemc.pl/inc/images/logo_male.png' width='80px' height='80px'/></a>
			<h1 style='color: #ddd'>Logowanie</h1>
				<form action="" method="post">
				<input type="text" class="pole" placeholder="Nazwa użytkownika" name="username" required/>
				<input type="password" class="pole" placeholder="Hasło" name="password" required/>
				<input type="submit" class="guzik" value="Zaloguj się" name="Submit"/>
				</form>
		</div>
		<div id="stopka">
			<p style='margin-top: 7px;'>Logowanie | © BlueMC.PL 2022</p>
		</div>
	</body>
</html>