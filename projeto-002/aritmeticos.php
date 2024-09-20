<?php
echo "<h1> Operadores de PHP </h1>";
echo "<hr><br></hr>";
echo "<h2> Operadores Aritméticos </h2>";
$numeroA = 15;
$numeroB = 5;
//SOMA +
echo "<h3> Operadores de SOMA +</h3>";
$soma = $numeroA + $numeroB;
echo "A soma de ".$numeroA." e ".$numeroB." é igual a $soma";
echo "<hr><br></hr>";
//SUBTRAÇÃO -
echo "<h3> Operadores de Subtração -</h3>";
$subtracao = $numeroA - $numeroB;
echo "Ao subtrair {$numeroA} de {$numeroB} o resultado é {$subtracao}";
echo "<hr><br></hr>";
//MULTIPLICAÇÃO *
echo "<h3> Operador Multiplicação *</h3>";
$multiplicacao = $numeroA * $numeroB;
echo "Ao multiplicar {$numeroA} de {$numeroB} o resultado é {$multiplicacao}";
echo "<hr><br></hr>";
//DIVISÃO / 
echo "<h3> Operador Divisão /</h3>";
$divide = $numeroA / $numeroB;
echo "Ao dividir {$numeroA} de {$numeroB} o resultado é {$divide}";
echo "<hr><br></hr>";
//MÓDULO %
echo "<h3> Operador Módulo %</h3>";
$modulo = $numeroA % $numeroB;
echo "O módulo da divisão de {$numeroA} por {$numeroB} é {$modulo}";
echo "<hr><br></hr>";
//EXPONENCIAÇÃO **
echo "<h3> Operador Exponenciação **</h3>";
$exponente = $numeroA ** $numeroB;
echo "Ao exponenciar {$numeroA} de {$numeroB} é igual a {$exponente}";
echo "<hr><br></hr>";
