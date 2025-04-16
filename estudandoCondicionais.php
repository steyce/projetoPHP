/*Exercício 1: Calculadora de Desconto
Crie um script PHP que determine o desconto a ser aplicado a um produto com base no valor da compra. As regras de
desconto são as seguintes:

Se o valor da compra for menor que R$ 50, não há desconto.
Se o valor da compra for igual ou superior a R$ 50 e menor que R$ 100, aplique um desconto de 5%.
Se o valor da compra for igual ou superior a R$ 100 e menor que R$ 200, aplique um desconto de 10%.
Se o valor da compra for igual ou superior a R$ 200, aplique um desconto de 15%.
O script deve:

Definir uma variável $valorCompra com um valor de sua escolha.
Usar as estruturas if, elseif, e else para determinar a porcentagem de desconto.
Calcular o valor do desconto e o valor final da compra.
Exibir na tela o valor da compra, a porcentagem de desconto aplicada, o valor do desconto e o valor final da compra.*/

<?php

// 1. Define o valor da compra
$valorCompra = 150; 
$descontoPorcentagem = 0;
$valorDesconto = 0;
$valorFinal = $valorCompra;

// 2. Determina a porcentagem de desconto usando if, elseif e else
if ($valorCompra < 50) {
    $descontoPorcentagem = 0;
} elseif ($valorCompra >= 50 && $valorCompra < 100) {
    $descontoPorcentagem = 5;
} elseif ($valorCompra >= 100 && $valorCompra < 200) {
    $descontoPorcentagem = 10;
} else { // $valorCompra >= 200
    $descontoPorcentagem = 15;
}

// 3. Calcula o valor do desconto e o valor final da compra
$valorDesconto = $valorCompra * ($descontoPorcentagem / 100);
$valorFinal = $valorCompra - $valorDesconto;

// 4. Exibe os resultados na tela
echo "Valor da Compra: R$ " . number_format($valorCompra, 2, ',', '.') . "<br>";
echo "Desconto Aplicado: " . $descontoPorcentagem . "%<br>";
echo "Valor do Desconto: R$ " . number_format($valorDesconto, 2, ',', '.') . "<br>";
echo "Valor Final da Compra: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
?>