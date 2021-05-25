<?php 
include("cuen.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['correo']) >= 1 && strlen($_POST['correo1']) >= 1) {
	    $correo = trim($_POST['correo']);
	    $correo1 = trim($_POST['correo1']);
	    $consulta = "INSERT INTO cuentasse(correo, correo1) VALUES ('$correo','$correo1')";
        mysqli_query($conex,$consulta);
        if ($consulta){
    echo '<script language="javascript">alert("Gracias por registrar una cuenta,tus datos fueron registrados");</script>';
      
    }}}
?>
