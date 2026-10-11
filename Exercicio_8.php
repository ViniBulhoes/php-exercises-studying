<?php

// Desafio 8: Painel de Chamados de Suporte (Tickets)

// O Cenário:
 
// O banco de dados enviou a lista de chamados (tickets) que entraram no dia. 
// Você precisa mostrar no painel um resumo rápido de quantos chamados estão Abertos e quantos já foram Fechados.
// Você está desenvolvendo a tela inicial do sistema do setor de TI. 

// Aqui estão os dados:

    $chamados = [
    ["id" => 101, "assunto" => "Senha bloqueada", "status" => "Aberto"],
    ["id" => 102, "assunto" => "Monitor não liga", "status" => "Fechado"],
    ["id" => 103, "assunto" => "Acesso ao sistema", "status" => "Aberto"],
    ["id" => 104, "assunto" => "Erro na impressão", "status" => "Fechado"],
    ["id" => 105, "assunto" => "Software travando", "status" => "Aberto"]
    ];

// Sua tarefa:
// Escreva o código PHP para contar a quantidade de chamados em cada um dos status e imprimir o resultado final.

// Passo a passo sugerido:
// Crie duas variáveis começando com zero antes do laço (ex: $qtdAbertos = 0; e $qtdFechados = 0;).
// Faça o foreach para percorrer o array $chamados.
// Use o if e else (ou dois ifs, como preferir) para verificar o status do chamado.
// Se for "Aberto", adicione 1 à variável $qtdAbertos. Se for "Fechado", adicione 1 à variável $qtdFechados. 
// (Dica: no PHP, você pode fazer $variavel = $variavel + 1; ou usar o atalho $variavel++;).
// Lembre-se de colocar o echo final fora das chaves do foreach para mostrar o resumo apenas quando a contagem terminar.

$qtdAbertos = 0;
$qtdFechados = 0;

    foreach ($chamados as $chamado) {
        if ($chamado["status"] == "Aberto") {
            $qtdAbertos++;
            echo "Chamado Aberto encontrado! <br>";
        } elseif ($chamado["status"] == "Fechado") {
            $qtdFechados++;
            echo "Chamado Fechado encontrado! <br>";
        }
    }

    echo "Total de chamados Abertos: " . $qtdAbertos . "<br>" . "Total de chamados Fechados: " . $qtdFechados . "<br>";

?>