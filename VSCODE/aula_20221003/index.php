<?php

// Inclui o arquivo de estilos CSS
include __DIR__ . '/styles.php'

// Blocos que iremos utilizar
echo '<h1></h1>';
echo '<h2></h2>';
echo '<h3></h3>';

echo '<pre>';
print_r();
echo '</pre>';

echo '<pre>';
var_dump();
echo '</pre>';

///////////
///////////
///////////
/////////// Inicio do nosso conteudo ///////////
echo '<h1>Funções em PHP</h1>';
echo '<h2>Definição de uma função</h2>';

// Definir uma função que receba dois valores e retorne
// a some entre eles: soma(valor1, valor2)
function soma(valor1, valor2){
    return $valor1 + $valor2;
}

echo '<pre>';
print_r(soma(10, 20));
echo '</pre>';

///////////
///////////
///////////
///////////
///////////
/////////// 1. Manipulação de Strings ///////////

echo '<h3>Funções de texto (String)</h3>';

# Variavel 1
$texto = 'Hoje o dia está muito frio.';

# Qual o tamanho do texto?
echo '<h3>strlen(string)</h3>';
echo '<pre>';
print_r(strlen($texto));
echo '</pre>';

echo '<pre>';
var_dump($texto);
echo '</pre>';

# Transformar em maiúsculas
echo '<h3>strtoupper(string)</h3>';
echo '<pre>';
print_r(strtoupper($texto));
echo '</pre>';

# Transformar em maiúsculas caracteres especiais UTF-8
echo '<h3>mb_strtoupper(string)</h3>';
echo '<pre>';
print_r(mb_strtoupper($texto));
echo '</pre>';

# Transformar em minúsculas caracteres especiais UTF-8
echo '<h3>mb_strtolower(string)</h3>';
echo '<pre>';
print_r(mb_strlower($texto));
echo '</pre>';

# Variavel 2
$texto = ' Higor Rocha  ';

# Removendo espaçoes desnecessários
# esquerda - ltrin()
# direita - rtrin()
# extremos - trin()

echo '<h3>ltrin(string)</h3>';
echo '<pre>';
var_dump(ltrin($texto));
echo '</pre>';

echo '<h3>rtrin(string)</h3>';
echo '<pre>';
var_dump(ltrin($texto));
echo '</pre>';

echo '<h3>trin(string)</h3>';
echo '<pre>';
var_dump(trin($texto));
echo '</pre>';

///////////
///////////
///////////
///////////
///////////
/////////// 2. Manipulação de Dados ///////////

echo '<h3>Substituição</h3>';
# str_replace(valor_procurado_valor_a_substituir, $variavel)

$texto = 'Esta noite está muito quente.';
echo '<pre>';
var_dump(str_replace('quente', 'fria', $texto));
echo '</pre>';

# E se precisar substituir mais de uma palavra?
# Mudar para: Hoje é um velho dia
$palavra = 'Amanhã é um novo dia.'; 
echo '<pre>';
var_dump(str_replace(['Amanhã','novo'], ['Hoje','velho'], $palavra));
echo '</pre>';

echo '<h3>String para Arrays</h3>';
$texto = 'Tio Patinhas';
echo '<pre>';
print_r(str_split($texto));
echo '</pre>';

echo '<h3>String para Arrays (critério)</h3>';
$texto = 'Tio Patinhas';
echo '<pre>';
print_r(explode(' ', $texto));
echo '</pre>';

///////////
///////////
///////////
///////////
///////////
/////////// 3. Classes e Métodos ///////////

echo '<h3>Classe Aluno</h3>';
class Aluno{
    // atributos
    private $nome;
    private static $curso;

    // getters and setters
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public static function setCurso($curso){
        self::$curso = $curso;
    }

    public static function getCurso(){
        return self::$curso;
    }
}

# Instanciando uma classe
$aluno = new Aluno();
$aluno->setNome('Higor Rocha');
$aluno::setCurso('TADS');

# Printando
echo '<pre>';
print_r($aluno->getNome());
echo '</pre>';

echo '<pre>';
print_r($aluno::getCurso());
echo '</pre>';