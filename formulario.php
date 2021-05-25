<?php 
include("comen.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['mensaje']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $mensaje =trim($_POST['mensaje']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO comenta(nombre, email,telefono,mensaje,fechareg) VALUES('$nombre','$email','$telefono','$mensaje','$fechareg')";
        mysqli_query($conex,$consulta);
    if ($consulta){
    echo '<script language="javascript">alert("Gracias por tu duda o sugerencia, la revisaremos para darte un buen servicio");</script>';
           
    }}}
?>
