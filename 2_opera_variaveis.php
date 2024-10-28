<?php
// Recebe os dois valores pela URL usando o método GET
// Exemplo de URL: http://localhost/php-basico-out-2024/2_opera_variaveis.php?numero1=10&numero2=5
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

// Verifica se os valores foram passados corretamente
if (isset($numero1) && isset($numero2)) {
    // Converte os valores para inteiros
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;

    // Realiza as operações aritméticas básicas
    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;

