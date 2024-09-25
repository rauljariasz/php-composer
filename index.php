<?php

// SI o SI debemos requerir el archivo autoload.php
// si no lo hacemos, no le estamos dando la utilidad
// correcta a composer
require __DIR__ . '/vendor/autoload.php';

echo upper('Helou') . "\n";
echo lower('Helou') . "\n";


// Comandos de Composer
//Si tienes el paquete agregado a tu composer.json
// composer install

//si no lo tienes configurado en tu json
// composer require --dev phpunit/phpunit

//Si deseas removerlo
// composer remove phpunit/phpunit

//para agregar composer a tu proyecto
// composer dump