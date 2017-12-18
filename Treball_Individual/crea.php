<?php
SESSION_START(); //Iniciar sesión

?>

<html>
<head>
	<title>Crea una taula</title>
</head>
<body>

	<form action="memory.php" method="post">
		<p>Introduce your name: <input name="nombre" type="text"></p>
		<p>Filas: 
		<select name="filas"> 
			<option value="4" selected="selected">4</option>
			<option value="6" selected="selected">6</option>
			<option value="8" selected="selected">8</option>
		</select> </p>
		<p>Columnas: 
		<select name="columnas"> 
			<option value="4" selected="selected">4</option>
			<option value="6" selected="selected">6</option>
			<option value="8" selected="selected">8</option>
		</select> </p>
			
		<!--<p>Filas: <input type="text" name="filas" /></p>
		<p>Columnas: <input type="text" name="columnas" /></p> -->
		<p><input type="submit" /></p>
	</form>

</body>
</html>


· Crea un ckeck box para seleccionar una carta. Usa el batalla naval para hacerlo



