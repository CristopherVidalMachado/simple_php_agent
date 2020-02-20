<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php

include 'helper.php';




$numeroElementos = getTotalElementos();
$matriz = [];
$matrizGrama = array_fill(0, tamanhoMatriz(), array_fill(0, tamanhoMatriz(), 1));


function adicionaFormigueiros($matriz)
{
    $arrayFormigueiros = array_fill(0, tamanhoMatriz(), array_fill(0, tamanhoMatriz(), 1));
    $counterFormigueiros = getTotalFormigueiros();
    while ($counterFormigueiros != 0) {
        $linhaSelecionada = rand(0, tamanhoMatriz() - 1);
        $colunaSelecionada = rand(0, tamanhoMatriz() - 1);
        if ($arrayFormigueiros[$linhaSelecionada][$colunaSelecionada] != 3) {
            $counterFormigueiros--;
        }
        $arrayFormigueiros[$linhaSelecionada][$colunaSelecionada] = 3;
    }
    return $arrayFormigueiros;
}

function mostarMatrizGramaComFormigueiros($array)
{
    for ($i = 0; $i < tamanhoMatriz(); $i++) {
        for ($j = 0; $j < tamanhoMatriz(); $j++) {
            echo $array[$i][$j];
        }
        echo "\n";
    }

    // echo '</pre>';
}





function mostrarComAsterisco($array)
{
    // echo '<pre>';


    for ($i = 0; $i < tamanhoMatriz(); $i++) {
        for ($j = 0; $j < tamanhoMatriz(); $j++) {
            $a = $j;
            if ($array[$i][$j] == 3) {
                echo "*";
                continue;
            }
            if ($array[$i][$a++] == 3) {
                echo "next";
            }


            echo $array[$i][$j];
        }

        echo "\n";
    }

    // echo '</pre>';
}

function irDireita($matriz, $coluna)
{
    //prox eh null
    if (array_key_exists($coluna + 1, $matriz) == null) {
        return -1;
    }

    //prox posso cortar
    if ($matriz[$coluna + 1] == 1) {
        return 1;
    }

    //prox ja cortei
    if ($matriz[$coluna + 1] == 0) {
        return 0;
    }
    //prox eh for formigueiro
    if ($matriz[$coluna + 1] == 3) {
        return -2;
    }
}

function irEsquerda($matriz, $coluna)
{
    if (array_key_exists($coluna - 1, $matriz) == null) {
        return -1;
    }
    if ($matriz[$coluna - 1] == 1) {
        return 1;
    }
    if ($matriz[$coluna - 1] == 0) {
        return 0;
    }
    if ($matriz[$coluna - 1] == 3) {
        return -2;
    }
}

function irBaixo($matriz, $linha, $coluna)
{
    if (array_key_exists($linha + 1, $matriz) == null || array_key_exists($coluna, $matriz[$linha + 1]) == null) {
        return  -1;
    }
    if ($matriz[$linha + 1][$coluna] == 1) {
        return 1;
    }
    if ($matriz[$linha + 1][$coluna] == 0) {
        return 0;
    }
    if ($matriz[$linha + 1][$coluna] == 3) {
        return -2;
    }
}

function irCima($matriz, $linha, $coluna)
{
    if (array_key_exists($linha - 1, $matriz) == null || array_key_exists($coluna, $matriz[$linha - 1]) == null) {
        return  -1;
    }
    if ($matriz[$linha - 1][$coluna] == 1) {
        return 1;
    }
    if ($matriz[$linha - 1][$coluna] == 0) {
        return 0;
    }
    if ($matriz[$linha - 1][$coluna] == 3) {
        return -2;
    }
}

function diagonalAltaDireita($matriz, $linha, $coluna)
{
    if (array_key_exists($linha - 1, $matriz) == null || array_key_exists($coluna + 1, $matriz[$linha - 1]) == null) {
        return  -1;
    }
    if ($matriz[$linha - 1][$coluna + 1] == 1) {
        return 1;
    }
    if ($matriz[$linha - 1][$coluna + 1] == 0) {
        return 1;
    }
    if ($matriz[$linha - 1][$coluna + 1] == 3) {
        return -2;
    }
}

