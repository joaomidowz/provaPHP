<?php
function somaEMultiplica($num1, $num2) {
    // Soma os dois números
    $soma = $num1 + $num2;
    
    // Multiplica a soma pelo primeiro número
    $resultado = $soma * $num1;
    
    // Retorna o resultado final
    return $resultado;
}

// Exemplo de uso da função
$num1 = 5;
$num2 = 3;

$resultado = somaEMultiplica($num1, $num2);

echo "O resultado de $num1 + $num2 * $num1 é: " . $resultado;
?>