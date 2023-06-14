<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética de UFs</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">

    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        table{
            text-align: center;
            border-collapse: collapse;    
        }
        img{
            width: 70px;
            width: 50px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
    echo "<h1>Lista Sintética</h1>";
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
                        ],
                        $espiritosanto = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Espírito_Santo.svg">',
                            'uf'=> 'Espírito Santo',
                            'abreviacao'=> 'ES',
                            'sede_governo'=> 'Vitória',
                            'area'=> 46077.5,
                            'populacao'=> 3894899,
                            'densidade'=> 73.97,
                            'pib'=> 120363000,
                            'porcentagem'=> 2.0,
                            'pibpercapta'=> 30627.45,
                            'idh'=> 0.740,
                            'alfabetizacao'=> '93.8%',
                            'mortalidadeinfantil'=> '8.8%',
                            'expectativavida'=> '78.2 anos'
                        ],
                        $goias = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goiás.svg">',
                            'uf'=> 'Goiás',
                            'abreviacao'=> 'GO',
                            'sede_governo'=> 'Goiânia',
                            'area'=> 340086.7,
                            'populacao'=> 6551322,
                            'densidade'=> 16.52,
                            'pib'=> 173632000,
                            'porcentagem'=> 2.9,
                            'pibpercapta'=> 26265.32,
                            'idh'=> 0.735,
                            'alfabetizacao'=> '93.5%',
                            'mortalidadeinfantil'=> '14.9%',
                            'expectativavida'=> '74.2 anos'
                        ],
                        $maranhao = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranhão.svg">',
                            'uf'=> 'Maranhão',
                            'abreviacao'=> 'MA',
                            'sede_governo'=> 'São Luís',
                            'area'=> 331983.3,
                            'populacao'=> 6861924,
                            'densidade'=> 18.38,
                            'pib'=> 78475000,
                            'porcentagem'=> 1.3,
                            'pibpercapta'=> 11366.23,
                            'idh'=> 0.639,
                            'alfabetizacao'=> '83.3%',
                            'mortalidadeinfantil'=> '21.3%',
                            'expectativavida'=> '70.6 anos'
                        ],
                        $matogrosso = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg">',
                            'uf'=> 'Mato Grosso',
                            'abreviacao'=> 'MT',
                            'sede_governo'=> 'Cuiabá',
                            'area'=> 903357.9,
                            'populacao'=> 3236578,
                            'densidade'=> 3.10,
                            'pib'=> 107418000,
                            'porcentagem'=> 1.8,
                            'pibpercapta'=> 32894.96,
                            'idh'=> 0.725,
                            'alfabetizacao'=> '93.5%',
                            'mortalidadeinfantil'=> '16.9%',
                            'expectativavida'=> '74.2 anos'
                        ],
                        $matogrossodosul = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg">',
                            'uf'=> 'Mato Grosso do Sul',
                            'abreviacao'=> 'MS',
                            'sede_governo'=> 'Campo Grande',
                            'area'=> 357125.0,
                            'populacao'=> 2630098,
                            'densidade'=> 6.34,
                            'pib'=> 83082000,
                            'porcentagem'=> 1.4,
                            'pibpercapta'=> 31337.22,
                            'idh'=> 0.765,
                            'alfabetizacao'=> '93.4%',
                            'mortalidadeinfantil'=> '14.9%',
                            'expectativavida'=> '75.1 anos'
                        ],
                        $minasgerais = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg">',
                            'uf'=> 'Minas Gerais',
                            'abreviacao'=> 'MG',
                            'sede_governo'=> 'Belo Horizonte',
                            'area'=> 586522.1,
                            'populacao'=> 21168791,
                            'densidade'=> 36.06,
                            'pib'=> 471299000,
                            'porcentagem'=> 7.9,
                            'pibpercapta'=> 22322.63,
                            'idh'=> 0.731,
                            'alfabetizacao'=> '91.4%',
                            'mortalidadeinfantil'=> '12.3%',
                            'expectativavida'=> '76.6 anos'
                        ],
                        $para = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Pará.svg">',
                            'uf'=> 'Pará',
                            'abreviacao'=> 'PA',
                            'sede_governo'=> 'Belém',
                            'area'=> 1247954.6,
                            'populacao'=> 8272724,
                            'densidade'=> 6.53,
                            'pib'=> 125971000,
                            'porcentagem'=> 2.1,
                            'pibpercapta'=> 14502.98,
                            'idh'=> 0.639,
                            'alfabetizacao'=> '88.4%',
                            'mortalidadeinfantil'=> '20.4%',
                            'expectativavida'=> '71.7 anos'
                        ],
                        $paraiba = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Paraíba.svg">',
                            'uf'=> 'Paraíba',
                            'abreviacao'=> 'PB',
                            'sede_governo'=> 'João Pessoa',
                            'area'=> 56585.0,
                            'populacao'=> 3996496,
                            'densidade'=> 68.83,
                            'pib'=> 57177000,
                            'porcentagem'=> 1.0,
                            'pibpercapta'=> 14449.10,
                            'idh'=> 0.683,
                            'alfabetizacao'=> '84.4%',
                            'mortalidadeinfantil'=> '15.8%',
                            'expectativavida'=> '74.1 anos'
                        ],
                        $parana = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paraná.svg">',
                            'uf'=> 'Paraná',
                            'abreviacao'=> 'PR',
                            'sede_governo'=> 'Curitiba',
                            'area'=> 199307.9,
                            'populacao'=> 10997462,
                            'densidade'=> 53.75,
                            'pib'=> 368991000,
                            'porcentagem'=> 6.2,
                            'pibpercapta'=> 33262.89,
                            'idh'=> 0.749,
                            'alfabetizacao'=> '96.3%',
                            'mortalidadeinfantil'=> '9.7%',
                            'expectativavida'=> '77.5 anos'
                        ],
                        $pernambuco = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg">',
                            'uf'=> 'Pernambuco',
                            'abreviacao'=> 'PE',
                            'sede_governo'=> 'Recife',
                            'area'=> 98311.6,
                            'populacao'=> 9496294,
                            'densidade'=> 96.49,
                            'pib'=> 181850000,
                            'porcentagem'=> 3.1,
                            'pibpercapta'=> 19367.45,
                            'idh'=> 0.694,
                            'alfabetizacao'=> '90.7%',
                            'mortalidadeinfantil'=> '14.2%',
                            'expectativavida'=> '73.9 anos'
                        ],
                        $piaui = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piauí.svg">',
                            'uf'=> 'Piauí',
                            'abreviacao'=> 'PI',
                            'sede_governo'=> 'Teresina',
                            'area'=> 251577.7,
                            'populacao'=> 3264531,
                            'densidade'=> 12.82,
                            'pib'=> 46428100,
                            'porcentagem'=> 0.8,
                            'pibpercapta'=> 14117.61,
                            'idh'=> 0.639,
                            'alfabetizacao'=> '86.7%',
                            'mortalidadeinfantil'=> '18.3%',
                            'expectativavida'=> '70.8 anos'
                        ],
                        $rj = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg">',
                            'uf'=> 'Rio de Janeiro',
                            'abreviacao'=> 'RJ',
                            'sede_governo'=> 'Rio de Janeiro',
                            'area'=> 43780.2,
                            'populacao'=> 16718956,
                            'densidade'=> 365.42,
                            'pib'=> 671119000,
                            'porcentagem'=> 11.2,
                            'pibpercapta'=> 40111.45,
                            'idh'=> 0.761,
                            'alfabetizacao'=> '93.8%',
                            'mortalidadeinfantil'=> '10.8%',
                            'expectativavida'=> '76.7 anos'
                        ],
                        $riograndedonorte = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg">',
                            'uf'=> 'Rio Grande do Norte',
                            'abreviacao'=> 'RN',
                            'sede_governo'=> 'Natal',
                            'area'=> 52811.1,
                            'populacao'=> 3506853,
                            'densidade'=> 66.34,
                            'pib'=> 53883700,
                            'porcentagem'=> 0.9,
                            'pibpercapta'=> 15305.40,
                            'idh'=> 0.684,
                            'alfabetizacao'=> '92.4%',
                            'mortalidadeinfantil'=> '13.3%',
                            'expectativavida'=> '75.1 anos'
                        ],
                        $riograndedosul = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg">',
                            'uf'=> 'Rio Grande do Sul',
                            'abreviacao'=> 'RS',
                            'sede_governo'=> 'Porto Alegre',
                            'area'=> 281730.2,
                            'populacao'=> 11329605,
                            'densidade'=> 40.16,
                            'pib'=> 374452000,
                            'porcentagem'=> 6.3,
                            'pibpercapta'=> 33842.74,
                            'idh'=> 0.746,
                            'alfabetizacao'=> '96.5%',
                            'mortalidadeinfantil'=> '10.9%',
                            'expectativavida'=> '77.8 anos'
                        ],
                        $rondonia = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rondônia.svg">',
                            'uf'=> 'Rondônia',
                            'abreviacao'=> 'RO',
                            'sede_governo'=> 'Porto Velho',
                            'area'=> 237590.7,
                            'populacao'=> 1796460,
                            'densidade'=> 7.57,
                            'pib'=> 42952600,
                            'porcentagem'=> 0.7,
                            'pibpercapta'=> 24702.80,
                            'idh'=> 0.719,
                            'alfabetizacao'=> '93.4%',
                            'mortalidadeinfantil'=> '17.4%',
                            'expectativavida'=> '72.9 anos'
                        ],
                        $roraima = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg">',
                            'uf'=> 'Roraima',
                            'abreviacao'=> 'RR',
                            'sede_governo'=> 'Boa Vista',
                            'area'=> 224300.5,
                            'populacao'=> 652713,
                            'densidade'=> 2.85,
                            'pib'=> 12391300,
                            'porcentagem'=> 0.2,
                            'pibpercapta'=> 19666.47,
                            'idh'=> 0.725,
                            'alfabetizacao'=> '96.1%',
                            'mortalidadeinfantil'=> '19.6%',
                            'expectativavida'=> '72.4 anos'
                        ],
                        $santacatarina = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg">',
                            'uf'=> 'Santa Catarina',
                            'abreviacao'=> 'SC',
                            'sede_governo'=> 'Florianópolis',
                            'area'=> 95736.2,
                            'populacao'=> 7252502,
                            'densidade'=> 76.00,
                            'pib'=> 254503000,
                            'porcentagem'=> 4.3,
                            'pibpercapta'=> 35124.11,
                            'idh'=> 0.774,
                            'alfabetizacao'=> '97.4%',
                            'mortalidadeinfantil'=> '9.2%',
                            'expectativavida'=> '79.1 anos'
                        ],
                        $saopaulo = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_São_Paulo.svg">',
                            'uf'=> 'São Paulo',
                            'abreviacao'=> 'SP',
                            'sede_governo'=> 'São Paulo',
                            'area'=> 248222.8,
                            'populacao'=> 45919049,
                            'densidade'=> 184.66,
                            'pib'=> 2169910000,
                            'porcentagem'=> 36.5,
                            'pibpercapta'=> 46860.48,
                            'idh'=> 0.783,
                            'alfabetizacao'=> '95.4%',
                            'mortalidadeinfantil'=> '10.8%',
                            'expectativavida'=> '77.4 anos'
                        ],
                        $sergipe = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg">',
                            'uf'=> 'Sergipe',
                            'abreviacao'=> 'SE',
                            'sede_governo'=> 'Aracaju',
                            'area'=> 21915.1,
                            'populacao'=> 2278308,
                            'densidade'=> 96.88,
                            'pib'=> 36763200,
                            'porcentagem'=> 0.6,
                            'pibpercapta'=> 16212.82,
                            'idh'=> 0.665,
                            'alfabetizacao'=> '92.4%',
                            'mortalidadeinfantil'=> '15.6%',
                            'expectativavida'=> '72.7 anos'
                        ],
                        $tocantins = [
                            'bandeira'=> '<img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg">',
                            'uf'=> 'Tocantins',
                            'abreviacao'=> 'TO',
                            'sede_governo'=> 'Palmas',
                            'area'=> 277720.5,
                            'populacao'=> 1590248,
                            'densidade'=> 5.66,
                            'pib'=> 26637400,
                            'porcentagem'=> 0.4,
                            'pibpercapta'=> 16701.50,
                            'idh'=> 0.699,
                            'alfabetizacao'=> '93.4%',
                            'mortalidadeinfantil'=> '19.5%',
                            'expectativavida'=> '73.9 anos'
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