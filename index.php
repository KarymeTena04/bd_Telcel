<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="POST">
    	<h1>Registro Clientes</h1>
    	<input type="text" name="nombres" placeholder="Nombre(s)">
    	<input type="text" name="apellidos" placeholder="Apellidos">
    	<input type="email" name="correo" placeholder="Correo">
    	<input type="text" name="telefono" placeholder="Telefono">
    	<input type="submit" name="enviar" value="Registrar">
    </form>
        <?php 
        include("cliente.php");
        ?>
</body>
</html>