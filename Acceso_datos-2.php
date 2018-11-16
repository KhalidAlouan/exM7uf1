<html>
 <head>
 	<title>Pagina 2</title>
 	<meta charset="utf-8">
 	<style type="text/css">
 		table,td {
 			border: 1px solid black;
 			border-spacing: 0px;
 		}
 	</style>
 </head>
 
 <body>
 	
 	
 	
 	<?php
 		$valor=$_GET["pais"];	

 		$conn = mysqli_connect('localhost','khalid','khalid123');
 
 		
 		mysqli_select_db($conn, 'world');
 
 		

 		$consulta = "SELECT city.name Ciutat,country.name Pais FROM city, country where city.CountryCode=country.Code AND  
 		    city.CountryCode='".$valor."';";
 
 		$resultat = mysqli_query($conn, $consulta);

 		

 	?>
 	<table>
 	<thead><td colspan="4" align="center" bgcolor="cyan">Ciudades&Paises</td></thead>
 	<?php

 	while( $registre = mysqli_fetch_assoc($resultat) )
 		{
  
 			
 			echo "\t<tr>\n";
 			echo "\t\t<td>".$registre["Ciutat"]."</td>\n";
 			echo "\t\t<td>".$registre["Pais"]."</td>\n";

 			echo "\t</tr>\n";
 		}

 	?>
 	</table>	
 		
	
  	
 </body>
</html>
