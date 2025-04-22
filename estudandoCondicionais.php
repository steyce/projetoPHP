<?php
$nota = 69; 
$classificacao = "";

// 2. Determina a classificação da nota usando if, elseif e else
if ($nota >= 90) {
    $classificacao = "Excelente";
} elseif ($nota >= 75 && $nota < 90) {
    $classificacao = "Bom";
} elseif ($nota >= 60 && $nota < 75) {
    $classificacao = "Regular";
} else { // $nota < 60
    $classificacao = "Insuficiente";
}

// 3. Exibe a nota do aluno e sua classificação
echo "Nota do Aluno: " . $nota . "<br>";
echo "Classificação: " . $classificacao . "<br>";
?>
