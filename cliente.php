<?php 

include("con_db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1) {
	    $nombres = trim($_POST['nombres']);
	    $apellidos = trim($_POST['apellidos']);
	    $correo = trim($_POST['correo']);
	    $telefono = trim($_POST['telefono']);
	    $consulta = "INSERT INTO cliente(nombres, apellidos, email, tel) VALUES ('$nombres','$apellidos','$correo','$telefono')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>