<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética de UFs</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
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
            <tr>
                
            </tr>
        </tbody>
    </table>
</body>
</html>