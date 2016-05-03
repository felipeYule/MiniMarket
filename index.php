<?php
// el archivo autoload inicializa todos lo archivos necesarios para que el framework funcione
include "core/autoload.php";


// cargamos el modulo iniciar.
$lb = new Lb();
$lb->loadModule("index");


session_start();
// ---
// la tarea de este archivo es eliminar todo rastro de cookie

// -- eliminamos el usuario
if(isset($_SESSION['client_id'])){
	unset($_SESSION['client_id']);
}

session_destroy();

//estemos donde estemos nos redirije al index
print "<script>window.location='./';</script>";
?>
