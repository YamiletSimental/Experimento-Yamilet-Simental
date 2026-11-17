<!DOCTYPE html> 
<html lang="es"> <head>     
	<meta charset="UTF-8">     
	<title>Registro de productos</title> </head> <body>      
		<h2>REGISTRO DE TRES PRODUCTOS</h2>      
		<!-- Formulario de captura -->     
		<form method="POST" action="">      
<?php     
	// Ciclo para mostrar tres renglones de captura     
	for ($i = 0; $i < 3; $i++) { 
		echo "Numeros 1:";         
	    echo "<input type='number' name='numeros1[]'>" . " ";             
		echo "Numeros 2:";        
		echo "<input type='number' name='numeros2[]'>" . " ";           
		echo "<br><br>";     
	}     
?>      
<!-- Botón para guardar y calcular -->     
		<button type="submit" name="guardar" value="guardar">     
			Guardar y calcular 
		</button>          
<?php    
// Verificar si se presionó el botón Guardar    
if(isset($_POST['guardar'])) {          
// Guardar los datos en tres arreglos         
	$numeros1 = $_POST['numeros1'];        
	$numeros2 = $_POST['numeros2'];           
// Declarar los arreglos de resultados         
	$suma = array();         
	$resta = array();         
	$multi = array();    
	$residuo = array();      
// Ciclo para realizar los cálculos         
	for ($i = 0; $i < 3; $i++) {              
// Calcular suma           
	$suma[$i] = $numeros1[$i] + $numeros2[$i];  
//calcular resta
    $resta[$i] = $numeros1[$i] - $numeros2[$i];         
// Calcular multiplicacion            
	$multi[$i] = $numeros1[$i] * $numeros2[$i];              
// Calcular residuo             
	$residuo[$i] = $numeros1[$i] % $numeros2[$i];          }          
// Imprimir el arreglo de productos         
	echo "<h3>ARREGLO DE PRODUCTOS</h3>";   
for ($i = 0; $i < 3; $i++) {             
	echo $numeros1[$i] . "<br>";         
}          
// Imprimir el arreglo de precios         
	echo "<h3>ARREGLO DE PRECIOS</h3>";          
for ($i = 0; $i < 3; $i++) {             
	echo  $numeros2[$i] . "<br>";         
}          
//Imprimir el arreglo de suma
echo "<h3>ARREGLO DE SUMA</h3>";
for ($i = 0; $i < 3; $i++){
	echo number_format($suma[$i], 2) . "<br>";
}
// Imprimir el arreglo de subtotales         
	echo "<h3>ARREGLO DE RESTA</h3>";          
for ($i = 0; $i < 3; $i++) {             
	echo number_format($resta[$i], 2) . "<br>";         
}          
// Imprimir el arreglo de IVA         
	echo "<h3>ARREGLO DE MULTIPLICACIÓN</h3>";          
for ($i = 0; $i < 3; $i++) {             
	echo number_format($multi[$i], 2) . "<br>";         
}          
// Imprimir el arreglo de residuo         
	echo "<h3>ARREGLO DE  RESIDUO</h3>";          
for ($i = 0; $i < 3; $i++) {             
	echo number_format($residuo[$i], 2) . "<br>";         
	}  
for ($numeros1; $numeros1<99; $numeros1++ ){
	
}   
}      
?>  
</body> 
</html> 
