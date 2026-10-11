<?php

// Exercício 1

// Você recebeu um array associativo simulando dados vindos de uma API.
// Alguns funcionários estão inativos e você precisa aplicar regras de negócio em cima dessa lista.

    $funcionarios = [
        ["id" => 1, "nome" => "Ana", "ativo" => true, "salario" => 3500],
        ["id" => 2, "nome" => "Carlos", "ativo" => false, "salario" => 4200],
        ["id" => 3, "nome" => "Beatriz", "ativo" => true, "salario" => 2800],
        ["id" => 4, "nome" => "Diego", "ativo" => true, "salario" => 5100]
    ];

// Escreva um trecho de código em PHP que itere sobre o array $funcionarios e crie um novo array
// contendo apenas os nomes dos funcionários que cumprem duas condições simultâneas:
// Estão ativos (true).
// Têm salário menor que 4000.

    $funcionariosFiltrados = [];

    foreach ($funcionarios as $funcionario) {
        if ($funcionario["ativo"] == true && $funcionario["salario"] < 4000) {
            echo "O " . $funcionario["nome"] . " se encaixa. <br>";
            $funcionariosFiltrados[] = $funcionario["nome"];
        }
    }

    print_r($funcionariosFiltrados);

?>