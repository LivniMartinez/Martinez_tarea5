<?php   

//Se utiliza el metodo GET, y se coloca un error al no utilizarlo
if($_SERVER['REQUEST_METHOD']==='GET'){
    $respuesta = "El metodo si es GET";
    echo $respuesta;
}else {
    echo "ERROR el metodo no es GET";
};