<?php

// Asignación
$num = 9;
$lang = [
    'es' => 'español',
    'en' => 'inglés'
];

// Aritmética
echo "Suma 2 + 2 = " . ((int) 2 + (int) 2) . "\n";
echo "Resta 2 - 2 = " . ((int) 2 - (int) 2) . "\n";
echo "Multiplica 2 * 2 = " . ((int) 2 * (int) 2) . "\n";
echo "Divide 2 / 2 = " . ((int) 2 / (int) 2) . "\n";
echo "Modulo 2 % 2 = " . ((int) 2 % (int) 2) . "\n";
echo "Exponencial 2 ** 2 = " . ((int) 2 ** (int) 2) . "\n";

// Comentarios
class Answer {
    /***
     * Esto es un comentario de varias
     * lineas para una mejor
     * forma de comentar
     */
    protected $clients = []; // lista de clientes
    protected $suppliers = []; #lista de proveedores
}

// Comparación
// Igual ==, valor
// Igual ===, valor - tipo
// Diferencias !=, valor
// Diferencias !==, valor - tipo
// <, >, <=, >=

// Variables variables
$app = 'raul';
$raul = 'nombre';

echo $$app . "\n";