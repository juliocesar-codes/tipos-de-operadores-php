<?php
echo "<h1>Operadores Relacionais</h1>";
$valorA = 15;
$valorB = 5;
$valorC = 10;
echo "Valores de referência: A=10 B=5 C=10";

echo "<br><hr><br>";
echo "<h3>Igualdades: == </h3>";
if($valorA == $valorB){
    $igual = 'verdadeiro';
}else{
    $igual = 'falso';
}
echo "Na comparação: {$valorA} == {$valorB} o resultado é {$igual}";

echo "<br><hr><br>";
echo "<h3>Maior que: > </h3>";
if($valorA > $valorB){
    $igual = 'verdadeiro';
}else{
    $igual = 'falso';
}
echo "Na comparação: {$valorA} > {$valorB} o resultado é {$igual}";

echo "<br><hr><br>";
echo "<h3>Menor que: < </h3>";
if($valorA < $valorB){
    $igual = 'verdadeiro';
}else{
    $igual = 'falso';
}
echo "Na comparação: {$valorA} < {$valorB} o resultado é {$igual}";

echo "<br><hr><br>";
echo "<h3>Maior ou igual:>= </h3>";
if($valorA >= $valorB){
    $igual = 'verdadeiro';
}else{
    $igual = 'falso';
}
echo "Na comparação: {$valorA} >= {$valorB} o resultado é {$igual}";

echo "<br><hr><br>";
echo "<h3>Menor ou igual: <= </h3>";
if($valorA <= $valorB){
    $igual = 'verdadeiro';
}else{
    $igual = 'falso';
}
echo "Na comparação: {$valorA} <= {$valorB} o resultado é {$igual}";

echo "<br><hr><br>";
echo "<h3>Diferente de: !=</h3>";
if($valorA != $valorB){
    $igual = 'verdadeiro';
}else{
    $igual = 'falso';
}
echo "Na comparação: {$valorA} != {$valorB} o resultado é {$igual}";
