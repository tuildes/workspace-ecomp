<?php

// Namespace para o arquivo php
namespace arv\helloworld;

// Limpar erro de Xdebug
echo("\n");

// Variaveis
// Não pode começar com número, e precisa ser var_nome_da_variavel
// nome_variavel !== NOME_VARIAVEL
$mensagem = "Hello World!";
// Array normal
$array_teste = array('Hello', 'World!');
// Array de chaves
$array_objeto = array('cidade' => 'Curitiba', 2=>'Testes');

// Funções

function nome_funcao (int $v) {
    return $v * 2;
};

// & antes eh o tipo de retorno
// & dentro eh o tipo de referencia dos parametros
function &funcao_referencia (int &$v) {
    $v++;
};

// Ações
echo("Hello World!\n");
echo $mensagem;
echo("\n");
echo $array_teste[0], ' ', $array_teste[1];
echo("\n");
echo $array_objeto['cidade'], ' & ', $array_objeto[2];
echo("\n");
echo 'Função de dobrar: 5*2 = ', nome_funcao(5);
echo("\n");

if (1 != 2) {
    echo ("1 == 2");
} else {
    echo ("1 != 2");
};

echo("\n");

for ($i = 0; $i <= 10; $i++) {
    echo "Loop ", $i, "\n";
}

echo("\n");

// For each faz algo em tudo do array
$array_2 = array('bittersweet', 'memories', 'validation', 'grana azul', 'fznd grana');
foreach ( $array_2 as $temp ) {
    echo $temp, "\n";
};
echo "\n";

// While repete ate a condicao acabar
// Do {} while () faz e depois verifica
// Switch (case)

// require
// include

?>