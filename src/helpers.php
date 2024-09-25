<?php

// Si no existe esta función, entonces se instancia
if (!function_exists('upper')) {
    // Este helper nos ayudara a poder usar esta función directamente en el archivo index
    function upper($value) {
        return Text\Format::upperText($value);
    }
}

// Realmente Composer si facilita (Y profesionaliza) mucho la carga de archivos en PHP, 
// pero, cuand trabajas con muchas dependencias mediante Composer, es posible que 
// existan 2 funciones iguales que lleven el mismo nombre, y eso puede causar 
// un Fatal Error en PHP, es por eso que siempre se suele encerrar dentro 
// de un if ( ! function_exists() ), de esa forma no duplicamos las 
// funciones y nos evitamos un error.
if (!function_exists('lower')) {
    function lower($value) {
        return Text\Format::lowerText($value);
    }
}
