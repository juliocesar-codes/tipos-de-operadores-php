<header>
       <h1>Lista de Projetos de <?= $url;?></h1> 
    </header>
    <main>
    <?php

    $diretorio = getcwd();
    //pega o endereço do diretório
    $pointer = opendir($diretorio);
    //ponteiro que vai percorrer a pasta
    while($nome_itens = readdir($pointer)){
        $itens[] = $nome_itens;
    }
    sort($itens);
    foreach($itens as $listar){
        if($listar!="." && $listar!=".."){
            if(is_dir($listar)){
                if($listar == '.git' || $listar == 'css'){
                    echo "";
                }else{
                    $pastas[] = $listar;
                    echo "<a href='{$listar}' target='_blank' class='linkBtn col-2'>{$listar}</a>";
                }    
            }else{
                $arquivos[] = $listar;
            }
        }
    }
    ?> 
    </main>