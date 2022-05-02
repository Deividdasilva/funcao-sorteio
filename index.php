<?php
    function sorteio()
    {
        $numerosSorteados = [];
        $repetido = false;
        $numerosNaoRepetidos = " ";
        
        for($i = 1; $i <= 20; $i++)
        {
            $numerosSorteados[$i] = rand(1,10);
        }

        for($j = 1; $j <= 20; $j++)
        {
            $repetido = false;
            for($k = $j+1; $k <= 20; $k++)
            {
                if($numerosSorteados[$j] == $numerosSorteados[$k])
                {
                    $repetido = true;
                }
            }

            if(!$repetido)
            {
                $numerosNaoRepetidos .= $numerosSorteados[$j];
                if($j != 20)
                {
                    $numerosNaoRepetidos .= ", ";
                }
            }
        }

        print_r("Os números que não se repetem são os:" . $numerosNaoRepetidos);
    }