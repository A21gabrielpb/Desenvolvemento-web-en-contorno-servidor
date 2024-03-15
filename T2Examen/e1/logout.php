<?php

// Destruir la sesión correctamente
if(session_destroy()){
    echo"A sesión destruiuse correctamente";
}else{
    echo "Error a hora de detruir a sesión";
}

// Redirigir al formulario de inicio de sesión
header('Location: index.php');
exit();
