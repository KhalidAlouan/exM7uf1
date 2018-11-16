<html>
 <head>
 	<title>Exemple de lectura de dades a MySQL</title>
 	<style>
 		body{
 		}
 		table,td {
 			border: 1px solid black;
 			border-spacing: 0px;
 		}
 	</style>
 </head>
 
 <body>
 	<form action="Acceso_datos-2.php" method="get">
 	
 	<?php
 		# (1.1) Connectem a MySQL (host,usuari,contrassenya)
 		$conn = mysqli_connect('localhost','khalid','khalid123');
 
 		# (1.2) Triem la base de dades amb la que treballarem
 		mysqli_select_db($conn, 'world');
 
 		# (2.1) creem el string de la consulta (query)
 		$consulta = "SELECT * FROM country;";
 
 		# (2.2) enviem la query al SGBD per obtenir el resultat
 		$resultat = mysqli_query($conn, $consulta);
 
 		# (2.3) si no hi ha resultat (0 files o bé hi ha algun error a la sintaxi)
 		#     posem un missatge d'error i acabem (die) l'execució de la pàgina web
 		if (!$resultat) {
     			$message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
     			$message .= 'Consulta realitzada: ' . $consulta;
     			die($message);
 		}

 	?>
 		<select name="pais">
 	
 	<?php
 	
 		
 		while( $registre = mysqli_fetch_assoc($resultat) )
 		{
  
 			
 			echo "\t<tr>\n";
 			
 			
 			echo "<option  value=".$registre["Code"].">".$registre["Name"]."</option>";
 			
 		}
 		
	 	echo "<input type='submit' value='Enviar' name='Enviar'>";
		
	 	$valor=$_GET["pais"];	
	 		
		
 	?>
 		</select>
	</form>
  	
 </body>
</html>