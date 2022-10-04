<?php
define('QUEBRA', "</br>");

# Variáveis em PHP
# 1. Iniciam sempre com o símbolo cifrão ($)
# 2. São Case Sensitive (diferenciam maiúsculas de minúsculas)
# 3. Seguem os mesmos padrões de declaração do C e do Java
# 4. Suas declaraçòes são sempre finalizadas com ponto e vírgula (;)
# 5. Os tipos de dados são dinâmicos, sem necessidade de declaração
#######

# Declaraçao de variáveis
# $nome_da_variável = valor;
$nome = 'Edson Souza'; # string é sempre entre aspas (simples ou dupla)
$idade = 51; # int
$salario = 3250.58; # float
$valido = true; # booleano (true ou false)
$valores = [1250, 'Edson', $salario, false]; # variável do tipo array (valores mistos)

# Saída de dados pode ser de três tipos, sendo um literal, string ou variável
# 1. echo valor_1, valor_2, ... , valor_n;
# 2. echo(valor);
# 3. print(valor);
# Observação: o salto de linha via pronto é através do escape "\n" ou pela constante PHP_EOL

// echo $nome . QUEBRA;
// echo ($idade . QUEBRA);
// print($salario . QUEBRA);

# Para arrays, são utilizados dois comandos para mostrar dados (print_r() e var_dump())
# Esses comandos mostram os valores e os índices de um array
# Normalmente variáveis dete tipo são utilizadas em conjunto iterações (laços)

// echo "<pre>";
// print_r($valores);
// echo "</pre>";

// echo "</br>";

// echo "<pre>";
// var_dump($valores);
// echo "</pre>";

# Estrutura de decisão IF - ELSIF - ELSE
# Pode ser usado de duas formas: com {} ou : e endif;
# Forma 1

# rand(min, max) gera núemros aleatórios dentro do intervalo
// $idade = rand(0, 99);
// if ($idade < 18) {
//     echo "$idade é menor de idade" . QUEBRA;
// } elseif ($idade > 17 && $idade < 60) {
//     echo "$idade é maior de idade" . QUEBRA;
// } else {
//     echo "$idade é terceira idade" . QUEBRA;
// }

# Forma 2
// $idade = rand(0, 99);
// if ($idade < 18):
//     echo "$idade é menor de idade" . QUEBRA;
// elseif ($idade > 17 && $idade < 60):
//     echo "$idade é maior de idade" . QUEBRA;
// else:
//     echo "$idade é terceira idade" . QUEBRA;
// endif;

# Estrutura de seleção (switch e match)
# switch

// $valor = rand(0, 3);
// switch ($valor) {
//     case 1:
//         echo "Valor $valor" . QUEBRA;
//         break;
//     case 2:
//         echo "Valor $valor" . QUEBRA;
//         break;
//     default:
//         echo "Valor $valor não localizado" . QUEBRA;
//         break;
// }

# PHP8 - match
// $valor = rand(0, 3);
// $resultado = match($valor) {
//     1 => "Valor $valor",
//     2 => "Valor $valor",
//     default => "Valor $valor não localizado",
// };
// echo $resultado . QUEBRA;

########

# Estruturas de repetição: while, for e foreach
# while
// $contador = 1;
// while ($contador < 11) {
//     echo $contador . QUEBRA;
//     $contador++;
// }

// $contador = 1;
// while ($contador < 11):
//     echo $contador . QUEBRA;
//     $contador++;
// endwhile;

# foreach para percorrer arrays
$salario = 3250.01;

#            0       1         2
$valores = [1250, 'Edson', $salario]; # variável do tipo array (valores mistos)

// for ($i = 0; $i < sizeof($valores); $i++) { # sizeof conta o nr. de elementos de um array
//     echo $valores[$i] . QUEBRA;
// }

// foreach ($valores as $valor) {
//     echo $valor . QUEBRA;
// }

####### Arrays Associativos e laços foreach()
# São arrays declarados com o par "chave => valor", funcionando como dicionários (JSON)
$pessoa = [
    'id' => 1,
    'nome' => 'Edson Souza',
    'salario' => 1200.00,
];

// echo $pessoa['id'] . QUEBRA;
// echo $pessoa['nome'] . QUEBRA;
// echo $pessoa['salario'] . QUEBRA;

// echo "<pre>";
// print_r($pessoa);
// echo "</pre>";

# usando o foreach
// foreach ($pessoa as $chave => $valor) {
//     echo $chave . ': ' . $valor . PHP_EOL;
// }

// foreach ($pessoa as $chave => $valor) {
//     if ($chave == 'id' && $valor == 1) {
//         echo $pessoa['nome'] . PHP_EOL;
//     }
// }

# Desafio: Criar e percorrer um array que contenha três alunos.
# A saída deverá mostrar: ra, nome e semestre de cada aluno individualmente

$alunos = [
    [
        'ra' => 123,
        'nome' => 'Pica-Pau',
        'semestre' => 1,
    ],
    [
        'ra' => 456,
        'nome' => 'Tio Patinhas',
        'semestre' => 2,
    ],
    [
        'ra' => 789,
        'nome' => 'Zé Carioca',
        'semestre' => 5,
    ],
];

#percorrendo os alunos
#array mais externo que contém os outros arrays de alunos
foreach ($alunos as $aluno) {
    # percorre cada aluno
    foreach ($aluno as $key => $value) {
        echo $key . ': ' . $value . PHP_EOL;
    }
    echo PHP_EOL;
}