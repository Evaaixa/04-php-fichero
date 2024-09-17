<?php

/**
 * Comprueba si un archivo es de tipo imagen
 * Los tipos válidos son: jpg, jpeg, png, gif, bmp y svg
 * @param string $rutaCompleta La ruta completa del archivo
 * 
 * @return bool indica si el archivo es una imagen o no
 */
function esImagen($rutaCompleta){
    // $rutaCompleta = $directorio . $ruta
    
    $extension = strtolower (pathinfo($rutaCompleta, PATHINFO_EXTENSION));
    $validImageExtensions = [
        'jpg',
        'jpeg',
        'png',
        'gif',
        'bmp',
        'webp',
        'svg'
    ];
    return in_array($extension, $validImageExtensions);
}