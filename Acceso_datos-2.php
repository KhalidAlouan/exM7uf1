<html>
 <head>
 	<title>Pagina 2</title>
 	<meta charset="utf-8">
 </head>
 
 <body>
 	
 	
 	<?php
 		$valor=$_GET["pais"];	

 		$conn = mysqli_connect('localhost','khalid','khalid123');
 
 		
 		mysqli_select_db($conn, 'world');
 
 		

 		$consulta = "SELECT name FROM city where CountryCode='".$valor."';";
 
 		$resultat = mysqli_query($conn, $consulta);

 		while( $registre = mysqli_fetch_assoc($resultat) )
 		{
  
 			
 			echo "\t<tr>\n";
 			
 			echo $registre["name"];
 			echo "<br>";
 		}
 	?>
 		
	
  	
 </body>
</html>