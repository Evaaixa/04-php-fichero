<?php
require 'esImagen.php';
/**
 * Mostrar una lista de los archivos que hay en un directorio
 */
// directorio que queremos escanear
$directorio = 'imagenes/';



// comprobar si un archivo es una imagen
// function esImagen($directorio, $ruta){
//     $rutaCompleta =$directorio . $ruta;
//     $tipoMime = mime_content_type($rutaCompleta);
//     echo "Tipo mime $tipoMime";
//     return strpos($tipoMime,'image/') === 0;
// }



// función para mostrar las imágenes
function mostrarImagen($directorio, $imagen){
    echo "<img src='$directorio$imagen' alt='Imagen de prueba' width='200px'>";
}

// comprobamos si el directorio existe
if(is_dir($directorio)){
    // el directorio existe
    // abrimos el directorio
    if($dh = opendir($directorio)){
        echo "<h1>Archivos de imagen en el directorio $directorio</h1>";
        echo "<ul>";

        // leemos cada entrada del directorio
        while(($archivo = readdir($dh)) !== false){
            // ignora . y ..
            if($archivo != "." && $archivo != ".."){
                $rutaCompleta = $directorio . $archivo;
                if(esImagen($rutaCompleta)){
                    echo "<li>Archivo: $archivo</li>";
                    echo "<li>";
                    mostrarImagen($directorio, $archivo);
                    echo "</li>";
            }
        }
        }
        echo "</ul>";
    }
    }else{
    // el directorio no existe
    echo "El directorio $directorio no existe.";
}
