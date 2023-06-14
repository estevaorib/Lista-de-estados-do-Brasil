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
            border-collapse: collapse;
            
        }
        img{
            width: 70px;
            width: 50px;
        }

    </style>
</head>
<body>
    <?php 
    echo "<h1>Lista Sintética</h1>";
    echo "<p>De todos os Estados brasileiros, 17 são litorâneos e 11 são fronteiriços, destes somente Mato Grosso, Rondônia e Santa Catarina possuem fronteira com apenas um país. Somente Amapá, Pará, Paraná, Rio Grande do Sul e Santa Catarina acumulam ambas as funções. A linha do equador passa por quatro Estados (AM, AP, PA e RR) e o trópico de Capricórnio por outros três (MS, PR e SP). Somente Tocantins (à exceção do Distrito Federal) não possui municípios que realizem segundo turno eleitoral a nível municipal. Outros três Estados (GO, MG e TO), além do Distrito Federal, têm seus limites territoriais compostos somente por outras unidades federativas, portanto, não fazem fronteira internacional e nem possuem saída para o mar. Curiosamente, nenhum deles é atravessado por qualquer das principais linhas imaginárias do planeta.</p>"
    ?>

    <table border="1">
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
                            'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg">',
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
                        ],
                        $amapa = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amapá.svg">',
                            'uf'=> 'Amapá',
                            'abreviacao'=> 'AP',
                            'sede_governo'=> 'Macapá',
                            'area'=> 142814.6,
                            'populacao'=> 756500,
                            'densidade'=> 4.16,
                            'pib'=> 13861000,
                            'porcentagem'=> 0.2,
                            'pibpercapta'=> 18079.54,
                            'idh'=> 0.708,
                            'alfabetizacao'=> '95%',
                            'mortalidadeinfantil'=> '23.2%',
                            'expectativavida'=> '73.9 anos'
                        ],
                        $amazonas = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg">',
                            'uf'=> 'Amazonas',
                            'abreviacao'=> 'AM',
                            'sede_governo'=> 'Manaus',
                            'area'=> 1570745.7,
                            'populacao'=> 3893763,
                            'densidade'=> 2.05,
                            'pib'=> 86560000,
                            'porcentagem'=> 1.4,
                            'pibpercapta'=> 21978.95,
                            'idh'=> 0.674,
                            'alfabetizacao'=> '93.1%',
                            'mortalidadeinfantil'=> '18.2%',
                            'expectativavida'=> '71.9 anos'
                        ],
                        $bahia = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg">',
                            'uf'=> 'Bahia',
                            'abreviacao'=> 'BA',
                            'sede_governo'=> 'Salvador',
                            'area'=> 564692.7,
                            'populacao'=> 15150143,
                            'densidade'=> 24.46,
                            'pib'=> 245025000,
                            'porcentagem'=> 4.1,
                            'pibpercapta'=> 16115.89,
                            'idh'=> 0.660,
                            'alfabetizacao'=> '87%',
                            'mortalidadeinfantil'=> '17.3%',
                            'expectativavida'=> '73.5 anos'
                        ],
                        $ceara = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Ceará.svg">',
                            'uf'=> 'Ceará',
                            'abreviacao'=> 'CE',
                            'sede_governo'=> 'Fortaleza',
                            'area'=> 148825.6,
                            'populacao'=> 8867448,
                            'densidade'=> 54.40,
                            'pib'=> 130621000,
                            'porcentagem'=> 2.2,
                            'pibpercapta'=> 14669.14,
                            'idh'=> 0.682,
                            'alfabetizacao'=> '84.8%',
                            'mortalidadeinfantil'=> '14.4%',
                            'expectativavida'=> '73.8 anos'
                        ],
                        $distritofederal = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg">',
                            'uf'=> 'Distrito Federal',
                            'abreviacao'=> 'DF',
                            'sede_governo'=> 'Brasília',
                            'area'=> 5822.1,
                            'populacao'=> 2867869,
                            'densidade'=> 400.73,
                            'pib'=> 215613000,
                            'porcentagem'=> 3.6,
                            'pibpercapta'=> 73971.05,
                            'idh'=> 0.824,
                            'alfabetizacao'=> '97.4%',
                            'mortalidadeinfantil'=> '10.5%',
                            'expectativavida'=> '78.1 anos'
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