function diagonalBaixaDireita($matriz, $linha, $coluna)
{
    if (array_key_exists($linha + 1, $matriz) == null || array_key_exists($coluna + 1, $matriz[$linha + 1]) == null) {
        return  -1;
    }
    if ($matriz[$linha + 1][$coluna + 1] == 1) {
        return 1;
    }
    if ($matriz[$linha + 1][$coluna + 1] == 0) {
        return 1;
    }
    if ($matriz[$linha + 1][$coluna + 1] == 3) {
        return -2;
    }
}

function diagonalAltaEsquerda($matriz, $linha, $coluna)
{
    if (array_key_exists($linha - 1, $matriz) == null || array_key_exists($coluna - 1, $matriz[$linha - 1]) == null) {
        return  -1;
    }

    if ($matriz[$linha - 1][$coluna - 1] == 1) {
        return 1;
    }
    if ($matriz[$linha - 1][$coluna - 1] == 0) {
        return 1;
    }
    if ($matriz[$linha - 1][$coluna - 1] == 3) {
        return -2;
    }
}

function diagonalBaixaEsquerda($matriz, $linha, $coluna)
{
    if (array_key_exists($linha + 1, $matriz) == null || array_key_exists($coluna - 1, $matriz[$linha + 1]) == null) {
        return  -1;
    }

    if ($matriz[$linha + 1][$coluna - 1] == 1) {
        return 1;
    }
    if ($matriz[$linha + 1][$coluna - 1] == 0) {
        return 1;
    }
    if ($matriz[$linha + 1][$coluna - 1] == 3) {
        return -2;
    }
}


echo "------------------\n";

$array = adicionaFormigueiros($matrizGrama);
// $array = $matrizGrama;
mostarMatrizGramaComFormigueiros($array);

// echo "-------------\n";
// $array[0] = [1, 3,1 ,1];
// $array[1] = [1, 1,1,1];
// $array[2] = [1, 1,1,1];
// $array[3] = [1, 1,1,3];
// mostrarComAsterisco($array);


if ($array[0][0] == 1) {
    $coluna = 0;
    $linha = 0;

    while (1 == 1) {
        $array[$linha][$coluna] = 0;
        print_r("$linha:  $coluna \n");
        if (irDireita($array[$linha], $coluna) == 1) {
            print_r("direita \n");
            $coluna++;
            continue;
        }
        // elseif (DiagonalAltaDireita($array, $linha, $coluna) == 1) {
        //     print("Diagonal alta direita\n");
            
        //     $linha--;
        
        //     $coluna++;
        //     continue;
        // }  
        // elseif (DiagonalBaixaDireita($array, $linha, $coluna) == 1) {
        //     print("Diagonal baixa direita\n");
        //     $linha++;
        //     $coluna++;
        //     continue;
        // } 
        elseif (irEsquerda($array[$linha], $coluna) == 1) {
            print_r("esquerda\n");
         
            $coluna--;
            continue;
        } elseif (irBaixo($array, $linha, $coluna) == 1) {
            print_r("baixo\n");
            $linha++;
            continue;
        } elseif (irCima($array, $linha, $coluna) == 1) {
            print_r("cima\n");
            
            $linha--;
            continue;
        }
        // elseif (diagonalAltaEsquerda($array, $linha, $coluna) == 1) {
        //     print("Diagonal alta esquerda\n");
            
        //     $linha--;
         
        //     $coluna--;
        //     continue;
        // } elseif (diagonalBaixaEsquerda($array, $linha, $coluna) == 1) {
        //     print("Diagonal baixa esquerda\n");
        //     $coluna--;
        //     $linha++;
        //     continue;
        // }

        
        break;
    }

    echo "\n";

    // }
}

mostarMatrizGramaComFormigueiros($array);
