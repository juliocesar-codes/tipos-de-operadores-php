<?php
include('../includes/header.php');
//Colocar scripts de aula após essa linha
include('menu.php');

if(isset ($_GET["id"])){
    $id =$_GET["id"];
    $file = $id.".php";
    include($file);
}else{
    echo "<h2>Selecione no menu o conteúdo para exibir</h2>";
}

//Não colocar script de aula depois dessa linha
include('../includes/footer.php');