<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php

include 'helper.php';




$numeroElementos = getTotalElementos();
$matriz = [];
$matrizGrama = array_fill(0, tamanhoMatriz(), array_fill(0, tamanhoMatriz(), 1));


function adicionaFormigueiros($matriz){
    $arrayFormigueiros = array_fill(0, tamanhoMatriz(), array_fill(0, tamanhoMatriz(), 1));
    $counterFormigueiros = getTotalFormigueiros();
    while($counterFormigueiros != 0){
      
        $linhaSelecionada = rand(0, tamanhoMatriz() -1);
        $colunaSelecionada = rand(0, tamanhoMatriz() -1);
        if($arrayFormigueiros[$linhaSelecionada][$colunaSelecionada] != 3){
            $counterFormigueiros --;
        }
        $arrayFormigueiros[$linhaSelecionada][$colunaSelecionada]=3;
    }
    return $arrayFormigueiros;
}

function mostarMatrizGramaComFormigueiros($array){
    echo '<pre>';
    for ($i=0; $i <tamanhoMatriz() ; $i++) {
        for ($j=0; $j <tamanhoMatriz() ; $j++) {
            echo $array[$i][$j];
        }
        echo "\n";
    }
    
    echo '</pre>';
}



// print_r(getTotalFormigueiros());

$array = adicionaFormigueiros($matrizGrama);

mostarMatrizGramaComFormigueiros($array);

echo "-------------";
aaa($array);

function aaa($array){
    echo '<pre>';
    
    
    for ($i=0; $i <tamanhoMatriz() ; $i++) {
        
     
        for ($j =0; $j <tamanhoMatriz() ; $j++) {
          $a =$j;
            if($array[$i][$j] == 3){
                echo "*";
                continue;
            }
            if($array[$i][$a++] == 3){
                echo "next";
            }

            
            echo $array[$i][$j];

        }

        echo "\n";
    }
    
    echo '</pre>';
}