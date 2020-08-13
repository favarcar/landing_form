<?php
include ('cone.php');
$valor = array();
foreach ($_POST as $key => $value){
	$valor[] = htmlspecialchars("'".mysqli_real_escape_string($cone, $value)."'"); 
	}
	
//Se unen todos los valores que se van a insertar	
$valores_ins = implode(',',$valor);
//echo $valores_ins;
mysqli_query($cone,"INSERT INTO contacts(state, city, name, email) values ($valores_ins)") or Die(mysqli_error($cone));

echo '<div class="alert alert-success text-center">Se ha realizado el registro de la información, <br> Muchas Gracias
<br><a href="index.html" class="btn btn-primary">Nuevo registro</a>
</div>';

?>