<?php

// Desafio 7: Calculadora de Horas de Projeto

// O Cenário:

// Você está construindo o painel de um sistema de gestão de tarefas. 
// O banco de dados retornou uma lista com as tarefas do dia de um funcionário. 
// Cada tarefa tem o nome, o status ("pendente" ou "concluida") e a estimativa de horas.

    $tarefas = [
    ["nome" => "Criar tela de login", "status" => "concluida", "horas" => 2],
    ["nome" => "Conectar banco de dados", "status" => "pendente", "horas" => 4],
    ["nome" => "Corrigir bug no carrinho", "status" => "pendente", "horas" => 3],
    ["nome" => "Reunião de alinhamento", "status" => "concluida", "horas" => 1]
    ];

// Sua tarefa:
// Escreva o código PHP para calcular quantas horas de trabalho ainda restam 
// (ou seja, somar as horas apenas das tarefas que estão com o status "pendente").

// Passo a passo:
// Crie uma variável $horasRestantes = 0; antes de começar.
// Faça o laço foreach para percorrer o array $tarefas.
// Crie um if para verificar se o status da tarefa é igual a "pendente" (lembre-se dos parênteses e de usar o == para a comparação).
// Se for pendente, some as horas dessa tarefa na variável $horasRestantes.
// Fora do laço, dê um echo mostrando o total de horas restantes.

    $horasRestantes = 0;

    foreach ($tarefas as $lista) {
        if ($lista["status"] == "pendente") {
            $horasRestantes = $horasRestantes + $lista["horas"];
            echo "Tarefas pendentes encontradas! Horas restantes adicionadas: " . $lista["horas"] . "<br>";
        } else {
            echo "Nenhuma tarefa pendente encontrada! <br>";
        }
    }
    echo "Total de horas restantes: " . $horasRestantes . "<br>";

?>