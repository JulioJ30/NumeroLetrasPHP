<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<style>
		.container{
			width: 70%;
			margin: 0 auto;
			padding: 0;
		}

		.text-center{
			text-align: center;
		}

		.w-70{
			width: 70%;
		}

		.w-30{
			width: 29%;
		}
	</style>
</head>
<body>
	
	<div class="container">

		
		<h1 class="text-center">Convertir Numeros a Letras</h1>

		<form action="" method="POST" >
			<input type="text" name="numero" required class="w-70">
			<button class="w-30" type="submit">Convertir</button>
		</form>

	</div>


	<h3 class="text-center">
		<?php

		include __DIR__. "/../vendor/autoload.php";
			
		$obj  = new lic\NumLetras\NumeroLetras();

		if(isset($_POST["numero"])){
			$letra = $obj->ConvertirNumLet($_POST["numero"],"Soles","centimos");

			echo $_POST["numero"] . " - " .$letra;
		}


		?>
	</h3>



</body>
</html>

	
