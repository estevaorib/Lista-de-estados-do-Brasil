<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética de UFs</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">

    <style>
        table{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
    echo "<h1>Lista Sintética</h1>";
    echo "<p>De todos os Estados brasileiros, 17 são litorâneos e 11 são fronteiriços, destes somente Mato Grosso, Rondônia e Santa Catarina possuem fronteira com apenas um país. Somente Amapá, Pará, Paraná, Rio Grande do Sul e Santa Catarina acumulam ambas as funções. A linha do equador passa por quatro Estados (AM, AP, PA e RR) e o trópico de Capricórnio por outros três (MS, PR e SP). Somente Tocantins (à exceção do Distrito Federal) não possui municípios que realizem segundo turno eleitoral a nível municipal. Outros três Estados (GO, MG e TO), além do Distrito Federal, têm seus limites territoriais compostos somente por outras unidades federativas, portanto, não fazem fronteira internacional e nem possuem saída para o mar. Curiosamente, nenhum deles é atravessado por qualquer das principais linhas imaginárias do planeta.</p>"
    ?>

    <table>
        <thead>
            <tr>
                <?php
                $colunas = [
                    'Bandeira',
                    'Unidade federativa',
                    'Abreviação',
                    'Sede de Governo',
                    'Área (km<sup>2</sup>)',
                    'População (2014)',
                    'Densidade (2005)',
                    'PIB (2015)',
                    '(% total)(2015)',
                    'PIB per capita(R$)(2015)',
                    'IDH (2010)',
                    'Alfabetização (2016)',
                    'Mortalidade infantil (2016)',
                    'Expectativa de vida (2016)'
                ];
                foreach($colunas as $valor){
                    echo "<th>$valor</th>";
                }
                ?>
            </tr>
        </thead>

        <tbody>
                <?php 
                    $lista = [
                        $acre = [
                            'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Bandeira_do_Acre.svg/45px-Bandeira_do_Acre.svg.png">',
                            'uf' => 'Acre',
                            'abreviacao' => 'AC',
                            'sede_governo' => 'Rio Branco',
                            'area' => 164122.2,
                            'populacao' => 795145,
                            'densidade' => 4.30,
                            'pib' => 13622000,
                            'porcentagem' => 0.2,
                            'pibpercapta' => 16953.46,
                            'idh' => 0.663,
                            'alfabetizacao' => '86.9%',
                            'mortalidadeinfantil' => '17.0%',
                            'expectativavida' => '73.9 anos'
                        ],
                        $alagoas = [
                        'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Bandeira_de_Alagoas.svg/45px-Bandeira_de_Alagoas.svg.png"',
                        'uf' => 'Alagoas',
                        'abreviacao' => 'AL',
                        'sede_governo' => 'Maceió',
                        'area' => 27767.7,
                        'populacao' => 3327551,
                        'densidade' => 108.61,
                        'pib' => 46364000,
                        'porcentagem' => 0.8,
                        'pibpercapta' => 13877.53,
                        'idh' => 0.631,
                        'alfabetizacao' => '80.6%',
                        'mortalidadeinfantil'=> '19.5%',
                        'expectativavida' => '71.6 anos'
                        ]
                    ];

                    foreach($lista as $chave => $valor){
                        echo "<tr>";
                        foreach($valor as $chaveinterna => $valorinterno){
                            echo "<td>$valorinterno</td>";
                        }
                        echo "</tr>";
                    }  
                ?>
        </tbody>
    </table>
</body>
</html>