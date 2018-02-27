<html>
<head>
	<title>Ejemplo de Uso Switch</title>
</head>

<body>
EJEMPLO DE WISTCH
<br><br>

<?php
	$dia= 8;
	switch($dia){
		case 1:      //Bloque 1
			echo"el dia es lunes";
			break;
		case 2:      //Bloque 2
			echo"el dia es Martes";
			break;
		case 3:      //Bloque 3
			echo"el dia es Miercoles";
			break;
		case 4:      //Bloque 4
			echo"el dia es Jueves";
			break;
		case 5:      //Bloque 5
			echo"el dia es Viernes";
			break;
		case 6:      //Bloque 6
			echo"el dia es Sabado";
			break;
		case 7:      //Bloque 7
			echo"el dia es Domingo";
			break;
		case 8:      //Bloque 8
			echo"La variable contiene otro valor ";
		
			echo "distinto a los dias de la semana";
			
	}
		
	
		?>
</body>
</html>