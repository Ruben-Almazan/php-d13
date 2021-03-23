<!DOCTYPE html>

<?php
	
	include('conexion.php');

?>

<html>
<head>
<meta charset=utf-8 />
<title>Test PHP</title>
</head>
<body>
	<h1>Hola Mundo :) SOY Introducción a PHP</h1>
	<?php
		$variable = "Ruben";
		echo "Hola PHP $variable";
		
		//Comentario en una inea
		
		/*Comentario
		multilinea*/
		
		echo "<br>";
		echo "<br>";
		
		for($i = 0; $i < 5; $i++)
		{
			echo "<li> Registro $i </li>";
		}
		
	?>
	
	<br> 
	<form action="store.php" method = "POST">
		<label for="tarea">Nombre de Tarea</label>
		<input type="text" name= "tarea">
		<br>
		<label for="descripcion">Descripcion</label>
		<textarea name= "descripcion" cols="30" rows="3"> </textarea>
		<br>
		<label for="prioridad">Prioridad</label>
		<select name="prioridad">
				<option value="Alta">Alta</option>
				<option value="Media">Media</option>
				<option value="Baja">Baja</option>
		</select>
		<br>
		<input type="checkbox" name="urgente" value="1">
		<label for="urgente">Urgente</label>
		<br>
		<input type="radio" name="tipo" value="escuela">
		<label for="urgente">Escuela</label>
		<br>
		<input type="radio" name="tipo" value="trabajo">
		<label for="urgente">Trabajo</label>
		<br>
		
		<input type="submit" value="Enviar">
		<br>
		<br>
		
	</form>
<hr>
	<?php
		$sql = "SELECT * FROM tareas";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table border='1'>";
		echo "<tr> <th> ID </th> <th> Nombre </th> <th> Correo </th> </tr>";
		foreach($stmt->fetchAll() as $tarea)
		{
			echo "<tr>
			<td> " . $tarea['id'] . " </td>
			<td> " . $tarea['tarea'] . " </td>
			<td> " . $tarea['descripcion'] . " </td>
			</tr>";
		}
		echo "</table>";
	?>
	

	
</body>
</html>
